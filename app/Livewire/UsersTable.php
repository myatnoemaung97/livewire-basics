<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    #[On('user-created')]
    public function render()
    {
        return view('livewire.users-table', [
            'users' => User::latest()->paginate(5)
        ]);
    }
}
