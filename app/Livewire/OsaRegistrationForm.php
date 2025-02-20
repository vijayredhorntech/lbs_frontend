<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\OsaRegistrationMail;
use App\Models\OSARegistration;

class OsaRegistrationForm extends Component
{

    public $name;
    public $father_name;
    public $subject;
    public $passing_year;
    public $qualification;
    public $contact_number;
    public $whatsappNumber;
    public $email;
    public $permanent_address;
    public $Employment_status;
    public $place_of_posting;

    protected $rules = [
        'name' => 'required|string|max:255',
        'father_name' => 'required|string|max:255',
        'subject' => 'required|string|max:255',
        'passing_year' => 'required|string|max:4',
        'qualification' => 'required|string|max:255',
        'contact_number' => 'required|numeric',
        'whatsappNumber' => 'required|numeric',
        'email' => 'required|email|max:255',
        'permanent_address' => 'required|string|max:500',
        'Employment_status' => 'required|string|max:500',
        'place_of_posting' => 'nullable|string|max:500',
    ];

    public function submit()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'father_name' => $this->father_name,
            'subject' => $this->subject,
            'passing_year' => $this->passing_year,
            'qualification' => $this->qualification,
            'contact_number' => $this->contact_number,
            'whatsappNumber' => $this->whatsappNumber,
            'email' => $this->email,
            'permanent_address' => $this->permanent_address,
            'Employment_status' => $this->Employment_status,
            'place_of_posting' => $this->place_of_posting,
        ];

        OSARegistration::create($data);

        Mail::to('GCSNAGAR25@REDIFFMAIL.COM')->send(new OsaRegistrationMail($data));

        session()->flash('success', 'Your registration has been submitted successfully.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.osa-registration-form');
    }
}

