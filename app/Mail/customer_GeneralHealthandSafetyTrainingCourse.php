<?php
namespace App\Mail;

use PDF;
use Storage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class customer_GeneralHealthandSafetyTrainingCourse extends Mailable
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
            'course' => 'General Health and Safety Training Course',
            'course_topics' => [
                'General Health and Safety',
                'Health and Safety at Work etc. Act 1974',
                'Workers Responsibilities',
                'Management Health and Safety at Work Regulations 1999',
                'Health and Safety Executive',
                'Health and Safety Policy',
                'Health and Safety Procedures and Handbook',
                'Importance of following safety procedures'
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
            ->subject('General Health and Safety Training Course')
            ->view('emails.customer_GeneralHealthandSafetyTrainingCourse')->with($this->data);
    }
}
