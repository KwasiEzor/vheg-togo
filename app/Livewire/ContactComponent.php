<?php

namespace App\Livewire;

use App\Models\Contact;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;


class ContactComponent extends Component
{
    use LivewireAlert;

    public string $email;
    public string $subject;
    public string $message;

    public function save()
    {
        $validated = $this->validate([
            'email' => 'required|email',
            'subject' => 'required|string|min:4',
            'message' => 'required|string|min:4|max:500'
        ]);

        try {
            Contact::create($validated);

            // Emit a success notification
            $this->alert('success', 'Message sent successfully', [
                'position' => 'top-end'
            ]);

            $this->reset();
        } catch (\Exception $e) {
            // Emit an error notification
            $this->alert('danger', 'Oups Something went wrong !', [
                'position' => 'top-end'
            ]);

            throw $e;
        }
    }

    public function render()
    {
        return view('livewire.contact-component');
    }
}
