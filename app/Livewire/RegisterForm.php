<?php

namespace App\Livewire;

use App\Livewire\Forms\AccountForm;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Register')]
class RegisterForm extends Component
{
    use WithFileUploads;

    public AccountForm $form;

    public function store()
    {

        sleep(2);

        $validated = $this->form->validate();

        if ($this->form->image) {
            $validated['image'] = '/public/storage/' . $this->form->image->store();
        }

        User::create($validated);

        $this->form->reset();

        $this->dispatch('user-created');

        session()->flash('success', 'User Created!');
    }
}
