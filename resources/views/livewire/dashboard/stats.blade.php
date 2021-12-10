<div>
    <div class='flex-1 bg-white p-3 rounded shadow-md self-center h-28 my-2 md:mb-0'>
        <div class="flex flex-row ">
            <div class="h-20 w-20 mr-1 inline-flex items-center justify-center rounded-full text-secondary flex-shrink-0 ">
                <i class="fa fa-cube text-3xl"></i>
            </div> 
            <div class="flex-grow text-secondary">
                <p class="text-base">Products</p>
                <h3 class="text-2xl text-primary font-semibold">{{ $products }}</h3>
            </div>
        </div>		
    </div>
    <div class='flex-1 bg-white p-3 rounded shadow-md self-center h-28 my-2 md:mb-0'>
        <div class="flex flex-row ">
            <div class="h-20 w-20 mr-1 inline-flex items-center justify-center rounded-full text-secondary flex-shrink-0 ">
                <i class="fa fa-money text-3xl"></i>
            </div> 
            <div class="flex-grow text-secondary">
                <p class="text-base">Sales</p>
                <h3 class="text-2xl text-primary font-semibold">{{ $sales }}</h3>
            </div>
        </div>		
    </div>
    <div class='flex-1 bg-white p-3 rounded shadow-md self-center h-28 my-2 md:mb-0'>
        <div class="flex flex-row ">
            <div class="h-20 w-20 mr-1 inline-flex items-center justify-center rounded-full text-secondary flex-shrink-0 ">
                <i class="fa fa-exclamation-triangle text-3xl"></i>
            </div> 
            <div class="flex-grow text-secondary">
                <p class="text-base">Stock</p>
                <h3 class="text-2xl text-primary font-semibold">{{ $stock }}</h3>
            </div>
        </div>		
    </div>
</div>
