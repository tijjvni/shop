<div>

    <x-jet-form-section submit="createProduct">
        <x-slot name="title">
            {{ __('Create Product') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Create a new product.') }}
        </x-slot>

        <x-slot name="form">     
            <div class="w-full space-y-2 col-span-6 space-y-1">
                <x-jet-label for="name" value="{{ __('Name') }}"/>
                <x-jet-input id="name" class="block w-full" type="text" placeholder="Product name" wire:model.defer="name"/>
                <x-jet-input-error for="name" />
            </div> 	
    
            <!-- <div class="w-full space-y-2 col-span-6 space-y-1">
                <x-jet-label for="description" value="{{ __('Description') }}"/>
                <x-jet-input id="description" class="block w-full" type="text" placeholder="Product name" wire:model.defer="description"/>
                <x-jet-input-error for="description" />
            </div> 	 -->

            <div class="w-full space-y-2 col-span-6 space-y-1">
                <x-jet-label for="category" value="{{ __('Category') }}"/>
                <select class="block w-full" id="category" wire:model.defer="category">
                    <option>Select category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="category" />
            </div> 	
            <div class="w-full space-y-2 col-span-6 space-y-1">
                <x-jet-label for="price" value="{{ __('Price') }}"/>
                <x-jet-input id="price" class="block w-full" type="text" placeholder="Product price" wire:model.defer="price"/>
                <x-jet-input-error for="price" />
            </div> 	
            <div class="w-full space-y-2 col-span-6 space-y-1">
                <x-jet-label for="msl" value="{{ __('Minimum Stock Level') }}"/>
                <x-jet-input id="msl" class="block w-full" type="text" placeholder="Product msl" wire:model.defer="msl"/>
                <x-jet-input-error for="msl" />
            </div> 	                        
        </x-slot>
            
        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __('Saved.') }}
            </x-jet-action-message>

            <x-jet-button>
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>    
</div>
