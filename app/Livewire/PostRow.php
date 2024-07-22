<?php

namespace App\Livewire;

use Livewire\Component;

class PostRow extends Component
{
    public $post;

    public function archive()
    {
        $this->post->update([
            'is_archived' => true
        ]);
    }

//    public function mount($post)
//    {
//        $this->post = $post;
//    }
//    public function render()
//    {
//        return view('livewire.post-row');
//    }
}
