<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailDefault extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data = "";
	
    public function __construct($data)
    {
        
		$this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		if($this->data['attachment']){
			return $this->subject($this->data['sub'])->view('mails.mailDefault',[
            'data' => $this->data
        ])->attach($this->data['attachment'], [
                         'as' => $this->data['attachmentName'],
                         'mime' => 'application/pdf',
                    ]);
		
        
		}else{
		return $this->subject($this->data['sub'])->view('mails.mailDefault',[
            'data' => $this->data
        ]);
															}
    }
}
