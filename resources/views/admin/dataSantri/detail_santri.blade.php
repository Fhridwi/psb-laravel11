@extends('master_admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
    {{ $santri->nama_santri }}
@endsection