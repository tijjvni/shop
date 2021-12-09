<div>
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="px-4 py-2">Category</th>
            <th class="px-4 py-2">Products</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($categories as $category)
            <tr @if($loop->even)class="bg-grey"@endif>
                <td class="border px-4 py-2">{{ $catgeory->name }}</td>
                <td class="border px-4 py-2">{{ $category->products()->count() }}</td>

            </tr>
        @empty
            <tr>
                <td class="border px-4 py-2 text-center text-gray-400" colspan="2">List is empty</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
