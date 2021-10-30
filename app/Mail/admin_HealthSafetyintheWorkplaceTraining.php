<?php

namespace App\Mail;

use PDF;
use Storage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class admin_HealthSafetyintheWorkplaceTraining extends Mailable
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

        $hash = md5(uniqid().'01810479f2856f9ebab37a9b4a9b4f29'.microtime().env('NAME').env('COMPANY_ADDRESS'));

        $data = [
                'logo' => env('PDF_LOGO'),
                'company_name' => env('NAME'),
                'name' => $this->data['name'],
                'course' => 'Level 2 Health and Safety in the Workplace Training',
                'course_topics' => [
                    'Benefits of health and safety',
                    'Common workplace accidents',
                    'Factors that impact on health and safety',
                    'The Health and Safety at Work Act 1974',
                    'The Health and Safety Executive',
                    'Health Hazards',
                    'Personal Protective Equipment',
                    'RIDDOR 2013'
                ],
                'company_address' => env('COMPANY_ADDRESS'),
                'company_number' => env('COMPANY_NUMBER'),
        ];


        $pdf = PDF::loadView('pdf.certificate', $data);
        $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);

        $url = "/certificates/$hash/certificate.pdf";

        Storage::put("public".$url, $pdf->stream());

        $this->data['pdf'] = env('APP_URL').'/storage'.$url;
        
        return $this->from(env('ADMIN_EMAIL'))
            ->subject('Level 2 Health and Safety in the Workplace Training')
            ->view('emails.admin_HealthSafetyintheWorkplaceTraining')->with($this->data);
    }
}
