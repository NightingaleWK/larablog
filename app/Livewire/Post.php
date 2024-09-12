<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Post')]
class Post extends Component
{
    // public $posts;

    // public function mount()
    // {
    //     $this->posts = [
    //         ['title' => 'Post 1', 'content' => 'This is post 1'],
    //         ['title' => 'Post 2', 'content' => 'This is post 2'],
    //         ['title' => 'Post 3', 'content' => 'This is post 3'],
    //     ];
    // }

    public function delete(\App\Models\Post $post)
    {
        $post->delete();
    }

    public function render()
    {
        return view('livewire.post', [
            'posts' => \App\Models\Post::all()
        ]);
    }
}
