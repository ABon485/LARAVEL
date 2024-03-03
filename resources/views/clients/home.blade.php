@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('sidebar')
    <h3>home sidebar</h3>
@endsection

@section('content')
    <h1>Trang chủ</h1>
@endsection

@section('css')
    <header>
        background: blue;
        color: #fff;
    </header>
@endsection

@section('js')
<script>
    documennt.querySelector('.show').onclick = function(){
        alert('yhanhf công');
    }
</script>
@endsection
