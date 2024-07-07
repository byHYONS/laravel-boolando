<footer>
    <div class="container">
        <div class="d-flex">
            <!-- nome brand -->
            <div class="col-50">
                <h3> {{ $footers['nameBrand'] }} </h3>
                <div class="">
                    <ul class="policy">
                        <!-- policy -->
                        @foreach ($footers['menuItem'] as $policy)
                        <li>
                        <a href="#" >{{ $policy }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-50 social">
                <!-- social -->
                <h5> {{ $footers['messageSocial'] }} </h5>
                @foreach ($footers['socialIcons'] as $social)
                <img src="{{ Vite::asset('resources/img/' . $social['image']) }}" alt="{{ $social['name'] }}">                    
                @endforeach
            </div>
        </div>
    </div>
</footer>
