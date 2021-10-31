<?php

namespace App\Mail;

use PDF;
use Storage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class admin_DynamicLegislation extends Mailable
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
        $hash = md5(uniqid().'01810479f2856f9ebab37a9b4a9b4f29'.microtime().config('site.NAME').config('site.COMPANY_ADDRESS'));
        $data = [
            'logo' => config('site.PDF_LOGO'),
            'company_name' => config('site.NAME'),
            'name' => $this->data['name'],
            'legislation' => $this->data['legislationName'],
            'links_clicked' => $this->data['links_clicked'],
            'company_address' => config('site.COMPANY_ADDRESS'),
            'company_number' => config('site.COMPANY_NUMBER'),
        ];
        $pdf = PDF::loadView('pdf.certificate', $data);
        $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $url = "/certificates/$hash/certificate.pdf";
        Storage::put("public".$url, $pdf->stream());
        $this->data['pdf'] = config('site.APP_URL').'/storage'.$url;
        return $this->from(config('site.ADMIN_EMAIL'))
            ->subject($this->data['legislationName'])
            ->view('emails.admin_DynamicLegislation')->with($this->data);
    }
}
