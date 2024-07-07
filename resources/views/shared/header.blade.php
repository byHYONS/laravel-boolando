<header>
    <div class="container">
        <div class="d-flex">
            <div class="col-33"> 
                <!-- LINK MENU -->
                <ul class="gender">                   
                        @foreach ($menus['menuItem'] as $menu)
                        <li>
                        <a href="#" >{{ $menu }}</a>
                        </li>                       
                        @endforeach
                </ul>
            </div>
            <!-- LOGO -->
            <div class="col-33 logo">
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/' . $menus['logoImage']) }}" alt="logo">
                </a>
            </div>
            <!-- ICONE -->
            <div class="col-33 social">
                @foreach ($menus['socialIcons'] as $social)
                <img src="{{ Vite::asset('resources/img/' . $social['image']) }}" alt="{{ $social['name'] }}">
                @endforeach
            </div>
        </div>
    </div>
</header>
