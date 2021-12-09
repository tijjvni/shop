<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

use App\Models\Product;

class Create extends Component
{

    public $name;
    public $category;
    public $description;
    public $msl;
    public $qty;
    public $price;

    public function mount(){

    }

    public function createProduct(){
		$this->validate([
	        'name' => 'required|min:3',
	        'category' => 'required|numeric',
	        'description' => 'required',
	        'msl' => 'required|numeric',
	        'qty' => 'required|numeric',
	        'price' => 'required|numeric',
	    ]);

        $product = new Product;
        $product->name = $this->name;
        $product->category_id = $this->category;
        $product->description = $this->description;
        $product->msl = $this->msl;
        $product->qty = $this->qty;
        $product->price = $this->price;

        $product->save();

        request()->session()->flash('banner', 'Product added successfully.');      
        return redirect()->to(url()->full());     
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
