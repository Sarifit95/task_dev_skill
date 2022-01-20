@extends('layouts.app')

@section('contents')
    <a href="{{ url('/categories/create') }}" class="btn btn-success"> Add Category</a>
    @include('layouts.messages')
    <hr>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach ($category_list as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>
                    <a style="float: left; margin-right: 5px;" href="{{ url("/categories/$item->id/edit") }}" class="btn btn-info btn-sm">Update</a>
                    <form action="{{ url("/categories/$item->id") }}" method="POST" onsubmit="return confirm('Do you really want to delete this category?');">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
