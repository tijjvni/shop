<div>

    <x-jet-form-section  class="my-2 mx-auto">
        <x-slot name="title">
            {{ __('Sales Form') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Make a new sale.') }}
        </x-slot>
        <x-slot name="form">    	
            <div class="w-full space-y-2 col-span-6 rounded">
                <div class="flex-grow space-y-1">
                    <x-jet-label for="product" value="{{ __('Product') }}"/>
                    <x-jet-input id="product" class="block w-full" type="text" placeholder="Select product" />
                </div>
                <div class="flex-initial space-y-1">
                    <x-jet-label for="qty" value="{{ __('Qty') }}"/>
                    <x-jet-input id="qty" class="block w-full" type="number" placeholder="Qty" />
                </div>
            </div> 	
            
        </x-slot>
        <x-slot name="actions">
            <x-jet-button class="flex justify-center w-full font-medium">
                <span>
                    Make Sale    			
                </span>
            </x-jet-button> 		    		  
        </x-slot>
    </x-jet-form-section>

</div>
