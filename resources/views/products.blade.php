<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-2">
            @if(isset($view))
                <livewire:products.view :id="$view"/>
            @elseif(isset($update))
                <livewire:products.update :id="$update"/>
            @else  
                <livewire:products.create />
                <livewire:products.lists />
            @endif

        </div>
    </div>
</x-app-layout>
