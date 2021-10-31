<?php

namespace App\Mail;

use PDF;
use Storage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GDGCourse extends Mailable
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

        $hash = md5(uniqid().'01810479f2856f9ebab37a9b4a9b4f29'.microtime().config('.siteNAME').config('.siteCOMPANY_ADDRESS'));

        $data = [
                'logo' => config('.sitePDF_LOGO'),
                'company_name' => config('.siteNAME'),
                'name' => $this->data['name'],
                'course' => 'Green Deal General Training Course',
                'course_topics' => [
                    'What is the Green Deal and Main Benefits and Key Points of a Green Deal Plan',
                    'Electricity Suppliers and Switching',
                    'What is a Green Deal Provider, Installer and Assessor',
                    'Tied Assessors and Independent Assessors',
                    'Key Eligibility Criteria for Green Deal Plans',
                    'The Green Deal Code of Practice & Framework Regulations',
                    'The Green Deal Arrangements Agreement',
                    'Green Deal Golden Rule',
                    'Energy Saving Advice Service',
                    'Financial Conduct Authority and Permissions',
                    'Green Deal and Oversight Registration Body (GD ORB)',
                    'Financial Promotions',
                    'Treating Customers Fairly and Vulnerable Customers',
                    'Complaints',
                    'Data Protection and Anti-Money Laundering',
                    'Health and Safety'
                ],
                'company_address' => config('.siteCOMPANY_ADDRESS'),
                'company_number' => config('.siteCOMPANY_NUMBER'),
        ];

        $pdf = PDF::loadView('pdf.certificate', $data);
        $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);

        $url = "/certificates/$hash/certificate.pdf";

        Storage::put("public".$url, $pdf->stream());

        $this->data['pdf'] = config('.siteAPP_URL').'/storage'.$url;


        return $this->from(config('.siteADMIN_EMAIL'))
            ->subject('Green Deal General Training Course')
            ->view('emails.GDGCourse')->with($this->data);
    }
}
