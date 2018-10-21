@extends('frontend.layouts.app')

@section('content')
    <div class="row justify-content-center align-items-center mb-3">
        <div class="col col-sm-10 align-self-center">
            <div class="card">
                <div class="card-header">
                    <strong>
                        @lang('navs.frontend.user.account')
                    </strong>
                </div>

                <div class="card-body">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a href="#profile" class="nav-link active" aria-controls="profile" role="tab" data-toggle="tab">@lang('navs.frontend.user.profile')</a>
                            </li>

                            <li class="nav-item">
                                <a href="#edit" class="nav-link" aria-controls="edit" role="tab" data-toggle="tab">@lang('labels.frontend.user.profile.update_information')</a>
                            </li>

                            <li class="nav-item">
                                <a href="#cv" class="nav-link" aria-controls="edit" role="tab" data-toggle="tab">Upload CV</a>
                            </li>

                            @if($logged_in_user->canChangePassword())
                                <li class="nav-item">
                                    <a href="#password" class="nav-link" aria-controls="password" role="tab" data-toggle="tab">@lang('navs.frontend.user.change_password')</a>
                                </li>
                            @endif
                             @if($logged_in_user->canChangePassword())
                                <li class="nav-item">
                                    <a href="#detail" class="nav-link" aria-controls="password" role="tab" data-toggle="tab">Add Detail</a>
                                </li>
                            @endif
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active pt-3" id="profile" aria-labelledby="profile-tab">
                                @include('frontend.user.account.tabs.profile')
                            </div><!--tab panel profile-->

                            <div role="tabpanel" class="tab-pane fade show pt-3" id="edit" aria-labelledby="edit-tab">
                                @include('frontend.user.account.tabs.edit')
                            </div><!--tab panel profile-->

                             <div role="tabpanel" class="tab-pane fade show pt-3" id="cv" aria-labelledby="edit-tab">
                                <div class="table-responsive">
                                    <form method="POST" action="{{url('upload/user/cv')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                    <table class="table table-striped table-hover table-bordered">
                                    <tr>
                                    <th>Upload CV</th>
                                    <td><input type="file" name="file"></td>
                                    </tr>
                                    </table>
                                    <input type="submit" name="submit" class="btn btn-default">
                                    </form>
                                </div>

                            </div>

                            <div role="tabpanel" class="tab-pane fade show pt-3" id="detail" aria-labelledby="edit-tab">
                                <div class="table-responsive">
                                    <form method="POST" action="{{url('upload/user/detail')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                    <table class="table table-striped table-hover table-bordered">
                                    <tr>
                                    <th>Gendar</th>
                                    <td><input type="text" name="gendar" value="{{$logged_in_user->gendar}}"></td>
                                    </tr>
                                    <tr>
                                    <th>Institute</th>
                                    <td><input type="text" name="institute" value="{{$logged_in_user->institution_one}}"></td>
                                    </tr>
                                    <tr>
                                    <th>Degree Title</th>
                                    <td><input type="text" name="degree_title" value="{{$logged_in_user->degree_title_two}}"></td>
                                    </tr>
                                    <tr>
                                    <th>Passing Year</th>
                                    <td><input type="text" name="passing_year" value="{{$logged_in_user->passing_year_two}}"></td>
                                    </tr>
                                    </table>
                                    <input type="submit" name="submit" class="btn btn-default">
                                    </form>
                                </div>

                            </div>

                            @if($logged_in_user->canChangePassword())
                                <div role="tabpanel" class="tab-pane fade show pt-3" id="password" aria-labelledby="password-tab">
                                    @include('frontend.user.account.tabs.change-password')
                                </div><!--tab panel change password-->
                            @endif
                        </div><!--tab content-->
                    </div><!--tab panel-->
                </div><!--card body-->
            </div><!-- card -->
        </div><!-- col-xs-12 -->
    </div><!-- row -->
     <div class="row justify-content-center align-items-center mb-3">
        <div class="col col-sm-10 align-self-center">
            <div class="card">
                <div class="card-header">
                    <strong>
                        Subscriptions
                    </strong>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Subscription Type</th>
                                <th>Subscription Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($subs as $sub)
                            <tr>
                                <td>@if($sub->newspaper) {{$sub->newspaper->title}} @elseif($sub->qualification) {{$sub->qualification->title}} @else {{$sub->category->title}} @endif</td>
                                <td>unsubscribe</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--card body-->
            </div><!-- card -->
        </div><!-- col-xs-12 -->
    </div><!-- row -->
@endsection
