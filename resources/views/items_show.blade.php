@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Parts List of : {{ $item->name }}</h3>
        <ul>
        @foreach ($parts as $part)
            <li> {{ $part->name }}</li>
        @endforeach
        </ul>
        <hr>


    </div>
@endsection