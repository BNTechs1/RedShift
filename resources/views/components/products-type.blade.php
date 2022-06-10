@props(['typeCsv'])
@php 
    $types = explode($typeCsv);
@endphp

    @foreach ($types as $type)
        <a  href="/products/?tag={{$type}}" >{{$type}}</a>
    @endforeach