<footer>
    {{-- Footer Top --}}
    <div id="footer-top">
        <div class="container">
            <div class="left column">
                <h3>DC Comics</h3>
                <ul>
                    @foreach ($navbar_comics as $link)
                    <li>
                        <a href="{{ $link['href'] }}">{{ $link['item'] }}</a>
                    </li>
                    @endforeach
                </ul>

                <h3>Shop</h3>
                <ul>
                    @foreach ($navbar_shop as $link)
                    <li>
                        <a href="{{ $link['href'] }}">{{ $link['item'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="center column">
                <h3>DC</h3>
                <ul>
                    @foreach ($navbar_dc as $link)
                    <li>
                        <a href="{{ $link['href'] }}">{{ $link['item'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="right column">
                <h3>Sites</h3>
                <ul>
                    @foreach ($navbar_sites as $link)
                    <li>
                        <a href="{{ $link['href'] }}">{{ $link['item'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    {{-- Footer Top --}}

    {{-- Footer Bottom --}}
    <div id="footer-bottom">
        <div class="container">
            <a href="#">
                <button>Sign-up now!</button>
            </a>
            
            <div id="socials">
                <h3>Follow us</h3>
                <div class="buttons">
                    @foreach ($socials as $social)
                    <div class="button">
                        <a href="#">
                            <img src="{{ $social['image'] }}" alt="{{ $social['social'] }}">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- Footer Bottom --}}
</footer>