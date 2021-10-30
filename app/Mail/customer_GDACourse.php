<?php

namespace App\Mail;

use PDF;
use Storage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class customer_GDACourse extends Mailable
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
                'course' => 'Green Deal Assessor Training Course',
                'course_topics' => [
                    'What is the Green Deal and Main Benefits and Key Points of a Green Deal Plan',
                    'Eligible Measures and requirements for Green Deal Plans',
                    'Role of the Green Deal Assessor Organisation (GDAO)',
                    'Role and requirements of the Green Deal Assessor or Advisor',
                    'Tied Assessors and Independent Assessors',
                    'Auditing and Compliance',
                    'Before, During and After a Green Deal Assessment Visit',
                    'The Green Deal Code of Practice, Framework Regulations & Energy Act 2011',
                    'The Green Deal Arrangements Agreement',
                    'Green Deal Golden Rule',
                    'Visiting Consumers in their Home',
                    'Vulnerable Customers',
                    'Approved Software, Collection of Information and GDAR',
                    'Data Protection and Anti-Money Laundering',
                    'Complaints and Non-Compliance'
                ],
                'company_address' => env('COMPANY_ADDRESS'),
                'company_number' => env('COMPANY_NUMBER'),
        ];

        // return view('pdf.certificate')->with($data);

        $pdf = PDF::loadView('pdf.certificate', $data);
        $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);

        $url = "/certificates/$hash/certificate.pdf";

        Storage::put("public".$url, $pdf->stream());

        $this->data['pdf'] = env('APP_URL').'/storage'.$url;

        return $this->from(env('ADMIN_EMAIL'))
            ->subject('Green Deal Assessor Training Course')
            ->view('emails.customer_GDACourse')->with($this->data);
    }
}
