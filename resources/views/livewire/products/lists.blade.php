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
        @forelse ($products as $product)
            <tr @if($loop->even)class="bg-grey"@endif>
                <td class="border px-4 py-2">{{ ($loop->index + 1) }}</td>
                <td class="border px-4 py-2">
                    <a href="/products/{{$product->id}}">{{ $product->name }}</a>
                    <p>{{ $product->description }}</p>
                </td>
                <td class="border px-4 py-2">N{{ number_format($product->price) }}</td>
                <td class="border px-4 py-2">{{ $product->msl }}</td>
                <td class="border px-4 py-2">{{ $product->qty }}</td>
            </tr>
        @empty
            <tr>
                <td class="border px-4 py-2 text-center text-gray-400" colspan="5">List is empty</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
