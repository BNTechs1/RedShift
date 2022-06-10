@props(['wheelCsv'])
@php 
    $wheels = $wheelCsv;
@endphp
<a  href="/products?search={{$wheels}}" >{{$wheels}}</a>