@props(['tagsCsv'])
@php 
    $tags = explode(',',$tagsCsv);
@endphp

    @foreach ($tags as $tag)
        <a  href="/products/?tag={{$tag}}" >{{$tag}}</a>
    @endforeach