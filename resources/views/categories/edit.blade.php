@extends('layouts.app')

@section('contents')
<h3>Edit Category</h3>
<hr>
@include('layouts.messages')
<form class="form-horizontal" action="{{ url("/categories/$category->id") }}" method="POST">
    @method("put")
    @csrf
    <div class="form-group">
        <label class="control-label col-sm-2">Category Name:</label>
        <div class="col-sm-10">
            <input type="text" name="category_name" class="form-control" value="{{ $category->name }}"  placeholder="Enter Category Name">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
</form>

@endsection
