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
    <form class="form-horizontal" action="{{route('admin.adsense.update' , $adsense->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Adsense Managemen                            <small class="text-muted">Adsense Create</small>
                        </h4>
t
                    </div><!--col-->

                </div><!--row-->


                <hr>

                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Adsense Code</label>

                            <div class="col-md-10">
                                <textarea id="textarea" name="code"> {{$adsense->code}} </textarea>
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->
                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Banner Size</label>

                            <select name="size">
                                <option value="banner" @if($adsense->size == "banner") selected @endif>Banner Size</option>
                                <option value="square" @if($adsense->size == "square") selected @endif>Square Size</option>
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
