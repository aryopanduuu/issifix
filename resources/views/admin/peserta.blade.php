@extends('admin.layout.main')
@section('navbar')
    @include('admin.components.sidebar')
@endsection
@section('content')
    @include('admin.components.tabel_peserta')
@endsection