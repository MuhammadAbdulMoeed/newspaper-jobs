@extends('backend.layouts.app')

Category Management


@section('breidcrumb')
<ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>

                                    <li class="breadcrumb-item"><a href="http://localhost:8000/admin/dashboard">Dashboard</a></li>
                                                <li class="breadcrumb-item active">Custom Message Management</li>
    </ol>
@endsection

@section('content')
    <form class="form-horizontal" action="{{route('admin.message.store')}}" method="POST">
        {{csrf_field()}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Custom Message Management
                            <small class="text-muted">Custom Message Create</small>
                        </h4>
                    </div><!--col-->
                </div><!--row-->

                <hr>

                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Custome Message</label>

                            <div class="col-md-10">
                                <textarea name="message">Enter Custom Message</textarea>
                            </div><!--col-->
                            
                        </div><!--form-group-->

                       


                       

                      



                    </div><!--col-->
                </div><!--row-->

                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Newspapers</label>

                            <div class="col-md-10">
                                <select name="newspaper">
                                    @foreach($newspapers as $newspaper)
                                    <option value="{{$newspaper->id}}">{{$newspaper->title}}</option>
                                    @endforeach
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->

                    </div><!--col-->
                </div>

                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Date</label>

                            <div class="col-md-10">
                                <input type="date" name="date">
                            </div><!--col-->
                        </div><!--form-group-->

                    </div><!--col-->
                </div>

                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Message Display</label>

                            <div class="col-md-10">
                                <input type="checkbox" name="status">
                            </div><!--col-->
                        </div><!--form-group-->

                    </div><!--col-->
                </div>
            </div><!--card-body-->

            
            </div>

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
