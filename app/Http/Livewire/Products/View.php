<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

use App\Models\Product;

class View extends Component
{

    protected $view;
    public function mount(Product $id){
        $this->view = $id;
    }



    public function render()
    {
        return view('livewire.products.view',[
            'product' => $this->view
        ]);
    }
}
