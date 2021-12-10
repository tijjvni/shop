<div>
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="px-4 py-2" colspan="2">Product Info</th>
        </tr>
        <tr>
            <th class="px-4 py-2" colspan="2">
                <a href="/products/{{$product->id}}/update">
                    <x-jet-button>update</x-jet-button>
                </a>
            </th>
        </tr>
        </thead>
        <tbody>
            <tr class="bg-grey">
                <td class="border px-4 py-2">Name</td>
                <td class="border px-4 py-2">{{ $product->name }}</td>
            </tr>
            
            <tr >
                <td class="border px-4 py-2">Qty</td>
                <td class="border px-4 py-2">{{ $product->qty }}</td>
            </tr>
            
            <tr class="bg-grey">
                <td class="border px-4 py-2">Price</td>
                <td class="border px-4 py-2">{{ $product->price }}</td>
            </tr>
            
            <tr >
                <td class="border px-4 py-2">Msl</td>
                <td class="border px-4 py-2">{{ $product->msl }}</td>
            </tr>
            
        </tbody>
    </table>
</div>
