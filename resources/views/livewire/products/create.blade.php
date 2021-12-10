<div>

    <x-jet-form-section submit="createProduct">
        <x-slot name="title">
            {{ __('Create Product') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Create a new product.') }}
        </x-slot>

        <x-slot name="form">     
 
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
