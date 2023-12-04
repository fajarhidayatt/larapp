@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h1>Books</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary">Add Book</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Publisher</th>
                <th scope="col">Quantity</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($books as $book)
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Programming JS</td>
                    <td>Gramedia</td>
                    <td>10</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-success">Show</button>
                            <button type="button" class="btn btn-warning">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">There is no data here</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection