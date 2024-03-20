@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection


@section('content')
    <h1>Thêm sản phẩm</h1>
    <x-package-alert />
    @push('scripts')
<script>
    console.log('push lần 2');
</script>
@endpush
@endsection

@section('css')

@endsection

@prepend('scripts')
<script>
    console.log('push lần 1');
</script>
@endprepend
