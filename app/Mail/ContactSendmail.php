<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSendmail extends Mailable
{
    use Queueable, SerializesModels;

    private $last_name;
    private $first_name;
    private $email;
    private $title;
    private $body;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->last_name = $inputs['last_name'];
        $this->first_name = $inputs['first_name'];
        $this->email = $inputs['email'];
        $this->title = config('const.contactlist.'.$inputs['title']);
        $this->body = $inputs['body'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('monchan0819@gmail.com')
        ->subject('お問合せ内容について')
        ->view('mail')
        ->with([
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'email' => $this->email,
            'title' => $this->title,
            'body'  => $this->body,
        ]);
    }
}
