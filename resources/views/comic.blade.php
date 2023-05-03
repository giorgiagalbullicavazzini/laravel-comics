{{-- Extend app layout --}}
@extends('layouts.app')

{{-- Title --}}
@section('page.title')
    {{ $comic['title'] }}
@endsection
{{-- Title --}}

{{-- Main --}}

@section('page.main')
    {{-- Jumbotron --}}
    <div id="jumbotron"></div>
    {{-- Jumbotron --}}

    {{-- Comic --}}
    <div id="comic">
        <div class="container">
            <div class="divisor">
                {{-- Thumbnail --}}
                <div id="thumb">
                    <div class="label type">{{ $comic['type'] }}</div>
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }} ">
                    <div class="label gallery">
                        <a href="#">View Gallery</a>
                    </div>
                </div>
                {{-- Thumbnail --}}
            </div>
        </div>
    
        {{-- Info --}}
        <div class="comic-info">
            <div class="container">
                <h2>{{ $comic['title'] }}</h2>
                <div class="description">{{ $comic['description'] }}</div>
            </div>
        </div>
        {{-- Info --}}
    </div>
    {{-- Comic --}}
@endsection
{{-- Main --}}