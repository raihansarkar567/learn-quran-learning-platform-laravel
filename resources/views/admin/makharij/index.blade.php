@extends('layouts.app',['pageTitle' => __('makharij Add')])
@section('content')

<div class="inner-block">


    @if ($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <div class="header-action">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus mr-2"></i>Add</button>
            </div>
        </div>
    </div>
</div>
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">makharij List</h3>
                <div class="card-options">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Search something..." name="search">
                            <span class="input-group-btn ml-2"><button class="btn btn-icon" type="submit"><span class="fa fa-search"></span></button></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-vcenter table-hover mb-0 text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>makharij Name</th>
                                <th>makharij Details</th>
                                <th>makharij Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($makharij as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->details}}</td>
                                <td>{{$item->slug}}</td>
                                <td>
                                    <a href="{{ url('/admin/makharij/' . $item->id . '/edit') }}" title="Edit Class"><button
                                class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button></a>
                        <form method="POST" id="deleteButton{{$item->id}}"
                            action="{{ url('/admin/makharij' . '/' . $item->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete makharij"
                                onclick="sweetalertDelete({{$item->id}})"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>            
</div>

<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ url('/admin/makharij') }}" accept-charset="UTF-8"
                        class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add makharij </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="makharij Name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="details" placeholder="makharij details">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>


@endsection
