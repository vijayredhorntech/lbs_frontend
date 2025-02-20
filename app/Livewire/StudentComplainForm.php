<?php

namespace App\Livewire;

use App\Mail\OsaRegistrationMail;
use App\Mail\studentComplainMail;
use App\Models\StudentComplain;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class StudentComplainForm extends Component
{
    public $name;
    public $class;
    public $roll_number;
    public $phone_number;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string',
        'class' => 'required|string',
        'roll_number' => 'required|string',
        'phone_number' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'class' => $this->class,
            'roll_number' => $this->roll_number,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'message' => $this->message,

        ];
        StudentComplain::create($data);
        Mail::to('GCSNAGAR25@REDIFFMAIL.COM')->send(new studentComplainMail($data));
        session()->flash('success', 'Your complain has been submitted successfully. We will get back to you soon.');
        $this->reset();
    }



    public function render()
    {
        return view('livewire.student-complain-form');
    }
}
