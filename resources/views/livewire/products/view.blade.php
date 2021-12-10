<div>
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="px-4 py-2" colspan="2">Product Info</th>
        </tr>
        </thead>
        <tbody>
            <tr @if($loop->even)class="bg-grey"@endif>
                <td class="border px-4 py-2">Name</td>
                <td class="border px-4 py-2">{{ $product->name }}</td>
            </tr>
            
            <tr @if($loop->even)class="bg-grey"@endif>
                <td class="border px-4 py-2">Qty</td>
                <td class="border px-4 py-2">{{ $product->qty }}</td>
            </tr>
            
            <tr @if($loop->even)class="bg-grey"@endif>
                <td class="border px-4 py-2">Price</td>
                <td class="border px-4 py-2">{{ $product->price }}</td>
            </tr>
            
            <tr @if($loop->even)class="bg-grey"@endif>
                <td class="border px-4 py-2">Msl</td>
                <td class="border px-4 py-2">{{ $product->msl }}</td>
            </tr>
            
        </tbody>
    </table>
</div>
