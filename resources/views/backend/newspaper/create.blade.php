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
    <form class="form-horizontal" action="{{route('admin.newspaper.store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            NewsPaper Management
                            <small class="text-muted">NewsPaper Create</small>
                        </h4>
                    </div><!--col-->
                </div><!--row-->

                <hr>

                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">NewsPaper Title</label>

                            <div class="col-md-10">
                                <input type="text" name="newspaper_title" onkeyup="create_slug(this)" class="form-control" placeholder="Enter NewsPaper title">
                            </div><!--col-->
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Founded By</label>

                            <div class="col-md-10">
                                <input type="text" name="founded_by" class="form-control" placeholder="Enter Founded By">
                            </div><!--col-->
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Launch Date</label>

                            <div class="col-md-10">
                                <input type="date" name="launch_date" class="form-control" placeholder="Enter launch Date">
                            </div><!--col-->
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">NewsPaper Slug</label>

                            <div class="col-md-10">
                                <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter Slug" readonly="readonly">
                            </div><!--col-->
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Newpaper Logo</label>

                            <div class="col-md-10">
                                <input type="file" name="logo" class="form-control" placeholder="Enter launch Date">
                            </div><!--col-->
                        </div>

                        <!--form-group-->

                       


                       

                      



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


<script type="text/javascript">
    function create_slug(str) {
    var $slug = '';
    var trimmed = $.trim($(str).val());
    $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
    replace(/-+/g, '-').
    replace(/^-|-$/g, '');
    $('#slug').val($slug.toLowerCase())
    console.log($slug.toLowerCase());
}
</script>