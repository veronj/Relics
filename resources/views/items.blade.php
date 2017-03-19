@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Items List :</h3>
            @foreach ($items as $item)
                <li> {{ $item }}</li>
            @endforeach
<hr>

<h3>Form :</h3>

    <form method="POST" action="/items">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Item Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="type">type</label>
            <select class="form-control" id="type" name="type">
                <option>Warframe</option>
                <option>Primary</option>
                <option>Secondary</option>
                <option>Melee</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection