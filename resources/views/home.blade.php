<h1>Trang chủ Unicode</h1>
<h2>{{ !empty(request()->keyword) ? request()->keyword : 'không có gì' }}</h2>
<div class="container">
    {!! !empty($content) ? $content : false !!}
</div>
<hr>
@php
$messages ='Đặt hàng thành công';
@endphp

@include('parts.notice');

{{-- @php
 $number = 5;
 if($number>= 10){
    $total = $number +20;
 }   else {
    $total = $number+10;
 }
@endphp
<h3>kết quả: {{$number}}- {{$total}}</h3>

<script>
    Hello,@{{$name}}
</script> --}}