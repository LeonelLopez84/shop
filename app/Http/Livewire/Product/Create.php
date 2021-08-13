<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;

class Create extends Component
{
    use WithFileUploads;

    public $name, $description, $price,$thumbnail;

    public function save()
    {
        $validate = $this->validate(['name'=>'required|unique:products',
                        'price'=>'required',
                        'description'=>'required',
                        'thumbnail'=>'image|max:1024']);

        $thumbnail = time().'.'.$this->thumbnail->getClientOriginalExtension();
        $this->thumbnail->storeAs('photos',$thumbnail);

        $validate['slug']=$this->name;
        $validate['thumbnail']=$thumbnail;

        $product = Product::create($validate);

        return redirect('');
    }
    public function render()
    {
        return view('livewire.product.create');
    }
}
