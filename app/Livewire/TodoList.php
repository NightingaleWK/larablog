<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $todo = '';

    public $todos = [
        'Learn Livewire',
        'Learn Laravel',
        'Learn Vue',
    ];

    public function add()
    {
        $this->todos[] = $this->todo;

        $this->reset('todo');
    }

    public function remove($index)
    {
        unset($this->todos[$index]);
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
