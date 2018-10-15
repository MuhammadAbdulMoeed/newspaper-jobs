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
    <form class="form-horizontal" action="{{route('admin.adds.update' , $add->id)}}" method="POST" enctype="multipart/form-data">
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
                                <input type="text" name="adds_title" class="form-control" placeholder="Enter Adds" value="{{$add->title}}">
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Newspaper</label>

                            <div class="col-md-10">
                                <select name="newspaper_id" class="form-control">
                                    <option>Select NewsPaper</option>
                                    @foreach($newspaper as $data)
                                    <option @if($data->id == $add->newspaper_id) selected @endif value="{{$data->id}}">{{$data->title}}</option>
                                    @endforeach
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Qualifications</label>

                            <div class="col-md-10">
                                <select name="qualification_id" class="form-control">
                                    <option>Select Qualification</option>
                                    @foreach($qualification as $data)
                                    <option @if($data->id == $add->qualification_id) selected @endif value="{{$data->id}}">{{$data->title}}</option>
                                    @endforeach
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">City</label>

                            <div class="col-md-10">
                                <select name="city_id" class="form-control">
                                    <option value="null">Select City</option>
                                    @foreach($city as $data)
                                    <option @if($data->id == $add->city_id) selected @endif value="{{$data->id}}">{{$data->title}}</option>
                                    @endforeach
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Category</label>

                            <div class="col-md-10">
                                <select name="category_id" class="form-control">
                                    <option>Select Category</option>
                                    @foreach($category as $data)
                                    <option @if($data->id == $add->category_id) selected @endif value="{{$data->id}}">{{$data->title}}</option>
                                    @endforeach
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Job Type</label>

                            <div class="col-md-10">
                                <select name="job_type_id" class="form-control">
                                    <option>Select Job Type</option>
                                    @foreach($jobType as $data)
                                    <option @if($data->id == $add->job_type_id) selected @endif value="{{$data->id}}">{{$data->job_type_title}}</option>
                                    @endforeach
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Add Type</label>

                            <div class="col-md-10">
                                <select name="add_types" class="form-control">
                                    <option value="jobs">Select Add Type</option>
                                    <option @if("jobs" == $add->type) selected @endif value="jobs">Jobs</option>
                                    <option @if("tenders" == $add->type) selected @endif value="tenders">Tendars</option>
                                    <option @if("admissions" == $add->type) selected @endif value="admissions">Addmissions</option>
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Total Positions</label>
                            <div class="col-md-10">
                            <input type="text" name="total_pos" class="form-control" placeholder="Total Positions" value="{{$add->total_pos}}">
                            </div>
                            
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Company Name</label>
                            <div class="col-md-10">
                            <input type="text" name="company_name" class="form-control" placeholder="Company Name" value="{{$add->company_name}}">
                            </div>
                            
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Company Abbrevation</label>
                            <div class="col-md-10">
                            <input type="text" name="company_abbrevation" class="form-control" placeholder="Company Abbrevation" value="{{$add->company_abbrevation}}">
                            </div>
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Job Location</label>
                            <div class="col-md-10">
                            <input type="text" name="job_loc" class="form-control" placeholder="Job Location" value="{{$add->job_loc}}">
                            </div>
                        </div><!--form-group-->
                         <div class="form-group row">
                            <label class="col-md-2 form-control-label">Gendar</label>
                            <div class="col-md-10">
                            <input type="text" name="gendar" class="form-control" placeholder="Gendar" value="{{$add->gender}}">
                            </div>
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Salary</label>
                            <div class="col-md-10">
                            <input type="text" name="salary" class="form-control" placeholder="Salary" value="{{$add->salary}}">
                            </div>
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Experience</label>
                            <div class="col-md-10">
                            <input type="text" name="experience" class="form-control" placeholder="Experience" value="{{$add->experience}}">
                            </div>
                        </div><!--form-group-->
                         <div class="form-group row">
                            <label class="col-md-2 form-control-label">Age Limit</label>
                            <div class="col-md-10">
                            <input type="text" name="age_limit" class="form-control" placeholder="Age Limit" value="{{$add->age_limit}}">
                            </div>
                        </div><!--form-group-->
                         <div class="form-group row">
                            <label class="col-md-2 form-control-label">Working Hours</label>
                            <div class="col-md-10">
                            <input type="text" name="work_hours" class="form-control" placeholder="Working hours" value="{{$add->working_hours}}">
                            </div>
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Skills</label>
                            <div class="col-md-10">
                            <input type="text" name="skills" class="form-control" placeholder="skills" value="{{$add->skills}}">
                            </div>
                        </div><!--form-group-->
                         <div class="form-group row">
                            <label class="col-md-2 form-control-label">Contact Number</label>
                            <div class="col-md-10">
                            <input type="text" name="contact_num" class="form-control" placeholder="Contact Number" value="{{$add->contact_number}}">
                            </div>
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Job Address</label>
                            <div class="col-md-10">
                            <input type="text" name="job_address" class="form-control" placeholder="Job Address" value="{{$add->address}}">
                            </div>
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Contact Email</label>
                            <div class="col-md-10">
                            <input type="text" name="contact_email" class="form-control" placeholder="Contact Email" value="{{$add->job_email}}">
                            </div>
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Minimum Requirements</label>

                            <div class="col-md-10">
                                <input type="text" name="min_req" class="form-control" placeholder="Enter Requirements" value="{{$add->minimum_requirements}}">
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Description</label>

                            <div class="col-md-10">
                                <textarea name="description">{{$add->description}}</textarea>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Apply By Date</label>

                            <div class="col-md-10">
                                <input type="date" name="apply_by" class="form-control" value="{{$add->apply_by}}">
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Last Date</label>

                            <div class="col-md-10">
                                <input type="date" name="last_date" class="form-control" value="{{$add->last_date}}">
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
