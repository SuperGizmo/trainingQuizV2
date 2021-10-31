<?php

  namespace App\Mail;

  use PDF;
  use Storage;
  use Illuminate\Bus\Queueable;
  use Illuminate\Mail\Mailable;
  use Illuminate\Queue\SerializesModels;
  use Illuminate\Contracts\Queue\ShouldQueue;

  class admin_HazardousSubstancesandWorkingatHeight extends Mailable
  {
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
      $this->data = $data->all();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

      $hash = md5(uniqid() . '01810479f2856f9ebab37a9b4a9b4f29' . microtime() . config('.siteNAME') . config('.siteCOMPANY_ADDRESS'));

      $data = [
        'logo' => config('.sitePDF_LOGO'),
        'company_name' => config('.siteNAME'),
        'name' => $this->data['name'],
        'course' => 'Hazardous Substances and Working at Height',
        'course_topics' => [
          'Hazardous substances',
          'Routes of entry',
          'Control measures',
          'Working at height',
          'Reducing the risks',
          'Access equipment',
          'Ladders'
        ],
        'company_address' => config('.siteCOMPANY_ADDRESS'),
        'company_number' => config('.siteCOMPANY_NUMBER'),
      ];


      $pdf = PDF::loadView('pdf.certificate', $data);
      $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);

      $url = "/certificates/$hash/certificate.pdf";

      Storage::put("public" . $url, $pdf->stream());

      $this->data['pdf'] = config('.siteAPP_URL') . '/storage' . $url;

      return $this->from(config('.siteADMIN_EMAIL'))
        ->subject('Hazardous Substances and Working at Height')
        ->view('emails.admin_HazardousSubstancesandWorkingatHeight')->with($this->data);
    }
  }
