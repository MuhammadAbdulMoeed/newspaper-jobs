@extends('backend.layouts.app')

Cities Management


@section('breidcrumb')
<ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>

                                    <li class="breadcrumb-item"><a href="http://localhost:8000/admin/dashboard">Dashboard</a></li>
                                                <li class="breadcrumb-item active">User Management</li>
    </ol>
@endsection

@section('content')
    <form class="form-horizontal" action="{{route('admin.categories.store')}}" method="POST">
        {{csrf_field()}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Categories Management
                            <small class="text-muted">Categories Create</small>
                        </h4>
                    </div><!--col-->
                </div><!--row-->

                <hr>

                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Categories Title</label>

                            <div class="col-md-10">
                                <input type="text" name="category_title" class="form-control" placeholder="Enter Category">
                            </div><!--col-->
                        </div><!--form-group-->

                       


                       

                      



                    </div><!--col-->
                </div><!--row-->


                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Categories Display</label>

                            <div class="col-md-10">
                                <input type="checkbox" name="cat">
                            </div><!--col-->
                        </div><!--form-group-->

                    </div><!--col-->
                </div>
            </div><!--card-body-->

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-danger btn-sm" href="{{url('/')}}">Cancel</a>
                    </div><!--col-->

                    <div class="col text-right">
                        <button class="btn btn-success btn-sm pull-right" type="submit">Create</button>
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    </form>
@endsection
