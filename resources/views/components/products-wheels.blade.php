@props(['wheelCsv'])
@php 
    $wheels = explode($wheelCsv);
@endphp

    @foreach ($wheels as $wheel)
        <a  href="/products/?tag={{$wheel}}" >{{$wheel}}</a>
    @endforeach