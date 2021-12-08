<div>
    <x-jet-form-section submit="createCategory">
        <x-slot name="title">
            {{ __('Product Category') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Create a new product category.') }}
        </x-slot>

        <x-slot name="form">     
            <div class="w-full space-y-2 col-span-6 space-y-1">
                <x-jet-label for="name" value="{{ __('Name') }}"/>
                <x-jet-input id="name" class="block w-full" type="text" placeholder="Category name" />
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
