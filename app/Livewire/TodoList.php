<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todo List')]
class TodoList extends Component
{
    public $todo = '';

    public $todos = [];

    public function mount()
    {
        $this->todos = [
            'Learn Livewire',
            'Learn Laravel',
            'Learn Vue',
        ];
    }

    public function updated($property, $value)
    {
        $this->$property = strtoupper($value);
    }

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
