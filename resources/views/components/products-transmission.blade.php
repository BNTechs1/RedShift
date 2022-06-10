@props(['transCsv'])
@php 
    $transmission = $transCsv;
@endphp
    <a  href="/products?search={{$transmission}}" >{{$transmission}}</a>