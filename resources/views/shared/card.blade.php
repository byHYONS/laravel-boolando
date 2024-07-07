

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
            <span class="{{ isset($product['badges'][1]) && 
            $product['badges'][1]['type'] === 'discount' ? 'percent' : '' }}">
                {{ isset($product['badges'][1]) && $product['badges'][1]['type'] === 'discount' ? 
                $product['badges'][1]['value'] : '' }}
            </span>

            
            <!-- sostenibilità prodotto -->
            <span class="{{ isset($product['badges'][0]) && 
            $product['badges'][0]['type'] === 'tag' ? 'tenability' : '' }}">
                {{ isset($product['badges'][0]) && $product['badges'][0]['type'] === 'tag' ? 
                $product['badges'][0]['value'] : '' }}
            </span>


        </div>

        <!-- liks -->
        <div class="heart">
            <span
            class="{{ $product['isInFavorites'] ? 'favorite' : ''}}"            
            >&hearts;
            </span>
        </div>
    </div>
    <div class="text">

        <!-- nome brand -->
        <span class="brand">{{ $product['brand'] }}</span>

        <!-- descrizione prodotto -->
        <h4>{{ $product['name'] }}</h4>

        <!-- prezzo -->
        <span class="new-price">{{ $product['price'] }}</span>

    </div>
</div>