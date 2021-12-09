<?php

namespace App\Http\Livewire\Sales;

use Livewire\Component;

use App\Models\Sale;

class View extends Component
{

    protected $view;
    public function mount(Product $id){
        $this->view = $id;
    }



    public function render()
    {
        return view('livewire.sales.view',[
            'product' => $this->view
        ]);
    }
}
