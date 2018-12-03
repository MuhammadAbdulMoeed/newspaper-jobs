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
    <form class="form-horizontal" action="{{route('admin.adsense.store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Adsense Management
                            <small class="text-muted">Adsense Create</small>
                        </h4>
                    </div><!--col-->

                </div><!--row-->


                <hr>

                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Adsense Code</label>

                            <div class="col-md-10">
                                <textarea id="textarea" name="code"></textarea>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->
                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Banner Size</label>

                            <select name="size">
                                <option value="717x417">717px x 417px</option>
                                <option value="700x90">700px x 90px</option>
                                <option value="764x267">764px x 267px</option>
                                <option value="600x300">600px x 300px</option>
                                <option value="300x600">300px x 600px</option>
                                <option value="348x340">348px x 340px</option>
                            </select>
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->
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
