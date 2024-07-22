<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Create A Post')]
class CreatePost extends Component
{
    #[Validate('required', message: 'Please provide a name for the post')]
    #[Validate('min:5', message: 'The name must have a minimum of 5 characters')]
    public $name = '';

    #[Validate('required', as: 'body')]
    #[Validate('max:255', message: 'Too long. Maximum of 255 please')]
    public $content = '';

    public function save()
    {
        $this->validate();

        Post::create([
            'name' => $this->name,
            'content' => $this->content
        ]);

        session()->flash('success', 'Post created successfully');

        $this->redirect('/posts', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
