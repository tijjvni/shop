<div>
    <x-jet-form-section submit="makeSale">
        <x-slot name="title">
            {{ __('Make Sale') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Make a new sale.') }}
        </x-slot>

        <x-slot name="form">     
            <div class="w-full space-y-2 col-span-6 rounded">
        
                <div class="w-full space-y-2 col-span-6 space-y-1">
                    <x-jet-label for="product" value="{{ __('Product') }}"/>
                    <select class="block w-full" id="product" wire:model.defer="product">
                        <option>Select category</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="product" />
                </div> 	                
                <div class="flex-initial space-y-1">
                    <x-jet-label for="qty" value="{{ __('Qty') }}"/>
                    <x-jet-input id="qty" class="block w-full" type="number" placeholder="Qty" wire:model.defer="qty"/>
                    <x-jet-input-error for="qty" />
                </div>
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
