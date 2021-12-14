<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

use App\Models\Category;
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
	        'category' => 'required',
	        'description' => '',
	        'msl' => 'required|numeric|digits_between:1,10',
	        'price' => 'required|numeric|digits_between:1,10',
	    ]);

        $product = new Product;
        $product->name = $this->name;
        $product->category_id = $this->category;
        // $product->description = $this->description;
        $product->msl = $this->msl;
        $product->qty = 0;
        $product->price = $this->price;

        $product->save();

	    request()->session()->flash('flash.banner', 'Product added successfully.');  
        return redirect()->to('/products');   
    }

    public function render()
    {
        $categories = Category::get();
        return view('livewire.products.create',[
            'categories' => $categories
        ]);
    }
}
