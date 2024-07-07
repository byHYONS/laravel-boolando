{{-- @dd($product) --}}

{{-- ? card da includere in products --}}

<div class="card">
    <div class="images">
        <!-- foto di default -->
        <img class="defoult-img"
        src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" 
        alt=" {{ $product['name'] }}"> 
        
        <!-- foto hover -->
        <img class="hover-img"
        src="{{ Vite::asset('resources/img/' . $product['backImage']) }}" 
        alt=" {{ $product['name'] }}"> 
        
        <div class="discount"> 

            <!-- sconto -->
            <span class="{{ isset($product['value']) ? 'percent' : '' }}">
                {{ isset($product['value']) ? 
                $product['value'] : '' }}
            </span>
            
            <!-- sostenibilità prodotto -->
            <span class="{{ isset($product['type']) ? 'tenability' : '' }}">
                {{ isset($product['type']) ? 
                $product['type'] : '' }}
            </span>


        </div>

        <!-- liks -->
        <div class="heart">
            <span
            class="{{ $product['isInFavorites'] ? 'favorite' : '' }}"            
            > &hearts;
            </span>
        </div>
    </div>
    <div class="text">

        <!-- nome brand -->
        <span class="brand"> 
            {{ $product['brand'] }}
        </span>

        <!-- descrizione prodotto -->
        <h4> 
            {{ $product['name'] }} 
        </h4>

        <!-- prezzo -->
        <span class="new-price"> 
            {{ $product['price'] }} 
        </span>

    </div>
</div>