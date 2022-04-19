@extends('layout.main')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    @include('components.event_navbar')
    @include('components.mlc_regulation_head')
    @include('components.mlc_regulation_body')
@endsection

@section('footer')
    @include('components.footer')
@endsection