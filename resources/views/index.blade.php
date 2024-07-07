
{{-- ? estendo il layout alla pagina prodotti --}}
@extends('layouts.app')

{{-- ? creo la sezione prodotti --}}
@section('products')

<main>
    <div class="container">
        <div class="d-flex">

            {{-- ? ciclo per i prodotti --}}            
            @foreach ($products as $product)

            <div class="col-33">

                {{-- ? card --}}
                @include('shared.card')
                
           </div>

            @endforeach
        </div>
    </div>
</main>

@endsection
