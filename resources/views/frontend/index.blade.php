@extends('frontend.app')
@section('content')
        <div id=wrapper_total>
            <div id="navigate">
               <div style="width: 100%;">
                  <center>
                     <table width=100% class="table table-striped">
                        <tr>
                           <td style="border: #DBE1E6 1px solid;" class="Newspaper_border"><b><span style="color:#325465;"><br/>Date - Day<br/>&nbsp;</b></span></td>
                           <!-- <td style="border: #DBE1E6 1px solid;" class="Newspaper_border"><img alt="Date - Day" src="images/date.jpg" /></td>  -->
                           @foreach($newspapers as $newspaper)
                           <td style="border: #DBE1E6 1px solid;" class="Newspaper_border"><a href="" ><img alt="Jang" src="{{asset('/storage/app/'.$newspaper->logo)}}" width="50" height="50" /></a></td>
                           @endforeach
                        </tr>
                         <tr>
                           <?php
                           $date = \Carbon\Carbon::today();
                           ?>
                        <td align="center" style="border: #DBE1E6 1px solid;"><b><span style="color:#325465;">{{$date->toDateString()}}<br/>{{\Carbon\Carbon::today()->format('l')}}</b></span> </td>
                        @foreach($newspapers as $newspaper)
                        <td valign="top" class="Newspaper_border">
                        <!-- <a id="job-link" href="paper-ads.php?type=1&paper=8&date=2018-09-12">Jobs</a><br/> -->
                        <a id="job-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/jobs/'.$date->toDateString())}}" @else href="#" @endif>Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/admissions/'.$date->toDateString())}}" @else href="#" @endif>Admissions</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/tenders',$date->toDateString())}}" @else href="#" @endif>Tenders</a>
                        </td>                      
                        @endforeach         
                        </tr>
                         <tr>
                           <?php
                           $date = \Carbon\Carbon::today()->subDays('1');
                           ?>
                        <td align="center" style="border: #DBE1E6 1px solid;"><b><span style="color:#325465;">{{$date->toDateString()}}<br/>{{\Carbon\Carbon::today()->subDays('1')->format('l')}}</b></span> </td>
                        @foreach($newspapers as $newspaper)
                        <td valign="top" class="Newspaper_border">
                        <!-- <a id="job-link" href="paper-ads.php?type=1&paper=8&date=2018-09-12">Jobs</a><br/> -->
                        <a id="job-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/jobs/'.$date->toDateString())}}" @else href="#" @endif>Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/admissions/'.$date->toDateString())}}" @else href="#" @endif>Admissions</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/tenders',$date->toDateString())}}" @else href="#" @endif>Tenders</a>
                        </td>                      
                        @endforeach         
                        </tr>
                        <tr>
                           <?php
                           $date = \Carbon\Carbon::today()->subDays('2');
                           ?>
                        <td align="center" style="border: #DBE1E6 1px solid;"><b><span style="color:#325465;">{{$date->toDateString()}}<br/>{{\Carbon\Carbon::today()->subDays('2')->format('l')}}</b></span> </td>
                        @foreach($newspapers as $newspaper)
                        <td valign="top" class="Newspaper_border">
                        <!-- <a id="job-link" href="paper-ads.php?type=1&paper=8&date=2018-09-12">Jobs</a><br/> -->
                        <a id="job-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/jobs/'.$date->toDateString())}}" @else href="#" @endif>Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/admissions/'.$date->toDateString())}}" @else href="#" @endif>Admissions</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/tenders',$date->toDateString())}}" @else href="#" @endif>Tenders</a>
                        </td>                      
                        @endforeach         
                        </tr>
                        <tr>
                           <?php
                           $date = \Carbon\Carbon::today()->subDays('3');
                           ?>
                        <td align="center" style="border: #DBE1E6 1px solid;"><b><span style="color:#325465;">{{$date->toDateString()}}<br/>{{\Carbon\Carbon::today()->subDays('3')->format('l')}}</b></span> </td>
                        @foreach($newspapers as $newspaper)
                        <td valign="top" class="Newspaper_border">
                        <!-- <a id="job-link" href="paper-ads.php?type=1&paper=8&date=2018-09-12">Jobs</a><br/> -->
                        <a id="job-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/jobs/'.$date->toDateString())}}" @else href="#" @endif>Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"@if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/admissions/'.$date->toDateString())}}" @else href="#" @endif>Admissions</a><br/>
                        <a  rel="nofollow"  id="tender-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/tenders',$date->toDateString())}}" @else href="#" @endif>Tenders</a>
                        </td>                      
                        @endforeach         
                        </tr>
                        <tr>
                           <?php
                           $date = \Carbon\Carbon::today()->subDays('4');
                           ?>
                        <td align="center" style="border: #DBE1E6 1px solid;"><b><span style="color:#325465;">{{$date->toDateString()}}<br/>{{\Carbon\Carbon::today()->subDays('4')->format('l')}}</b></span> </td>
                        @foreach($newspapers as $newspaper)
                        <td valign="top" class="Newspaper_border">
                        <!-- <a id="job-link" href="paper-ads.php?type=1&paper=8&date=2018-09-12">Jobs</a><br/> -->
                        <a id="job-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/jobs/'.$date->toDateString())}}" @else href="#" @endif>Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/admissions/'.$date->toDateString())}}" @else href="#" @endif>Admissions</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/tenders',$date->toDateString())}}" @else href="#" @endif>Tenders</a>
                        </td>                      
                        @endforeach         
                        </tr>
                        <tr>
                           <?php
                           $date = \Carbon\Carbon::today()->subDays('5');
                           ?>
                        <td align="center" style="border: #DBE1E6 1px solid;"><b><span style="color:#325465;">{{$date->toDateString()}}<br/>{{\Carbon\Carbon::today()->subDays('5')->format('l')}}</b></span> </td>
                        @foreach($newspapers as $newspaper)
                        <td valign="top" class="Newspaper_border">
                        <!-- <a id="job-link" href="paper-ads.php?type=1&paper=8&date=2018-09-12">Jobs</a><br/> -->
                        <a id="job-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/jobs/'.$date->toDateString())}}" @else href="#" @endif>Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/admissions/'.$date->toDateString())}}" @else href="#" @endif>Admissions</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/tenders',$date->toDateString())}}" @else href="#" @endif>Tenders</a>
                        </td>                      
                        @endforeach         
                        </tr>
                        <tr>
                           <?php
                           $date = \Carbon\Carbon::today()->subDays('6');
                           ?>
                        <td align="center" style="border: #DBE1E6 1px solid;"><b><span style="color:#325465;">{{$date->toDateString()}}<br/>{{\Carbon\Carbon::today()->subDays('6')->format('l')}}</b></span> </td>
                        @foreach($newspapers as $newspaper)
                        <td valign="top" class="Newspaper_border">
                        <!-- <a id="job-link" href="paper-ads.php?type=1&paper=8&date=2018-09-12">Jobs</a><br/> -->
                        <a id="job-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/jobs/'.$date->toDateString())}}" @else href="#" @endif>Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/admissions/'.$date->toDateString())}}" @else href="#" @endif>Admissions</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/tenders',$date->toDateString())}}" @else href="#" @endif>Tenders</a>
                        </td>                      
                        @endforeach         
                        </tr>
                        <!--
                           -->
                     </table>
                     <h3><a class="my-success" href="{{route('frontend.calendar.view')}}"> View more newspapers & jobs by date</a></h3>
               </div>

               <img src="{{asset('public/images.jpg')}}" width="100%" height="200px">

               <!--
                  <button style="width:100%;" id="m-btn">Click to view more dates<img src="images/nav_table.png" style="height: 25px;" /></button>
                  
                   -->
               </center>
            </div>
            <div id="newspaper">
               <br/>
               <p>Latest Newspaper Ads</p>
               <br/>
               @foreach($newspapers as $newspaper)
               <a href=><img alt="The News" src="{{asset('/storage/app/'.$newspaper->logo)}}"  /></a>
               @endforeach
            </div>
            <div id="govt_div2" style="margin-top:5px;clear:right;">

<br>



                </div>

            <div id="featured_latest_job">
               <div id=clear></div>
               <p>
               <h1>Latest jobs in Pakistan ads</h1>
               </p> 
              <br/>

               <div id=clear></div>
               <br/>
               <div id="job-table">
                  <table class="table" style="padding-top:0px;">
                     <caption class="text-center" style="font-weight: bold; font-size: 23px;">Jobs by City</caption>
                     <thead>
                        <tr>
                           <th>City</th>
                           <th>View Add</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($cities as $city)
                        <tr>
                           <td><a href="{{url('city/'.$city->id)}}">{{$city->title}}</a></td>
                           <td><a href="{{url('/city/'.$city->id)}}">View</a></td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  {{$cities->appends(array_except(Request::query(), 'cities'))->links()}}
               </div>
              
               <div id="job-table">
                  <table class="table" style="padding-top:0px;">
                     <caption class="text-center" style="font-weight: bold; font-size: 23px;">Jobs by Category </caption>
                     <thead>
                        <tr>
                           <th>Category</th>
                           <th>View Add</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($category as $cat)
                        <tr>
                           <td><a href="{{url('category/'.$cat->id)}}">{{$cat->title}}</a></td>
                           <td><a href="{{url('/category/'.$cat->id)}}">View</a></td>
                        </tr>
                        @endforeach
                     </tbody>
                  
                  </table>
                  {{$category->appends(array_except(Request::query(), 'categories'))->links()}}
               </div>
               <br/>
               <div id="job-table">
                  <table class="table" style="padding-top:0px;">
                     <caption class="text-center" style="font-weight: bold; font-size: 23px;">Jobs by Qualification </caption>
                     <thead>
                        <tr>
                           <th>Qualification</th>
                           <th>View Add</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($qualification as $qualify)
                        <tr>
                           <td><a href="{{url('qualification/'.$qualify->id)}}">{{$qualify->title}}</a></td>
                           <td><a href="{{url('/qualification/'.$qualify->id)}}">View</a></td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  {{$qualification->appends(array_except(Request::query(), 'qualification'))->links()}}
               </div>
               <br/>
                <div id="job-table">
                   
                  <table class="table" style="padding-top:0px;">
                     <caption class="text-center" style="font-weight: bold; font-size: 23px;">Jobs by Type </caption>
                     <thead>
                        <tr>
                           <th>Types</th>
                           <th>View Add</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($jobType as $type)
                        <tr>
                           <td><a href="{{url('jobtype/'.$type->id)}}">{{$type->job_type_title}}</a></td>
                           <td><a href="{{url('/jobtype/'.$type->id)}}">View</a></td>
                        </tr>
                        @endforeach
                     </tbody>
                  
                  </table>
                  {{$jobType->appends(array_except(Request::query(), 'jobtypes'))->links()}}
               </div>
               <div id=clear></div>
               <div class="container">
              <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Jobs</a></li>
  <li><a data-toggle="tab" href="#menu1">Admissions</a></li>
  <li><a data-toggle="tab" href="#menu2">Tendars</a></li>
</ul>
</div>
<div class="tab-content">
   <div id="home" class="tab-pane fade in active">
    <table class="table table-striped">
     <thead>
      <tr>
        <th>title</th>
        <th>Apply By</th>
        <th>Last Date</th>
        <th>City</th>
        <th>View</th>
      </tr>
     </thead>
     <tbody>
        @foreach($jobs as $job)
        <tr>
        <td>{{$job->title}}
         <br> <a href="{{url('company_add/'.$job->company_name)}}"><p style="font-size: 15px">{{$job->company_name}} </p> </a></td>
        <td><a href="{{url('apply_date/'.$job->apply_by)}}"> {{$job->apply_by}}</a></td>
        <td><a href="{{url('last_date/'.$job->last_date)}}">{{$job->last_date}}</a></td>
        <td>@if($job->getCity) <a href="{{url('city/'.$job->getCity->id)}}">{{$job->getCity->title}}</a>@endif</td>
        <td><a href="{{url('detail_page/'.$job->id)}}">View</a></td>
         </tr>
        @endforeach
     </tbody>

  </table>
  {{$jobs->appends(array_except(Request::query(), 'jobs'))->links()}}
  </div>
  <div id="menu1" class="tab-pane fade">
    <table class="table table-striped">
     <thead>
      <tr>
        <th>title</th>
        <th>Apply By</th>
        <th>Last Date</th>
        <th>City</th>
        <th>View</th>
      </tr>
     </thead>
     <tbody>
        @foreach($tenders as $job)
        <tr>
        <td>{{$job->title}}
        <br> <a href="{{url('company_add/'.$job->company_name)}}"><p style="font-size: 15px">{{$job->company_name}} </p> </a></td>
        <td><a href="{{url('apply_date/'.$job->apply_by)}}">{{$job->apply_by}}</a></td>
        <td><a href="{{url('last_date/'.$job->last_date)}}">{{$job->last_date}}</a></td>
        <td><a href="{{url('city/'.$job->getCity->id)}}">{{$job->getCity->title}}</a></td>
        <td><a href="{{url('detail_page/'.$job->id)}}">View</a></td>
         </tr>
        @endforeach
     </tbody>
  </table>
  {{$tenders->appends(array_except(Request::query(), 'tenders'))->links()}}
</div>
  <div id="menu2" class="tab-pane fade">
     <table class="table table-striped">
     <thead>
      <tr>
        <th>title</th>
        <th>Apply By</th>
        <th>Last Date</th>
        <th>City</th>
        <th>View</th>
      </tr>
     </thead>
     <tbody>
        @foreach($admissions as $job)
        <tr>
        <td>{{$job->title}}
        <br> <a href="{{url('company_add/'.$job->company_name)}}"><p style="font-size: 15px">{{$job->company_name}} </p> </a></td>
        <td><a href="{{url('apply_date/'.$job->apply_by)}}">{{$job->apply_by}}</a></td>
        <td><a href="{{url('last_date/'.$job->last_date)}}">{{$job->last_date}}</a></td>
        <td><a href="{{url('city/'.$job->getCity->id)}}">{{$job->getCity->title}}</a></td>
        <td><a href="{{url('detail_page/'.$job->id)}}">View</a></td>
         </tr>
        @endforeach
     </tbody>
  </table>
  {{$admissions->appends(array_except(Request::query(), 'admissions'))->links()}}
</div>
</div>
</div>
</br>
<div id="newspaper">
               <div id="calendar2"></div>
               <div id=clear></div>
               <br/>
               <center>
                  <h3> <a class="my-success" href="{{route('frontend.calendar.view')}}"> Click to view more Dates</a></h3>
               </center>
            </div>
            <br/>
            <div id=clear></div>
         </div>
         <div id=clear></div>
      </div>

      
@endsection