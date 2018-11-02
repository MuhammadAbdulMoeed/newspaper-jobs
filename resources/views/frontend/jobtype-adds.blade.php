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
      </div>
      <div id=clear></div>
      <br/>
      <img src="{{asset('public/images.jpg')}}" width="100%" height="200px">
         <div id=clear></div>
         <br>
      <div id="featured_latest_job">
         <p> Express Jobs Ads 
         <p style="font-size:1em; color:black; font-weight: 100;">Latest Express newspaper jobs ads today and archive see all carrer classifieds form Daily Express epaper at one place . Express jobs are updated daily and provided here with company name and job title.  </p>
         <div id=clear></div>
         <br/>
         <div id="job-table">
            <table class="table">
               <thead>
                  <tr>
                     <th>Title</th>
                     <th>City</th>
                     <th>Apply Date</th>
                     <th>Last Date</th>
                     <th>Apply Now</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($newspaper as $news)
                  <tr>
                     <td>{{$news->title}}</td>
                     <td><a href="{{url('city/'.$news->getCity->id)}}">{{$news->getCity->title}}</a></td>
                     <td><a href="{{url('apply_date/'.$news->apply_by)}}">
{{$news->apply_by}}</a></td>
                     <td><a href="{{url('last_date/'.$news->last_date)}}">{{$news->last_date}}</a></td>
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
         <br/><br/>
         
      </div>
      <div id=clear></div>
      <h3 color=#019875>About Express Jobs / Careers:</h3>
      <p itemprop="description" color=#019875 style="font-size:1em;"> Express newspaper job ads printed in all edition of daily Express tribune and its epaper website express.com.pk . We at PaperPk believes that all rights are reserved by Express and the advertiser company for the images scanned or saved and will be removed if both company and Express asked us to do so.
         <br/><br/> Express newspaper mostly covers abroad jobs or manpower or overseas employment companies ads . Paperpk covers all those jobs ads in Todat newspaper as weel as complete previous archive.
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