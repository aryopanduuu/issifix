@extends('admin.layout.main')
@section('navbar')
    @include('admin.components.sidebar')
@endsection
@section('content')
    @include('admin.components.dashboard')
@endsection