@extends('layouts.app')

@section('contents')
<h3>Add New Category</h3>
@include('layouts.messages')
<hr>
<form class="form-horizontal" action="{{ url('/categories') }}" method="POST">
    @csrf
    <div class="form-group">
        <label class="control-label col-sm-2">Category Name:</label>
        <div class="col-sm-10">
            <input type="text" name="category_name" class="form-control" value="{{ old('category_name')}}"  placeholder="Enter Category Name">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">Create</button>
        </div>
    </div>
</form>

@endsection
