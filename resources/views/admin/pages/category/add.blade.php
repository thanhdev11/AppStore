@extends('admin.layouts.master')

@section('title', 'Create Category')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Category</h6>
    </div>
    <div class="card-body">
        <form role="form" action="{{ route('category.store') }}" method="POST">
            @CSRF
            <div class="form-group">
                <label>Name</label>
                <input name="name" class="form-control" placeholder="Enter name category">
            </div> 
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="1">Show</option>
                    <option value="0">Not Show</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Submit Button</button>
            <button type="reset" class="btn btn-primary">Reset Button</button>
        </form>
    </div>
</div>    
@endsection