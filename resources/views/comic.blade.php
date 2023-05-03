{{-- Extend app layout --}}
@extends('layouts.app')

{{-- Title --}}
@section('page.title')
    {{ $comic['title'] }}
@endsection
{{-- Title --}}

{{-- Main --}}
@section('page.main')
    <h1>{{ $comic['title'] }}</h1>
@endsection
{{-- Main --}}