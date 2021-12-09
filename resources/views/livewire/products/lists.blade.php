<div>
<table class="table-auto w-full">
        <thead>
        <tr>
            <th class="px-4 py-2">S/N</th>
            <th class="px-4 py-2">Product</th>
            <th class="px-4 py-2">Price</th>
            <th class="px-4 py-2">Msl</th>
            <th class="px-4 py-2">Qty</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr @if($loop->even)class="bg-grey"@endif>
                <td class="border px-4 py-2">{{ $lood->index }}</td>
                <td class="border px-4 py-2">
                    <p>{{ $product->name }}</p>
                    <p>{{ $product->description }}</p>
                </td>
                <td class="border px-4 py-2">N{{ number_format($product->price) }}</td>
                <td class="border px-4 py-2">{{ $product->msl }}</td>
                <td class="border px-4 py-2">{{ $product->qty }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
