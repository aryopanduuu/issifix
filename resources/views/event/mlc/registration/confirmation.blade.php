@extends('layout.main')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')
@include('components.event_navbar')
@include('components.mlc_register_head')
@include('components.mlc_register_confirmation')
@endsection

@section('footer')
@include('components.footer')
@endsection