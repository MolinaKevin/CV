<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Mail;

class Contact extends Component
{
    public $name;
    public $email;
    public $comment;
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
        //$contact = $this->validate();

        Mail::send('email',
        array(
            'name' => 'Kev',
            'email' => 'offers@molinakev.in',
            'comment' => 'Algo algo',
            ),
            function($message){
                $message->from('i@molinakev.in');
                $message->to($this->to, 'Bobby')->subject('Your Site Contect Form');
            }
        );

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
