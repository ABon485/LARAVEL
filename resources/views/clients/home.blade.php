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
    @include('clients.content.silde')
    @include('clients.content.about')
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
        alert('yhanhf công');
    }
</script>
@endsection
