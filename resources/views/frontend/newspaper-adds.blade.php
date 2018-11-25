@extends('frontend.app')
@section('content')
<div id=wrapper_total>
   <div id="navigate">
      <div id=social>
         <div id=s2s class="soc_lnk">
            <br/>
         </div>
         <script>
            function socialHide(){
            document.getElementsByClassName("soc_lnk")[0].style.display="none";
            }
         </script>
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
      				<option value="jobs">Pakistan Jobs</option>
                  <option value="tendars">Abroad Jobs</option>
                  <option value="admissions">Online Jobs</option>
      			</select>
      		</div>
      		<div class="col-md-3">
      			<input type="button" onclick="searchVal(this)" name="submit" value="submit" class="btn btn-primary">
      		</div>
      	</div>
      </form>
      </div>
      <div id=clear></div>
      <br/>
      <p style="font-size: 16px; font-weight: bold;">{{$news->title}}</p>
      @include('frontend.includes.adsense-square')
         <div id=clear></div>
         <br>

      <div id="featured_latest_job">
        
         <div id=clear></div>
         <br/>
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
                     <td> <img src="{{asset('/storage/app/'.$news->rel_logo)}}" width="50" height="50"> <a href="{{url('detail_page/'.$news->id)}}"> {{$news->title}} </a>
                        <br> <a href="{{url('company_add/'.$news->company_name)}}"><p style="font-size: 15px">{{$news->company_name}} </p> </a></td>
                     <td><a href="{{url('city/'.$news->getCity->id)}}">{{$news->getCity->title}}</a></td>
                     <td><a href="{{url('apply_date/'.$news->created_at->toDateString())}}">{{$news->created_at->format('d-m-Y')}}</a></td>
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
               <a href="{{url('newspaper/'.$newspaper->id)}}"><img alt="The News" src="{{asset('/storage/app/'.$newspaper->logo)}}"  /></a>
               @endforeach
      </div>
      <div id=govt_div2 style="margin-top:5px;clear:right;">
         @include('frontend.includes.adsense-square')
         <br/><br/>
         @include('frontend.includes.adsense-square')
         <br/>
         <br/>
         
         </div>
         <br/>
         <br/>
         <br/><br/>
         
      </div>
      
      <div id=clear></div>
      
   </div>
   <div id=clear></div>
   <br/>
</div>
<script type="text/javascript">
function searchVal(elem){

	var news = $('#newspaper').find(":selected").val();
	var type = $('#job_type').find(":selected").val();
	var date = new Date($('#datepicker').val());
      day = date.getDate();
      month = date.getMonth() + 1;
      year = date.getFullYear();
      var datee = [year,month, day].join('-')
   console.log(datee , news , type   , isNaN(day));
   if(!isNaN(day)){
	window.location = "{{url('/search')}}"+"/"+news+"/"+type+"/"+datee
   }

}
</script>

	


@endsection