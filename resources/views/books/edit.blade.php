@extends('layouts.main')

@section('content')
    <form action="{{ route('books.update', $book->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-floating mb-3">
            <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{ $book->title }}">
            <label for="title">Title</label>
        </div>
        <div class="form-floating mb-3">
            <input name="author" type="text" class="form-control" id="author" placeholder="Author" value="{{ $book->author }}">
            <label for="author">Author</label>
        </div>
        <div class="form-floating mb-3">
            <input name="publisher" type="text" class="form-control" id="publisher" placeholder="Publisher" value="{{ $book->publisher }}">
            <label for="publisher">Publisher</label>
        </div>
        <div class="form-floating mb-3">
            <input name="quantity" type="number" class="form-control" id="quantity" placeholder="Quantity" value="{{ $book->quantity }}">
            <label for="quantity">Quantity</label>
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection