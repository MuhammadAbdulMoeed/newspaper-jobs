@extends('backend.layouts.app')

Adds Management


@section('breidcrumb')
<ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>

                                    <li class="breadcrumb-item"><a href="http://localhost:8000/admin/dashboard">Dashboard</a></li>
                                                <li class="breadcrumb-item active">Adds Management</li>
    </ol>
@endsection

@section('content')
    <form class="form-horizontal" id="addForm" action="{{route('admin.ex.adds.store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Adds Management
                            <small class="text-muted">Adds Create</small>
                        </h4>
                    </div><!--col-->
                </div><!--row-->

                <hr>

                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Adds Title</label>

                            <div class="col-md-10">
                                <input type="text" name="adds_title" class="form-control" placeholder="Enter Adds">
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Newspaper</label>

                            <div class="col-md-10">
                                <select name="newspaper_id" class="form-control">
                                    <option value="0">Select NewsPaper</option>
                                    @foreach($newspaper as $data)
                                    <option value="{{$data->id}}">{{$data->title}}</option>
                                    @endforeach
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Qualifications</label>

                            <div class="col-md-10">
                                <select name="qualification_id" class="form-control">
                                    <option value="0">Select Qualification</option>
                                    @foreach($qualification as $data)
                                    <option value="{{$data->id}}">{{$data->title}}</option>
                                    @endforeach
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">City</label>

                            <div class="col-md-10">
                                <select name="city_id" class="form-control">
                                    <option value="0">Select City</option>
                                    @foreach($city as $data)
                                    <option value="{{$data->id}}">{{$data->title}}</option>
                                    @endforeach
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Category</label>

                            <div class="col-md-10">
                                <select name="category_id" class="form-control">
                                    <option value="0">Select Category</option>
                                    @foreach($category as $data)
                                    <option value="{{$data->id}}">{{$data->title}}</option>
                                    @endforeach
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Job Type</label>

                            <div class="col-md-10">
                                <select name="job_type_id" class="form-control">
                                    <option value="0">Select Job Type</option>
                                    @foreach($jobType as $data)
                                    <option value="{{$data->id}}">{{$data->job_type_title}}</option>
                                    @endforeach
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Add Type</label>

                            <div class="col-md-10">
                                <select name="add_types" class="form-control">
                                    <option value="jobs">Select Add Type</option>
                                    <option value="jobs">Pakistan Jobs</option>
                                    <option value="tendars">Abroad Jobs</option>
                                    <option value="admissions">Online Jobs</option>
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Total Positions</label>
                            <div class="col-md-10">
                            <input type="number" name="total_pos" class="form-control" placeholder="Total Positions">
                            </div>
                            
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Company Name</label>
                            <div class="col-md-10">
                            <input type="text" name="company_name" class="form-control" placeholder="Company Name">
                            </div>
                            
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Company Abbrevation</label>
                            <div class="col-md-10">
                            <input type="text" name="company_abbrevation" class="form-control" placeholder="Company Abbrevation">
                            </div>
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Job Location</label>
                            <div class="col-md-10">
                            <input type="text" name="job_loc" class="form-control" placeholder="Job Location">
                            </div>
                        </div><!--form-group-->
                         <div class="form-group row">
                            <label class="col-md-2 form-control-label">Gendar</label>
                            <div class="col-md-10">
                            <input type="text" name="gendar" class="form-control" placeholder="Gendar">
                            </div>
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Salary</label>
                            <div class="col-md-10">
                            <input type="text" name="salary" class="form-control" placeholder="Salary">
                            </div>
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Experience</label>
                            <div class="col-md-10">
                            <input type="text" name="experience" class="form-control" placeholder="Experience">
                            </div>
                        </div><!--form-group-->
                         <div class="form-group row">
                            <label class="col-md-2 form-control-label">Age Limit</label>
                            <div class="col-md-10">
                            <input type="text" name="age_limit" class="form-control" placeholder="Age Limit">
                            </div>
                        </div><!--form-group-->
                         <div class="form-group row">
                            <label class="col-md-2 form-control-label">Working Hours</label>
                            <div class="col-md-10">
                            <input type="text" name="work_hours" class="form-control" placeholder="Working hours">
                            </div>
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Skills</label>
                            <div class="col-md-10">
                            <input type="text" name="skills" class="form-control" placeholder="skills">
                            </div>
                        </div><!--form-group-->
                         <div class="form-group row">
                            <label class="col-md-2 form-control-label">Contact Number</label>
                            <div class="col-md-10">
                            <input type="text" name="contact_num" class="form-control" placeholder="Contact Number">
                            </div>
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Job Address</label>
                            <div class="col-md-10">
                            <input type="text" name="job_address" class="form-control" placeholder="Job Address">
                            </div>
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Contact Email</label>
                            <div class="col-md-10">
                            <input type="text" name="contact_email" class="form-control" placeholder="Contact Email">
                            </div>
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Minimum Requirements</label>

                            <div class="col-md-10">
                                <input type="text" name="min_req" class="form-control" placeholder="Enter Requirements" placeholder="minimum Requirements">
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Description</label>

                            <div class="col-md-10">
                                <textarea name="description"></textarea>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Apply By Date</label>

                            <div class="col-md-10">
                                <input type="date" name="apply_by" class="form-control" >
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Last Date</label>

                            <div class="col-md-10">
                                <input type="date" name="last_date" class="form-control">
                            </div><!--col-->
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Newspaper Piece</label>

                            <div class="col-md-10">
                                <input type="file" name="newspaper_piece" class="form-control" placeholder="Enter launch Date">
                            </div><!--col-->
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Relevent Logo</label>

                            <div class="col-md-10">
                                <input type="file" name="rel_logo" class="form-control" placeholder="Enter launch Date">
                            </div><!--col-->
                        </div>
                        <!--form-group-->
                        <input type="hidden" name="created_by" value="executive">
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
