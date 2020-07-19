@extends('admin.layouts.master')

@section('title', 'List Category')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Category</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($categories as $key => $category )
                        <tr class="data-row">
                            <td>{{ $key + 1 }}</td>
                            <td class="name">{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td class="status">
                                @if($category->status == 1)
                                    {{ "Show" }}
                                @else
                                    {{ "Not Show" }}
                                @endif
                            </td>
                            <td>
                                <button id="edit-item" class="btn btn-primary edit" data-toggle="modal" data-target="#edit" data-item-id="{{ $category->id }}" title="{{ 'Edit ' . $category->name }}">
                                    <i class="fas fa-edit" aria-hidden="true"></i>
                                </button>
                                <button id="delete-item" class="btn btn-danger delete" data-toggle="modal" data-target="#delete"  data-id="{{ $category->id }}" title="{{ 'Delete ' . $category->name }}">
                                <i class="fas fa-radiation" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
 <!-- Edit Modal-->
 <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" style="margin: 5px">
                        <div class="col-lg-12">
                            <form role="form" action="ad" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                    <label>Name</label>
                                    <input id="modal-input-name" name="name" class="form-control name" placeholder="Enter name category">
                                </div> 
                                <div class="form-group">
                                    <label>Status</label>
                                    <select id="modal-input-status" name="status" class="form-control status">
                                        <option value="1">Show</option>
                                        <option value="0">Not Show</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success update">Save</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- delete Modal-->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="margin-left: 183px;">
                    <button type="button" class="btn btn-success">Có</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
                <div>
            </div>
        </div>
    </div>
`
@endsection