@extends('master_admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <input type="text" name="nama_santri" value="{{ $santri->nama_santri }}" id="">

    
@endsection