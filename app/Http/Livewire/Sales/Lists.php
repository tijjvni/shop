<?php

namespace App\Http\Livewire\Sales;

use Livewire\Component;

use App\Models\Sale;

class Lists extends Component
{
    public function render()
    {
        $sales = Sale::get();

        return view('livewire.sales.lists', [
            'sales' => $sales
        ]);
    }
}
