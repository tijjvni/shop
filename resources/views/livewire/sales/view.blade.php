<div>
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="px-4 py-2" colspan="2">Sale Info</th>
        </tr>
        
        </thead>
        <tbody>
            <tr class="bg-grey">
                <td class="border px-4 py-2">Sale ID</td>
                <td class="border px-4 py-2">{{ $sale->id }}</td>
            </tr>
            
            <tr >
                <td class="border px-4 py-2">Amount</td>
                <td class="border px-4 py-2">N{{ number_format($sale->amount) }}</td>
            </tr>
            
            <tr class="bg-grey">
                <td class="border px-4 py-2">Time</td>
                <td class="border px-4 py-2">{{ $sale->created_at->diffForHumans(); }}</td>
            </tr>
            
            <tr >
                <td class="border px-4 py-2">Salesperson</td>
                <td class="border px-4 py-2">{{ $sale->user->name }}</td>
            </tr>
            
        </tbody>
    </table>
</div>
