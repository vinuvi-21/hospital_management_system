<?php

use Livewire\Component;
use App\Models\Appoinment;

new class extends Component
{
    public string $successMessage = '';

    public $name = '';
    public $nic = '';
    public $email = '';
    public $phone_number = '';
    public $age = '';
    public $gender = '';
    public $specialization = '';
    public $doc_name = '';
    public $date = '';
    public $time = '';

    public function save()
    {
        $this->validate([    
            'name'           => 'required|string|max:255',
            'nic'            => 'required|string|max:20',
            'email'          => 'required|email',
            'phone_number'   => 'required|string|max:10',
            'age'            => 'required|integer|min:1|max:120',
            'gender'         => 'required|string',
            'specialization' => 'required|string',
            'doc_name'       => 'required|string|max:255',
            'date'           => 'required|date',
            'time'           => 'required',
        ]);

        Appoinment::create(
            $this ->only(['name', 'nic', 'email', 'phone_number', 'age', 'gender', 'specialization', 'doc_name', 'date', 'time'])
        );

        $this->successMessage = 'Appointment saved successfully.';   
        $this->reset(['name', 'nic', 'email', 'phone_number', 'age', 'gender', 'specialization', 'doc_name', 'date', 'time']);
    }
    public function render()
    {
        return view('components.appoinment.appoinment');
    }
};