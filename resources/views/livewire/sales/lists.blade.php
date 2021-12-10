<div>
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="px-4 py-2">S/N</th>
            <th class="px-4 py-2">Products</th>
            <th class="px-4 py-2">Amount</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($sales as $sale)
            <tr @if($loop->even)class="bg-grey"@endif>
                <td class="border px-4 py-2">{{ ($loop->index + 1) }}</td>
                <td class="border px-4 py-2">
                    <p>{{ count($sale->$products) }}</p>
                </td>
                <td class="border px-4 py-2">N{{ number_format($sale->amount) }}</td>
            </tr>
        @empty
            <tr>
                <td class="border px-4 py-2 text-center text-gray-400" colspan="3">List is empty</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
