@extends('frontend.app')
@section('content')

        <div id="thumbnail-slider">
            <div class="inner">
                <ul>
                    
                    @foreach($cities as $city)
                    <li>
                     <a href="{{url('city/'.$city->id)}}">
                      <div class="container">
                        <img src="{{asset('/storage/app/'.$city->logo)}}" class="thumb">
                        <p style="font-size: 10px;display:block;
        position:absolute;
        top:86px;
        right:8px;
        font:bold 9px/18px Arial;
        color:white;
        width:60px;
        height:18px;
        border:1px solid rgba(255,255,255,0.4);
        background-color:rgba(0,0,0,0.5);
        z-index:2;
        cursor:pointer;        
        text-align:center;">{{$city->title}}</p>
                                              </div>
                                            </a>
                    </li>
                    @endforeach
                    
                </ul>
            </div>
        

        
    </div>
        <div id=wrapper_total>
            <div id="navigate">
               <div style="width: 100%;">
                  <center>
                     <table width=100% class="table table-striped">
                        <tr>
                           <td style="border: #DBE1E6 1px solid;" class="Newspaper_border"><b><span style="color:#325465;"><br/>Date - Day<br/>&nbsp;</b></span></td>
                           <!-- <td style="border: #DBE1E6 1px solid;" class="Newspaper_border"><img alt="Date - Day" src="images/date.jpg" /></td>  -->
                           @foreach($newspapers as $newspaper)
                           <td style="border: #DBE1E6 1px solid; text-align: -webkit-center;
}" class="Newspaper_border"><a href="{{url('newspaper/'.$newspaper->id)}}" ><img alt="Jang" src="{{asset('/storage/app/'.$newspaper->logo)}}" width="50" height="50" /></a></td>
                           @endforeach
                        </tr>
                         <tr>
                           <?php
                           $date = \Carbon\Carbon::today();
                           ?>
                        <td align="center" style="border: #DBE1E6 1px solid;"><b><span style="color:#325465;">{{$date->format('d-m-Y')}}<br/>{{\Carbon\Carbon::today()->format('l')}}</b></span> </td>
                        @foreach($newspapers as $newspaper)
                        <td valign="top" class="Newspaper_border">
                        <!-- <a id="job-link" href="paper-ads.php?type=1&paper=8&date=2018-09-12">Jobs</a><br/> -->
                        <a id="job-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/jobs/'.$date->format('d-m-Y'))}}" @else href="#" @endif>Pakistan Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/admissions/'.$date->format('d-m-Y'))}}" @else href="#" @endif>Abroad Jobs</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/tenders',$date->format('d-m-Y'))}}" @else href="#" @endif>Online Jobs</a>
                        </td>                      
                        @endforeach         
                        </tr>
                         <tr>
                           <?php
                           $date = \Carbon\Carbon::today()->subDays('1');
                           ?>
                        <td align="center" style="border: #DBE1E6 1px solid;"><b><span style="color:#325465;">{{$date->format('d-m-Y')}}<br/>{{\Carbon\Carbon::today()->subDays('1')->format('l')}}</b></span> </td>
                        @foreach($newspapers as $newspaper)
                        <td valign="top" class="Newspaper_border">
                        <!-- <a id="job-link" href="paper-ads.php?type=1&paper=8&date=2018-09-12">Jobs</a><br/> -->
                        <a id="job-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/jobs/'.$date->format('d-m-Y'))}}" @else href="#" @endif>Pakistan Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/admissions/'.$date->format('d-m-Y'))}}" @else href="#" @endif>Abroad Jobs</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/tenders',$date->format('d-m-Y'))}}" @else href="#" @endif>Online Jobs</a>
                        </td>                      
                        @endforeach         
                        </tr>
                        <tr>
                           <?php
                           $date = \Carbon\Carbon::today()->subDays('2');
                           ?>
                        <td align="center" style="border: #DBE1E6 1px solid;"><b><span style="color:#325465;">{{$date->format('d-m-Y')}}<br/>{{\Carbon\Carbon::today()->subDays('2')->format('l')}}</b></span> </td>
                        @foreach($newspapers as $newspaper)
                        <td valign="top" class="Newspaper_border">
                        <!-- <a id="job-link" href="paper-ads.php?type=1&paper=8&date=2018-09-12">Jobs</a><br/> -->
                        <a id="job-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/jobs/'.$date->format('d-m-Y'))}}" @else href="#" @endif>Pakistan Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/admissions/'.$date->format('d-m-Y'))}}" @else href="#" @endif>Abroad Jobs</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/tenders',$date->format('d-m-Y'))}}" @else href="#" @endif>Online Jobs</a>
                        </td>                      
                        @endforeach         
                        </tr>
                        <tr>
                           <?php
                           $date = \Carbon\Carbon::today()->subDays('3');
                           ?>
                        <td align="center" style="border: #DBE1E6 1px solid;"><b><span style="color:#325465;">{{$date->format('d-m-Y')}}<br/>{{\Carbon\Carbon::today()->subDays('3')->format('l')}}</b></span> </td>
                        @foreach($newspapers as $newspaper)
                        <td valign="top" class="Newspaper_border">
                        <!-- <a id="job-link" href="paper-ads.php?type=1&paper=8&date=2018-09-12">Jobs</a><br/> -->
                        <a id="job-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/jobs/'.$date->format('d-m-Y'))}}" @else href="#" @endif>Pakistan Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"@if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/admissions/'.$date->format('d-m-Y'))}}" @else href="#" @endif>Abroad Jobs</a><br/>
                        <a  rel="nofollow"  id="tender-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/tenders',$date->format('d-m-Y'))}}" @else href="#" @endif>Online Jobs</a>
                        </td>                      
                        @endforeach         
                        </tr>
                        <tr>
                           <?php
                           $date = \Carbon\Carbon::today()->subDays('4');
                           ?>
                        <td align="center" style="border: #DBE1E6 1px solid;"><b><span style="color:#325465;">{{$date->format('d-m-Y')}}<br/>{{\Carbon\Carbon::today()->subDays('4')->format('l')}}</b></span> </td>
                        @foreach($newspapers as $newspaper)
                        <td valign="top" class="Newspaper_border">
                        <!-- <a id="job-link" href="paper-ads.php?type=1&paper=8&date=2018-09-12">Jobs</a><br/> -->
                        <a id="job-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/jobs/'.$date->format('d-m-Y'))}}" @else href="#" @endif>Pakistan Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/admissions/'.$date->format('d-m-Y'))}}" @else href="#" @endif>Abroad Jobs</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/tenders',$date->format('d-m-Y'))}}" @else href="#" @endif>Online Jobs</a>
                        </td>                      
                        @endforeach         
                        </tr>
                        <tr>
                           <?php
                           $date = \Carbon\Carbon::today()->subDays('5');
                           ?>
                        <td align="center" style="border: #DBE1E6 1px solid;"><b><span style="color:#325465;">{{$date->format('d-m-Y')}}<br/>{{\Carbon\Carbon::today()->subDays('5')->format('l')}}</b></span> </td>
                        @foreach($newspapers as $newspaper)
                        <td valign="top" class="Newspaper_border">
                        <!-- <a id="job-link" href="paper-ads.php?type=1&paper=8&date=2018-09-12">Jobs</a><br/> -->
                        <a id="job-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/jobs/'.$date->format('d-m-Y'))}}" @else href="#" @endif>Pakistan Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/admissions/'.$date->format('d-m-Y'))}}" @else href="#" @endif>Abroad Jobs</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/tenders',$date->format('d-m-Y'))}}" @else href="#" @endif>Online Jobs</a>
                        </td>                      
                        @endforeach         
                        </tr>
                        <tr>
                           <?php
                           $date = \Carbon\Carbon::today()->subDays('6');
                           ?>
                        <td align="center" style="border: #DBE1E6 1px solid;"><b><span style="color:#325465;">{{$date->format('d-m-Y')}}<br/>{{\Carbon\Carbon::today()->subDays('6')->format('l')}}</b></span> </td>
                        @foreach($newspapers as $newspaper)
                        <td valign="top" class="Newspaper_border">
                        <!-- <a id="job-link" href="paper-ads.php?type=1&paper=8&date=2018-09-12">Jobs</a><br/> -->
                        <a id="job-link" @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/jobs/'.$date->format('d-m-Y'))}}" @else href="#" @endif>Pakistan Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/admissions/'.$date->format('d-m-Y'))}}" @else href="#" @endif>Abroad Jobs</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('search/'.$newspaper->slug.'/tenders',$date->format('d-m-Y'))}}" @else href="#" @endif>Online Jobs</a>
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
               <a href="{{url('newspaper/'.$newspaper->id)}}"><img alt="The News" src="{{asset('/storage/app/'.$newspaper->logo)}}"  /></a>
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
                     <tbody>
                      <?php

                      \App\City::has('add')->chunk(4,function($cities){
                        $c = 1;
                        echo '<tr>';
   foreach($cities as $city){
    $url = url('city/'.$city->id);
       echo '<td><a href="'.$url.'">'.$city->title.'</a></td>';
                        $c++;
   }
   echo '</tr>';
});
                      ?>

                     
                        
                     </tbody>
                  </table>
               </div>
              
               <div id="job-table">
                  <table class="table" style="padding-top:0px;">
                     <caption class="text-center" style="font-weight: bold; font-size: 23px;">Jobs by Category </caption>
                     <tbody>
                      <?php

                      \App\Category::has('add')->chunk(4,function($category){
                        $c = 1;
                        echo '<tr>';
   foreach($category as $cat){
    $url = url('category/'.$cat->id);
       echo '<td><a href="'.$url.'">'.$cat->title.'</a></td>';
   }
   echo '</tr>';
});
                      ?>
                       
                     </tbody>
                  
                  </table>
               </div>
               <br/>
               <div id="job-table">
                  <table class="table" style="padding-top:0px;">
                     <caption class="text-center" style="font-weight: bold; font-size: 23px;">Jobs by Qualification </caption>
                     <tbody>
                      <?php

                      \App\Qualification::has('add')->chunk(4,function($qualification){
                        $c = 1;
                        echo '<tr>';
   foreach($qualification as $qualify){
    $url = url('qualification/'.$qualify->id);
       echo '<td><a href="'.$url.'">'.$qualify->title.'</a></td>';
   }
   echo '</tr>';
});
                      ?>
                     </tbody>
                  </table>
               </div>
               <br/>
                <div id="job-table">
                   
                  <table class="table" style="padding-top:0px;">
                     <caption class="text-center" style="font-weight: bold; font-size: 23px;">Jobs by Type </caption>
                     <tbody>
                      <?php

                      \App\JobType::chunk(4,function($jobType){
                        $c = 1;
                        echo '<tr>';
   foreach($jobType as $type){
    $url = url('type/'.$type->id);
       echo '<td><a href="'.$url.'">'.$type->title.'</a></td>';
   }
   echo '</tr>';
});
                      ?>
                     </tbody>
                  
                  </table>
               </div>
               <div id=clear></div>
               <div class="container">
              <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Pakistan Jobs</a></li>
  <li><a data-toggle="tab" href="#menu1">Abroad Jobs</a></li>
  <li><a data-toggle="tab" href="#menu2">Online Jobs</a></li>
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
        <td><a href="{{url('detail_page/'.$job->id)}}"> {{$job->title}} </a>
         <br> <a href="{{url('company_add/'.$job->company_name)}}"><p style="font-size: 15px">{{$job->company_name}} </p> </a></td>
        <td><a href="{{url('apply_date/'.$job->apply_by)}}"> {{date('d-m-Y', strtotime($job->apply_by))}}</a></td>
        <td><a href="{{url('last_date/'.$job->last_date)}}">{{date('d-m-Y', strtotime($job->last_date))}}</a></td>
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
        @foreach($admissions as $job)
        <tr>
        <td><a href="{{url('detail_page/'.$job->id)}}"> {{$job->title}} </a>
        <br> <a href="{{url('company_add/'.$job->company_name)}}"><p style="font-size: 15px">{{$job->company_name}} </p> </a></td>
        <td><a href="{{url('apply_date/'.$job->apply_by)}}">{{date('d-m-Y', strtotime($job->apply_by))}}</a></td>
        <td><a href="{{url('last_date/'.$job->last_date)}}">{{date('d-m-Y', strtotime($job->last_date))}}</a></td>
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
        @foreach($tenders as $job)
        <tr>
        <td><a href="{{url('detail_page/'.$job->id)}}"> {{$job->title}} </a>
        <br> <a href="{{url('company_add/'.$job->company_name)}}"><p style="font-size: 15px">{{$job->company_name}} </p> </a></td>
        <td><a href="{{url('apply_date/'.$job->apply_by)}}">{{date('d-m-Y', strtotime($job->apply_by))}}</a></td>
        <td><a href="{{url('last_date/'.$job->last_date)}}">{{date('d-m-Y', strtotime($job->last_date))}}</a></td>
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