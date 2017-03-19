@extends('layouts.app')

@section('content')

   <div class="container">
    <h3>Add Parts:</h3>

    <form method="POST" action="/parts">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="item">Item</label>
            <select class="form-control" id="item" name="item">
                @foreach($items as $item)
                <option value={!! $item->id !!}>{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="part_1">Part 1</label>
            <input type="text" class="form-control" id="name" name="part_1">
        </div>

        <div class="form-group">
            <label for="part_2">Part 2</label>
            <input type="text" class="form-control" id="name" name="part_2">
        </div>

        <div class="form-group">
            <label for="part_3">Part 3</label>
            <input type="text" class="form-control" id="name" name="part_3">
        </div>

        <div class="form-group">
            <label for="part_4">Part 4</label>
            <input type="text" class="form-control" id="name" name="part_4">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

       <!-- Single button -->
       <div class="btn-group">
           <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Action <span class="caret"></span>
           </button>
           <ul class="dropdown-menu">
               <li><a href="#">Action</a></li>
               <li><a href="#">Another action</a></li>
               <li><a href="#">Something else here</a></li>
               <li role="separator" class="divider"></li>
               <li><a href="#">Separated link</a></li>
           </ul>
       </div>

   </div>

@endsection