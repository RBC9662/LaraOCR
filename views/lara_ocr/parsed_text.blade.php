@extends('lara_ocr.layout')
@section('content')
    <h2>Output</h2>
    @if(!empty($parsedText))
        <b> Parsed Text: </b> <p style="text-align: left; display:inline-block">{{$parsedText}}</p>
    @else
        <p style="text-align: left; color: grey;">NO TEXT FOUND</p>
    @endif
    @if(!empty($image))
        <b> path: </b> <a href="{{ $image }}" target="_blank">{{$image}}</p> <br>
    @else
        <p style="text-align: left; color: grey;">NO PATH FOUND</p> <br>
    @endif
    <a href="{{route('home')}}">Parse another image</a>
@endsection