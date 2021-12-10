<?php

namespace App\Http\Livewire\Sales;

use Livewire\Component;

use App\Models\Sale;
use App\Models\Product;
use App\Models\SaleProduct;

class Make extends Component
{
    public $product;
    public $qty;

    public function mount(){

    }

    public function makeSale(){
		$this->validate([
            'product' => 'required',
            'qty' => 'required|numeric',
	    ]);

        $sale = new Sale;
        $sale->user = auth()->id();
        $sale->amount = ($this->qty * Product::find($this->product)->price);

        $sale->save();

        $saleProduct = new SaleProduct;
        $saleProduct->sale = $sale->id;
        $saleProduct->sale = $this->product;
        $saleProduct->sale = $this->qty;

        $sale->products()->save($saleProduct);

        $product = Product::find($this->product);
        $product->qty = ($product->qty - $this->qty);
        $product->save();

        request()->session()->flash('banner', 'Sale added successfully.');        
        return redirect()->to('/sales');        
    }

    public function render()
    {
        $products = Product::get();
        return view('livewire.sales.make',[
            'products' => $products
        ]);
    }
}
