<?php

namespace App\Http\Livewire;

use App\Mail\ContactEmail;
use Livewire\Component;
use Mail;

class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public $subject = '';
    public $success;
    public $active = 1;
    public $to = "offers@molinakev.in";
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'comment' => 'required|min:5',
    ];

    public function contactSubmit()
    {
        $contact = $this->validate();

        $email = new \stdClass();
        $email->message = $this->message;
        $email->sender = $this->name;
        $email->subject = $this->subject;

        // Mail for sender
        Mail::to($this->email)
            ->cc('i@molinakev.in')
            ->send(new ContactEmail($email));
        // Mail for me
        if ($this->active == 0) {
            Mail::to($this->to)
                ->cc('i@molinakev.in')
                ->send(new ContactEmail($email));
        } else {
            Mail::to($this->to)
                ->cc('i@molinakev.in')
                ->send(new ContactEmail($email));
        }

        $this->success = 'Thank you for reaching out to us!';

        $this->clearFields();
    }

    public function setEmail($id)
    {
        if ($id == 0) {
            $this->to = "contact@molinakev.in";
        } else {
            $this->to = "offers@molinakev.in";
        }
        $this->active = $id;
    }

    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->comment = '';
    }

    public function render()
    {
        return view('curriculum.contact')
        ->layout('layouts.cv');
    }
}
