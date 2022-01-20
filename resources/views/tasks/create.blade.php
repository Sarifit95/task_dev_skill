@extends('layouts.app')
@section('title')
    Add task
@endsection
@section('contents')
<h3>Add New Taks</h3>
<hr>
@include('layouts.messages')
<form class="form-horizontal" action="{{ url('/tasks') }}" method="POST">
    @csrf
    <div class="form-group">
        <label class="control-label col-sm-2">Task Name:</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control" value="{{ old('name')}}" placeholder="Enter Task Name">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2">Caetegory:</label>
        <div class="col-sm-10">
            <select name="category_id" class="form-control">
                <option value="">--Select a Category--</option>
                @foreach ($categories_list as $item)
                <option value="{{ $item->id }}" {{ old('category_id')==$item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2">Task details:</label>
        <div class="col-sm-10">
            <textarea name="details" cols="30" rows="10" class="form-control">{{ old("details") }}</textarea>
            {{-- <input type="text" name="name" class="form-control" value="{{ old('name')}}" placeholder="Enter Task
            Name"> --}}
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2">Task Deadline:</label>
        <div class="col-sm-10">
           <input type="date" name="deadline" value="{{ old('deadline'); }}" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2">Status:</label>
        <div class="col-sm-10">
           <select name="status" class="form-control">
               <option value="">--Select a Status--</option>
               @foreach ($task_status as $x => $status)
                   <option value="{{ $x }}" {{ old('status')==$x ? 'selected' : '' }}>{{ $status }}</option>
               @endforeach
           </select>
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">Create</button>
        </div>
    </div>
</form>
@endsection
