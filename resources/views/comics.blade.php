{{-- Extend app layout --}}
@extends('layouts.app');

{{-- Title --}}
@section('page.title')
    Comics
@endsection
{{-- Title --}}

{{-- Main --}}
@section('page.main')
    <section>
        <div class="container">
            <h2>Comics</h2>
            <ul>
                @foreach ($comics as $item)
                    <li>{{ $item['title'] }}</li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
{{-- Main --}}