@extends('layouts.app')

@section('content')
<div>
    <h3>Items List :</h3>
            @foreach ($items as $item)
                <li> {{ $item }}</li>
            @endforeach
</div>
<h3>Form :</h3>

    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Item Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <div class="form-group">
            <label for="exampleTextarea">Example textarea</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection