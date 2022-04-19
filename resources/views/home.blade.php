@extends('layout.main')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
@include('components.hero')
@include('components.sponsor')
@endsection

@section('footer')
    @include('components.footer')
@endsection