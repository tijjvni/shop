<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

use App\Models\Product;

class Update extends Component
{

    protected $product;

    public $name;
    public $price;
    public $qty;
    public $msl;
    public $product_id;

    public function mount(Product $id){
        $this->product = $id;
        $this->product_id = $this->product->id;
        $this->name = $this->product->name;
        $this->price = $this->product->price;
        $this->qty = $this->product->qty;
        $this->msl = $this->product->msl;
    }

    public function updateProduct(){
		$this->validate([
	        'product_id' => 'required',
	        'name' => 'required|min:3',
	        'qty' => 'required',
	        'msl' => 'required|numeric',
	        'price' => 'required|numeric',
	    ]);

        $product = Product::find($this->product_id);
        $product->name = $this->name;
        // $product->category_id = $this->category;
        // $product->description = $this->description;
        $product->msl = $this->msl;
        $product->qty = $this->qty;
        $product->price = $this->price;

        $product->save();

	    request()->session()->flash('flash.banner', 'Product updated successfully.');  
        return redirect()->to('/products/'.$this->product->id);   
    }

    public function render()
    {
        return view('livewire.products.update');
    }
}
