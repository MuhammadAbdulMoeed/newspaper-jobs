<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Profile</th>
            <td><img src="{{ asset($logged_in_user->picture) }}" class="user-profile-image" /></td>
        </tr>
        <tr>
            <th>@lang('labels.frontend.user.profile.name')</th>
            <td>{{ $logged_in_user->name }}</td>
        </tr>
        <tr>
            <th>@lang('labels.frontend.user.profile.email')</th>
            <td>{{ $logged_in_user->email }}</td>
        </tr>
        <tr>
            <th>@lang('labels.frontend.user.profile.created_at')</th>
            <td>{{ timezone()->convertToLocal($logged_in_user->created_at) }} ({{ $logged_in_user->created_at->diffForHumans() }})</td>
        </tr>
        <tr>
            <th>@lang('labels.frontend.user.profile.last_updated')</th>
            <td>{{ timezone()->convertToLocal($logged_in_user->updated_at) }} ({{ $logged_in_user->updated_at->diffForHumans() }})</td>
        </tr>
        <tr>
            <th>My CV</th>
            <td>@if($logged_in_user->cv) <a href="{{url('donwload-file')}}">Download CV</a> @else CV-Not Found @endif</td>
        </tr>
    </table>
</div>
