{{-- Extend app layout --}}
@extends('layouts.app');

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
                        <div class="comic">
                            <div class="image">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                            </div>
                            <h3>{{ $comic['series'] }}</h3>
                        </div>
                    @endforeach
                </div>
                <button>Load More</button>
            </div>
        </div>
        
    </section>
    {{-- Comics --}}

    {{-- <MainBottom></MainBottom> --}}
@endsection
{{-- Main --}}