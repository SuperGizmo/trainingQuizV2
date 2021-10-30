<?php

namespace App\Mail;

use PDF;
use Storage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class admin_Dynamic_Quiz extends Mailable
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
        
        // dd($this->data);
        
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

        $hash = md5(uniqid().'01810479f2856f9ebab37a9b4a9b4f29'.microtime().env('NAME').env('COMPANY_ADDRESS'));

        $data = [
            'logo' => env('PDF_LOGO'),
            'company_name' => env('NAME'),
            'name' => $this->data['name'],
            'course' => $this->data['quizTitle'],
            'percent' => $this->percent,
            'status' => $this->status,
            'company_address' => env('COMPANY_ADDRESS'),
            'company_number' => env('COMPANY_NUMBER'),
        ];

        $pdf = PDF::loadView('pdf.answer', $data);
        $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);

        $url = "/certificates/$hash/certificate.pdf";

        Storage::put("public".$url, $pdf->stream());

        $this->data['pdf'] = env('APP_URL').'/storage'.$url;

        return $this->from(env('ADMIN_EMAIL'))
            ->subject($this->data['quizTitle'])
            ->view('emails.admin_Dynamic_Quiz')->with($this->data);
    }
}
