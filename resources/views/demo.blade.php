@extends('master')

@section('title')
    BITM Page
@endsection

@section('body')
    <h1>{{ $a }}</h1>
    <h1>{{ $b }}</h1>
    <h1>{{ $c[3] }}</h1><hr/>
    @foreach($c as $key=>$value)
        @if($key >=3 && $key <=5)
            <h1>Index No: {{ $key }} and Value: {{ $value }}</h1>
        @endif
    @endforeach
    <hr/>
    @foreach($d as $key=>$value)
        @foreach($value as $item)
            <h1>{{ $item }}</h1>
        @endforeach
    @endforeach


@endsection

