@props(['priceCsv'])
@php 
    $price = explode($priceCsv);
@endphp

    @foreach ($prices as $price)
        <a  href="/products/?tag={{$price}}" >{{$price}}</a>
    @endforeach