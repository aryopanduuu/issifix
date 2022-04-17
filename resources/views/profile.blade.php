@extends('layout.main')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    @include('components.profile_card')
    @include('components.profile_body')
@endsection

@section('footer')
    @include('components.footer')
@endsection