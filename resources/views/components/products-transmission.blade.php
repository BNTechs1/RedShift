@props(['transCsv'])
@php 
    $transs = explode($transCsv);
@endphp

    @foreach ($transs as $trans)
        <a  href="/products/?tag={{$trans}}" >{{$trans}}</a>
    @endforeach