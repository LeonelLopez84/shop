<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Table extends Component
{
    public function render()
    {
        $products = Product::orderBy('id','desc')->paginate(10);
        return view('livewire.product.table',['products'=>$products])->layout('layouts.admin');
    }
}
