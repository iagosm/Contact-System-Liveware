<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Component;

class FormContact extends Component
{
    #[Validate('required|min:3|max:50')]
    public $name;
    #[Validate('required|email|min:5|max:50')]
    public $email;
    #[Validate('required|min:5|max:20')]
    public $phone;
    public $error = "";
    public $success = "";

    public function newContact()
    {
        // validation
        // $this->validate([
        //     'name' => 'required|min:3|max:50',
        //     'email' => 'required|email|min:5|max:50',
        //     'phone' => 'required|min:5|max:20',
        // ]);
        $this->validate();

        // temporary store in log file
        // Log::info('Novo Contato:'. $this->name . ' - ' . $this->email . ' - ' . $this->phone);

        // Store Contact in database
        // se nome e email n existir no database
        $result = Contact::firstOrCreate(
            [
                'name' => $this->name,
                'email' => $this->email
            ],
            [
                'phone' => $this->phone
            ]
        );
        // clear form

        // Option 1
        // $this->name = '';
        // $this->email = '';
        // $this->phone = '';

        // check for success or error
        if($result->wasRecentlyCreated) {
            // Option 2 => clear Form
            // Clear all public properties
            $this->reset();

            // success message
            $this->success = "Contact created successfullly.";

            // create an event
            $this->dispatch('contactAdded');
        } else {
            // error message
            $this->error = "contact already exists.";
        }
    }

    public function render()
    {
        return view('livewire.form-contact');
    }
}
