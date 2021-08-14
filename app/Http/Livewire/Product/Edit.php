<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $name, $description, $price,$thumbnail;

    public function render()
    {
        return view('livewire.product.edit')->layout('layouts.admin');
    }
}
