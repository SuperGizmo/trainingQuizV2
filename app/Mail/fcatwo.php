<?php

namespace App\Mail;

use PDF;
use Storage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class fcatwo extends Mailable
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
                'course' => 'FCA Compliance Training Course 2 - Introducer',
                'course_topics' => [
                    'Role of the Financial Conduct Authority',
                    'Consumer Credit Act & Consumer Credit Directive',
                    'Role and Responsibilities of an Introducer',
                    'Treating Customers Fairly',
                    'Vulnerable Customers',
                    'Visiting Consumers in their Home',
                    'Data Protection',
                    'Anti-Money Laundering',
                    'Complaints Handling'
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
            ->subject('FCA Compliance Training Course 2')
            ->view('emails.fcatwo')->with($this->data);
    }
}
