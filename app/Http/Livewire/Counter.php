<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $name= 'leonel';
    public $title = 'Counter';

    public function mount($title)
    {
        $this->title=$title;
    }
    public function render()
    {
        return view('livewire.counter')->layout('welcome')->layoutData(['title'=>$this->title]);
    }
}
