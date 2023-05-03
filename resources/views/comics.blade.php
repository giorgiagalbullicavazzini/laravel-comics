{{-- Extend app layout --}}
@extends('layouts.app')

{{-- Title --}}
@section('page.title')
    Comics
@endsection
{{-- Title --}}

{{-- Main --}}
@section('page.main')
    {{-- Comics --}}
    <section>
        <div id="main-top">
            <div class="container">
                <h2>Current Series</h2>
                <div class="comics">
                    @foreach ($comics as $comic)
                        @include('partials.comic-card')
                    @endforeach
                </div>
                <button>Load More</button>
            </div>
        </div>
        
    </section>
    {{-- Comics --}}

    {{-- Buy --}}
    <div id="main-bottom">
        <div class="container">
            @foreach ($buy as $link)
                <div class="button">
                    <div class="image">
                        <img src="{{ Vite::asset($link['image']) }}" alt="{{ $link['text'] }}">
                    </div>
                    <div class="text">
                        <a href="#">{{ $link['text'] }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- Buy --}}
@endsection
{{-- Main --}}