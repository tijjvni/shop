<?php

namespace App\Http\Livewire\Sales;

use Livewire\Component;

use App\Models\Sale;
use App\Models\Product;
use App\Models\SaleProduct;

class Make extends Component
{
    public $product;
    public $quantity;

    public function mount(){

    }

    public function makeSale(){
		$this->validate([
            'product' => 'required|exists:products,id',
            'quantity' => 'required|numeric',
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

        request()->session()->flash('banner', 'Sale added successfully.');        
        return redirect()->to(url()->full());        
    }

    public function render()
    {
        return view('livewire.sales.make');
    }
}
