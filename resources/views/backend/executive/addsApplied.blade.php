@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.users.management'))

@section('breidcrumb')
<ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>

                                    <li class="breadcrumb-item"><a href="http://localhost:8000/admin/dashboard">Dashboard</a></li>
                                                <li class="breadcrumb-item active">User Management</li>
    </ol>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Adds Managemnet <small class="text-muted">All Adds</small>
                </h4>
            </div><!--col-->

           
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Adds Title</th>
                            <th>NewsPaper Title</th>
                            <th>User Name</th>
                            <th>Applied Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($adds as $add)
                        <tr>
                        <td>{{$add->getAdds->title}}</td>
                        <td>{{$add->getAdds->getNewsPaper->title}}</td>
                        <td> {{$add->getUser->name}}</td>
                        <td>{{$add->created_at}}</td>
                        <td>@if($add->status == "pending") <a href="{{route('admin.ex.adds.status' , $add->id)}}">Pending</a> @else <a href="{{route('admin.ex.adds.status', $add->id)}}">Approved</a>  @endif</td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                   
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
