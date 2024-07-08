@foreach($product->get() as $prod)
    <div class='flex flex-col gap-2'>
        <div class='p-4 rounded overflow-hidden shadow-md bg-blue-100 mt-3'>
            <h1 class='text-2xl'>{{ $prod->name }}</h1>
            <h3 class='text-2xl'>{{ $prod->desc }}</h3>
            <p class='text-lg'>Price: {{ $prod->price }}</p>
            <p class='text-lg'>Quantity: {{ $prod->qty }}</p>
            <div class='flex justify-end gap-2'>
            <button
                            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
                            hx-get='/product/{{$prod->id}}/edit'
                            hx-target="#products_list"
                            hx-swap="innerHTML"
                        >
                            EDIT         
                        </button>

                        <button
                            class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600"
                            hx-delete="/api/product/{{$prod->id}}" 
                            hx-swap="innerHTML" 
                            hx-target="#products_list"
                        >
                            DELETE
                        </button>
                    </div>
        </div>
    </div>
    
@endforeach

<div id="name_error" hx-swap-oob="true" >
</div> 

<div id="desc_error" hx-swap-oob="true" >
</div>
 
<div id="price_error" hx-swap-oob="true" >
</div> 

<div id="qty_error" hx-swap-oob="true" >
</div> 

<div id="addProductMessage" hx-swap-oob="true">
    <div class="bg-green-500 text-white text-center p-2 rounded ml-4 items-center w-25">
        <h3>Product Added</h3>
    </div>
</div>
