@extends('layout.main')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    @include('components.event_hero')
@endsection

@section('footer')
    @include('components.footer')
@endsection