<div>
    <x-jet-form-section submit="makeSale">
        <x-slot name="title">
            {{ __('Create Product') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Create a new product.') }}
        </x-slot>

        <x-slot name="form">     
            <div class="w-full space-y-2 col-span-6 space-y-1">
                <x-jet-label for="name" value="{{ __('Name') }}"/>
                <x-jet-input id="name" class="block w-full" type="text" placeholder="Product name" />
            </div> 	
            <div class="w-full space-y-2 col-span-6 space-y-1">
                <x-jet-label for="category" value="{{ __('Category') }}"/>
                <x-jet-input id="category" class="block w-full" type="text" placeholder="Product category" />
            </div> 	
            <div class="w-full space-y-2 col-span-6 space-y-1">
                <x-jet-label for="description" value="{{ __('Description') }}"/>
                <x-jet-input id="description" class="block w-full" type="text" placeholder="Product description" />
            </div> 	
            <div class="w-full space-y-2 col-span-6 space-y-1">
                <x-jet-label for="price" value="{{ __('Price') }}"/>
                <x-jet-input id="price" class="block w-full" type="number" placeholder="Product name" />
            </div> 	
            <div class="w-full space-y-2 col-span-6 space-y-1">
                <x-jet-label for="msl" value="{{ __('Minimum Stock Level') }}"/>
                <x-jet-input id="msl" class="block w-full" type="number" placeholder="Product msl" />
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
