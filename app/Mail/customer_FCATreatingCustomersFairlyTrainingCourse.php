<?php

namespace App\Mail;

use PDF;
use Storage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class customer_FCATreatingCustomersFairlyTrainingCourse extends Mailable
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

        $hash = md5(uniqid().'01810479f2856f9ebab37a9b4a9b4f29'.microtime().config('site.NAME').config('site.COMPANY_ADDRESS'));

        $data = [
                'logo' => config('site.PDF_LOGO'),
                'company_name' => config('site.NAME'),
                'name' => $this->data['name'],
                'course' => 'FCA Treating Customers Fairly Training Course',
                'course_topics' => [
                    'What is Treating Customers Fairly (TCF)',
                    'Six TCF Outcomes',
                    'Vulnerable Customers',
                    'Your Role and Responsibilities',
                    'Identifying Vulnerable Customers',
                    'Documenting details of Vulnerable Customers'
                ],
                'company_address' => config('site.COMPANY_ADDRESS'),
                'company_number' => config('site.COMPANY_NUMBER'),
        ];


        $pdf = PDF::loadView('pdf.certificate', $data);
        $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);

        $url = "/certificates/$hash/certificate.pdf";

        Storage::put("public".$url, $pdf->stream());

        $this->data['pdf'] = config('site.APP_URL').'/storage'.$url;

        return $this->from(config('site.ADMIN_EMAIL'))
            ->subject('FCA Treating Customers Fairly Training Course')
            ->view('emails.customer_FCATreatingCustomersFairlyTrainingCourse')->with($this->data);
    }
}
