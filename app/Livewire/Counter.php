<?php

namespace App\Livewire;


use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Counter')]

class Counter extends Component
{
    public $count = 0;

    public $name;

    public function increment($by = 1)
    {
        $this->count = $this->count + $by;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
