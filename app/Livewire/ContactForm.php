<?php

namespace App\Livewire;

use App\Mail\ContactFormMail;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $number;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'number' => 'required|numeric|max_digits:10|min_digits:10',
        'message' => 'required|string|max:500',
    ];


    public function submit()
    {
        $this->validate();

        Mail::to('GCSNAGAR25@REDIFFMAIL.COM')->send(new ContactFormMail($this->name, $this->email, $this->number, $this->message));

        session()->flash('success', 'Thank you for contacting us. We have received your message, we\'ll get back to you shortly.');

        $this->reset(['name', 'email', 'number', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
