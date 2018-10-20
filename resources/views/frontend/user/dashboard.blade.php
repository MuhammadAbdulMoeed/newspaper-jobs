@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

    <div class="row mb-8">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>
                        <i class="fas fa-tachometer-alt"></i> @lang('navs.frontend.dashboard')
                    </strong>
                </div><!--card-header-->

                <div class="card-body">
                    <div class="row">
                        <div class="col col-sm-4 order-1 order-sm-2  mb-4">
                            <div class="card mb-4 bg-light">

                                <div class="card-body">
                                    <h4 class="card-title">
                                        {{ $logged_in_user->name }}<br/>
                                    </h4>

                                    <p class="card-text">
                                        <small>
                                            <i class="fas fa-envelope"></i> {{ $logged_in_user->email }}<br/>
                                            <i class="fas fa-calendar-check"></i> @lang('strings.frontend.general.joined') {{ timezone()->convertToLocal($logged_in_user->created_at, 'F jS, Y') }}
                                        </small>
                                    </p>

                                    <p class="card-text">

                                        <a href="{{ route('frontend.user.account')}}" class="btn btn-info btn-sm mb-1">
                                            <i class="fas fa-user-circle"></i> @lang('navs.frontend.user.account')
                                        </a>

                                        @can('view backend')
                                            &nbsp;<a href="{{ route('admin.dashboard')}}" class="btn btn-danger btn-sm mb-1">
                                                <i class="fas fa-user-secret"></i> @lang('navs.frontend.user.administration')
                                            </a>
                                        @endcan
                                    </p>
                                </div>
                            </div>

                        </div><!--col-md-4-->

                     
                    </div><!-- row -->
                </div> <!-- card-body -->
            </div><!-- card -->
            <br>
            <div class="card">
                <div class="card-header">
                    <strong>
                        <i class="fas fa-tachometer-alt"></i> Applied Jobs
                    </strong>
                </div><!--card-header-->

                <div class="card-body">
                    <div class="row">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>Sr.No</th>
                                   <th>Job Title</th>
                                   <th>Applied Date</th>
                                   <th>Status</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach($jobs as $job)
                               <tr>
                                   <td>{{$job->id}}</td>
                                   <td>{{$job->getAdds->title}}</td>
                                   <td>{{$job->created_at}}</td>
                                   <td>{{$job->status}}</td>
                               </tr>
                               @endforeach
                           </tbody>
                       </table>

                     
                    </div><!-- row -->
                </div> <!-- card-body -->
            </div><!-- card -->
        </div><!-- row -->
    </div><!-- row -->
@endsection
