<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AccountForm extends Form
{
    #[Rule('required|min:3|max:50')]
    public $name;

    #[Rule('required|email|min:5|max:50')]
    public $email;

    #[Rule('required|min:3|max:50')]
    public $password;

    #[Rule('nullable|image|max:10240')]
    public $image;
}
