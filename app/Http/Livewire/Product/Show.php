<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Show extends Component
{
    public $product;

    public function mount($slug)
    {
        $this->product = Product::where('slug','=',$slug)->first();
    }

    public function render()
    {
        return view('livewire.product.show',['product'=>$this->product])->layout('layouts.guest');
    }
}
