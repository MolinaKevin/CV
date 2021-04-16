<?php

namespace App\Http\Livewire;

use App\Mail\ContactEmail;
use App\Mail\OfferEmail;
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
        'message' => 'required|min:5',
    ];

    public function contactSubmit()
    {
        $this->emit('showAlert');

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
        Mail::to($this->to)
            ->cc('i@molinakev.in')
            ->send(new OfferEmail($email));

        $this->success = __('Mensaje enviado con exito. Muchas gracias por ponerse en contacto conmigo.');

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
        $this->message = '';
        $this->subject = '';
    }

    public function render()
    {
        return view('curriculum.contact')
        ->layout('layouts.cv');
    }
}
