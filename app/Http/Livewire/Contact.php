<?php

namespace App\Http\Livewire;

use App\Mail\ContactEmail;
use App\Mail\OfferEmail;
use Livewire\Component;
use Mail;
use Illuminate\Support\Facades\Session;

class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public $subject = '';
    public $active = 1;
    public $to = "offers@molinakev.in";
    protected $rules = [
        'name' => 'required',
        'subject' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:5',
    ];

    public function contactSubmit()
    {
        $contact = $this->validate();
        $this->emit('showAlert');

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
            ->send(new OfferEmail($email));

        if( Session::has('status') ) {
            $this->emit('message', __('Hubo un error inesperado. Si lo desea puede ponerse en contacto conmigo a traves de mi mail i@molinakev.in'));
        } else {
            $this->emit('message', __('Mensaje enviado con exito. Muchas gracias por ponerse en contacto conmigo.'));
        }

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
