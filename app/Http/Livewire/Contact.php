<?php

namespace App\Http\Livewire;

use App\Mail\ContactEmail;
use App\Mail\OfferEmail;
use Livewire\Component;
use Mail;
use Illuminate\Support\Facades\Log;

class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public $subject = '';
    public $active = 1;
    public $to = "offers@molinakev.in";
    public $feedback = '';
    public $feedbackType = '';

    protected $rules = [
        'name' => 'required',
        'subject' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:5',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function contactSubmit()
    {
        $this->validate();

        $email = new \stdClass();
        $email->message = $this->message;
        $email->sender = $this->name;
        $email->senderEmail = $this->email;
        $email->subject = $this->subject;

        try {
            // Confirmación para quien escribió y notificación para Kevin.
            Mail::to($this->email)->send(new ContactEmail($email));
            Mail::to($this->to)->send(new OfferEmail($email));
        } catch (\Throwable $exception) {
            Log::error('No se pudo enviar el mensaje del formulario de contacto.', [
                'exception' => $exception,
            ]);

            $this->feedback = __('No pude enviar el mensaje en este momento. Podés escribirme directamente a i@molinakev.in.');
            $this->feedbackType = 'error';

            return;
        }

        $this->feedback = __('Mensaje enviado con exito. Muchas gracias por ponerse en contacto conmigo.');
        $this->feedbackType = 'success';
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
