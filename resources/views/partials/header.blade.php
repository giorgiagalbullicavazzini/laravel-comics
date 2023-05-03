<header>
    {{-- Top Header --}}
    <div id="top-header">
        <div class="container">
            <div class="copyright">
                DC Power&trade; Visa&reg;
            </div>
            <div class="sites">
                Additional DC Sites
            </div>
        </div>
    </div>
    {{-- Top Header --}}

    {{-- Bottom Header --}}
    <div id="bottom-header">
        <div class="container">
            {{-- Logo --}}
            <div id="logo">
                <a href="{{ route('home') }}">
                    <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC Comics Logo">
                </a>
            </div>
            {{-- Logo --}}
    
            {{-- Navbar --}}
            <div id="navbar">
                <ul>
                    @foreach ($navbar as $link)
                    <li>
                        <a href="{{ route($link['href']) }}">{{ $link['name'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            {{-- Navbar --}}
        </div>
    </div>
    {{-- Bottom Header --}}
</header>