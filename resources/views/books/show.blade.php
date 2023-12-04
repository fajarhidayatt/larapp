@extends('layouts.main')

@section('content')
    <div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="title" placeholder="Title" disabled>
            <label for="title">{{ $book->title }}</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="author" placeholder="Author" disabled>
            <label for="author">{{ $book->author }}</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="publisher" placeholder="Publisher" disabled>
            <label for="publisher">{{ $book->publisher }}</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="quantity" placeholder="Quantity" disabled>
            <label for="quantity">{{ $book->quantity }}</label>
        </div>
</div>
@endsection