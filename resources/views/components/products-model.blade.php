@props(['modelCsv'])
@php 
    $models = explode($modelCsv);
@endphp

    @foreach ($models as $model)
        <a  href="/products/?tag={{$model}}" >{{$model}}</a>
    @endforeach