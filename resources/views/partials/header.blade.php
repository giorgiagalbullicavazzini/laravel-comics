<header>
    <div class="container" id="top-header">
        
        {{-- Logo --}}
        <div id="logo">
            <a href="/">
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

    {{-- Jumbotron --}}
    <div id="jumbotron"></div>
    {{-- Jumbotron --}}
</header>