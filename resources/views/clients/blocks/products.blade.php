@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('sidebar')
    <h3>product sidebar</h3>
@endsection

@section('content')
    <h1>sản phẩm</h1>
@endsection

@section('css')
    <header>
        background: yelow;
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
