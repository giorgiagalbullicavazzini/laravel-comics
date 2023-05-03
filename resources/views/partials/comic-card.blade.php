<div class="comic">
    <div class="image">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
    </div>
    <a href="{{ route('comic', ['index' => $loop -> index]) }}">
        <h3>{{ $comic['series'] }}</h3>
    </a>
</div>