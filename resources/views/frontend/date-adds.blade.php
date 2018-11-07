@extends('frontend.app')
@section('content')
<div id=wrapper_total>
   <div id="navigate">
      <div id=left-ad-social style="position: absolute; width: 125px; float: left; top: -95px; left: -125px; z-index: 1; clear: both;">
         <div id="s2s">
            <!--  <img src=http://islamictiming.com/img/ad.jpg width=125px />  -->
         </div>
      </div>
      <div class="container">
         <form method="POST">
         <div class="row">
            <div class="col-md-3">
               <select class="form-control" id="newspaper" required="required">
                  @foreach($newspapers as $news)
                  <option value="{{$news->slug}}">{{$news->title}}</option>
                  @endforeach
               </select>
            </div>
            <div class="col-md-3" id="date">
               <input type="date" name="date" id="datepicker" class="form-control" required="required">
            </div>
            <div class="col-md-3">
               <select class="form-control" id="job_type" required="required">
                  <option value="jobs">Jobs</option>
                  <option value="tendars">Tendars</option>
                  <option value="admissions">Admissions</option>
               </select>
            </div>
            <div class="col-md-3">
               <input type="button" onclick="searchVal(this)" name="submit" value="submit" class="btn btn-primary">
            </div>
         </div>
      </form>
      <br/>
       <img src="{{asset('public/images.jpg')}}" width="100%" height="200px">
      </div>
      <div id=clear></div>
      <div id="single-paper-page-banner">
         <h2 itemprop="name">{{$paper->title}}</h2>
         <div id=clear></div>
          <a href="{{url('user-scribe-news/'.$paper->id)}}">Subscribe</a>
      </div>
      <div id="featured_latest_job">
         <p>{{$paper->title}} 
         <p style="font-size:1em; color:black; font-weight: 100;">{{$paper->title}}</p>
         <div id=clear></div>
         <div id="job-table">
            <table class="table">
               <thead>
                  <tr>
                     <th>Title</th>
                     <th>City</th>
                     <th>Date</th>
                     <th>Apply Now</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($newspaper as $news)
                  <tr>
                     <td>{{$news->title}}</td>
                     <td><a href="{{url('city/'.$news->getCity->id)}}">{{$news->getCity->title}}</a></td>
<td><a href="{{url('apply_date/'.$news->created_at->toDateString())}}">{{$news->created_at->toDateString()}}</a></td>
                     @if($news->created_by == "executive")
                     <td><a href="{{url('apply_job/'.$news->id)}}">Apply Now</a></td>
                     @else
                     <td><a href="{{url('detail_page/'.$news->id)}}">View Detail</a></td>
                     @endif
                  </tr>
                  @endforeach
               </tbody>
            </table>
            <br/>
            <div id=clear></div>
            <br/>
         </div>
      </div>
      <div id="newspaper" style="margin-top:5px;clear: right;">
         <div id=clear></div>
         <br/>
         
          @foreach($newspapers as $newspaper)
               <a href=><img alt="The News" src="{{asset('/storage/app/'.$newspaper->logo)}}"  /></a>
               @endforeach
      </div>
      <div id=govt_div2 style="margin-top:5px;clear:right;">
         <a href=""><img src="{{asset('public/cv.jpg')}}"/></a>
         <br/><br/>
         <a href=""><img src="{{asset('public/cv.jpg')}}" width="300"/></a>
         <br/>
         <br/>
         
         </div>
         <br/>
         <br/>
      <div id=clear></div>
      <h3 color=#019875>About {{$paper->title}}:</h3>
      <p itemprop="description" color=#019875 style="font-size:1em;"><img itemprop="primaryImageOfPage" style="border-radius:0px;max-width:200px;width:80px;" align=left src="{{asset('/storage/app/'.$paper->logo)}}"  /> {{$paper->description}}
      </p>
      <div id=clear></div>
   </div>
   <div id=clear></div>
   <br/>
</div>
<script type="text/javascript">
function searchVal(elem){

	var news = $('#newspaper').find(":selected").text();
	var type = $('#job_type').find(":selected").text();
	var date = new Date($('#datepicker').val());
      day = date.getDate();
      month = date.getMonth() + 1;
      year = date.getFullYear();
      var datee = [year, day, month].join('-')
   console.log(datee , news , type   , isNaN(day));
   if(!isNaN(day)){
	window.location = "{{url('/')}}"+"/"+news+"/"+type+"/"+datee
   }

}
</script>

	


@endsection