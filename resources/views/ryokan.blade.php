@extends('app')

@section('content')
@php
$step = 1;
$message = "旅館";
$hidePrev = true;
@endphp
<form action="/ryokan" method="post">
    @csrf
    <x-auto-complete-input type="ryokan" placeholder="旅館名を入力" />
    <button type="submit">next</button>
</form>
@endsection
