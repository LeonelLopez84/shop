<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;

class HelloWorld extends Component
{
    public $contacts,$name;

    public function mount()
    {
        $this->contacts=['Leonel','Mauricio','Alexis'];
        $this->name='David';
    }


    public function render()
    {
        return view('livewire.test.hello-world')->layout('layouts.admin');
    }
}
