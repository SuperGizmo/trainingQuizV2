<?php

namespace App\Mail;

use PDF;
use Storage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class customer_generalHealthandSafetyQuiz extends Mailable
{
    use Queueable, SerializesModels;

	public $data;
    public $percent;
    public $status;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $percent, $status)
    {
        $this->data = $data->all();
        $this->percent = $percent;
        $this->status = $status;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $hash = md5(uniqid().'01810479f2856f9ebab37a9b4a9b4f29'.microtime().config('.siteNAME').config('.siteCOMPANY_ADDRESS'));

        $data = [
                'logo' => config('.sitePDF_LOGO'),
                'company_name' => config('.siteNAME'),
                'name' => $this->data['name'],
                'course' => 'General Health and Safety Quiz',
                'percent' => $this->percent,
                'status' => $this->status,
                'company_address' => config('.siteCOMPANY_ADDRESS'),
                'company_number' => config('.siteCOMPANY_NUMBER'),
        ];

        // return view('pdf.certificate')->with($data);

        $pdf = PDF::loadView('pdf.answer', $data);
        $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);

        $url = "/certificates/$hash/certificate.pdf";

        Storage::put("public".$url, $pdf->stream());

        $this->data['pdf'] = config('.siteAPP_URL').'/storage'.$url;

        return $this->from(config('.siteADMIN_EMAIL'))
            ->subject('General Health and Safety Quiz')
            ->view('emails.customer_GeneralHealthandSafetyQuiz')->with($this->data)->withPercent($this->percent)->withStatus($this->status);
    }
}
