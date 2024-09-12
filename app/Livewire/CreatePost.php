<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create Post')]
class CreatePost extends Component
{
    #[Rule('required', message: '咋没填标题啊，整一个')]
    #[Rule('min:3', message: '多写点，字太少了，怎么也得多于3个字')]
    public $title = '';

    #[Rule('required|min:3')]
    public $content = '';

    public function save()
    {
        $this->validate();

        \App\Models\Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        $this->redirect('/post');
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
