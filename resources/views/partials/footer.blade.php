<footer>
    {{-- Footer Top --}}
    <div id="footer-top">
        <div class="container">
            <div class="left column">
                <h3>DC Comics</h3>
                <ul>
                    {{-- @foreach ($navbar_comics as $pippo)
                    <li>
                        <a href="{{ $pippo['href'] }}">{{ $pippo['item'] }}</a>
                    </li>
                    @endforeach --}}
                </ul>

                <h3>Shop</h3>
                <ul>
                    {{-- <li v-for="shop in shop"><a href="#">{{ shop }}</a></li> --}}
                </ul>
            </div>
            <div class="center column">
                <h3>DC</h3>
                <ul>
                    {{-- <li v-for="dc in dc"><a href="#">{{ dc }}</a></li> --}}
                </ul>
            </div>
            <div class="right column">
                <h3>Sites</h3>
                <ul>
                    {{-- <li v-for="site in sites"><a href="#">{{ site }}</a></li> --}}
                </ul>
            </div>
        </div>
    </div>
    {{-- Footer Top --}}

    {{-- <FooterBottom></FooterBottom> --}}
</footer>