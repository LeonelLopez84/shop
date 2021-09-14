<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;

class Hi extends Component
{
    public $contact;
    protected $listeners=['refreshChildren'];

    public function mount($contact)
    {
        $this->contact = $contact;
    }

    public function emitfoo()
    {
        $this->emitUp('foo');
    }


    public function render()
    {
        return view('livewire.test.hi');
    }
}
