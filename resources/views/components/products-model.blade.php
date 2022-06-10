@props(['modelCsv'])
@php 
    $model = $modelCsv;
@endphp
       <a  href="/products?search={{$model}}" >{{$model}}</a>

        {{-- <a  href="/products/?tag={{$tag}}" >{{$tag}}</a> --}}