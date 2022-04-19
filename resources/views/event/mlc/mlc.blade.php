@extends('layout.main')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    @include('components.event_navbar')
    @include('components.mlc_head')
    @include('components.mlc_about')
@endsection

@section('footer')
    @include('components.footer')
@endsection