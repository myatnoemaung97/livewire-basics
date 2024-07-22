<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use mysql_xdevapi\Exception;

#[Title('Todo List')]
class TodoList extends Component
{
    #[Rule('required|min:5|max:50')]
    public $name = '';

    #[Url(as: 's')]
    public $search = '';

    use WithPagination;

    public function save()
    {
        $validated = $this->validate();

        Todo::create($validated);

        $this->reset();

        session()->flash('success', 'Todo created successfully');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
    }

    public function render()
    {
        return view('livewire.todo-list', [
            'todos' => Todo::latest()->where('name', 'like', '%' . $this->search . '%')->paginate(5)
        ]);
    }
}
