@extends('admin.layouts.admin_home')

@section('content')
    @foreach ($jiangdao as $data)
        {{ $data->name }}
        <img src="{{ asset('pengisi/'.$data->photos.'.png') }}">
        <br>
    @endforeach
@endsection

<style>
    img{
        max-width: 32px;
        max-height: 32px;
    }
</style>