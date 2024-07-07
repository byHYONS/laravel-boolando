{{-- ? estendo a tutte le pagine il layout --}}
@extends('layouts.app')

{{-- ? creo la sezione prodotti --}}
@section('products')

<main>
    <div class="container">
        <div class="d-flex">
            @foreach ($products as $product)
            <div class="col-33">

                {{-- ? ciclo per i prodotti --}}            
                @include('shared.card')
                
           </div>
            @endforeach
        </div>
    </div>
</main>

@endsection
