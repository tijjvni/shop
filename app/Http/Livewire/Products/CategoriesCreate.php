<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesCreate extends Component
{

    public $name;

    public function mount(){

    }

    public function createCategory(Request $request){
		$this->validate([
	        'name' => 'required|min:3',
	    ]);

        $category = new Category;
        $category->name = $this->name;

        $category->save();

        $request->session()->flash('banner', 'Category added successfully.');        
        return $request->redirect()->refresh();        
    }

    public function render()
    {
        return view('livewire.products.categories-create');
    }
}
