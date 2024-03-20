@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('sidebar')
    @parent
    <h3>home sidebar</h3>
@endsection

@section('content')
    <h1>Trang chủ</h1>
    @datetime("2021-12-15 15:00:30")
    @include('clients.content.silde')
    @include('clients.content.about')

    @env('local')
        <p>Môi trường web</p>
    @endenv
    <x-alert type="info" :content="$message" data-icon='facebook/>
    {{-- <x-Button />
    <x-form-button /> --}}

@endsection

@section('css')
<style>
    .header{
        background: blue;
        color: #ffff;
    }
</style>
@endsection

@section('js')
<script>
    documennt.querySelector('.show').onclick = function(){
        alert('thành công');
    }
</script>
@endsection
