<?php

namespace App\Http\Livewire\Sales;

use Livewire\Component;

use App\Models\Sale;
use App\Models\Product;
use App\Models\SalesProduct;

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

        $product = Product::find($this->product);

        if($product->qty >= $this->qty){
            
            $sale = new Sale;
            $sale->user_id = auth()->id();
            $sale->amount = ($this->qty * Product::find($this->product)->price);
    
            $sale->save();
    

            for($x=0;$x<$this->qty;$x++){
                $saleProduct = new SalesProduct;
                $saleProduct->sale_id = $sale->id;
                $saleProduct->product_id = $this->product;
                $saleProduct->qty = 1;
                $sale->products()->save($saleProduct);
            }
    
    
            $product->qty = ($product->qty - $this->qty);
            $product->save();
            request()->session()->flash('flash.banner', 'Sale added successfully.');        
        
        }else {
            request()->session()->flash('flash.banner', 'Not enough quantity in stock.');        
            request()->session()->flash('flash.bannerStyle', 'danger');        
        }
                
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
