<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class TodoCard extends Component
{
    public $todo;
    public $edit = false;

    #[Rule('required')]
    #[Rule('min:5', message: 'Minimum of 5 characters')]
    #[Rule('max:50', message: 'Maximum of 50 characters')]
    public $editName = '';

    public function editTodo()
    {
        $this->edit = true;
        $this->editName = $this->todo->name;
    }

    public function update()
    {
        $this->validateOnly('editName');

        $this->todo->update([
            'name' => $this->editName
        ]);

        $this->cancelEdit();
    }

    public function cancelEdit()
    {
        $this->edit = false;
    }

    public function toggleCompleted()
    {
        $this->todo->update([
            'completed' => !$this->todo->completed
        ]);
    }

}
