@extends('frontend.app')
@section('content')
<link rel="stylesheet" href="{{asset('css/includes/fullcalendar.print.min.css')}}" />
        <div id=wrapper_total>
            <div id="navigate">
               <div id=social>
                  <!-- <div id=s2s class="soc_lnk">
                     <br/>
                     
                     <a  onclick="socialHide()">x</a>
                     <a href="https://www.facebook.com/paperpkDotcom/"><img title="Facebook" src="pk_img/fb_logo.png" alt="Facebook" width="100%"  /></a>
                     <a href="https://twitter.com/paperpk"><img title="Twitter" src="pk_img/twitter_logo.png" alt="Twitter" width="100%"  /></a>
                     <a href="https://pk.linkedin.com/in/faheem-mumtaz-27bab8105"><img title="Linkedin" src="pk_img/in_logo.png" alt="Linkedin" width="100%"  /></a>
                     <a href="https://feedburner.google.com/fb/a/mailverify?uri=paperpk/blog"><img title="Subscribe" src="pk_img/s_logo.png" alt="Subscribe" width="100%"  /></a>
                     
                     </div> -->
                  <script>
                     function socialHide(){
                     document.getElementsByClassName("soc_lnk")[0].style.display="none";
                     }
                  </script>
               </div>
               <div style="width: 100%;">
                  <center>
                     <table width=100% class="table table-striped">
                        <tr>
                           <td style="border: #DBE1E6 1px solid;" class="Newspaper_border"><b><span style="color:#325465;"><br/>Date - Day<br/>&nbsp;</b></span></td>
                           <!-- <td style="border: #DBE1E6 1px solid;" class="Newspaper_border"><img alt="Date - Day" src="images/date.jpg" /></td>  -->
                           @foreach($newspapers as $newspaper)
                           <td style="border: #DBE1E6 1px solid;" class="Newspaper_border"><a href="" ><img alt="Jang" src="images/jung.jpg" /></a></td>
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
                        <a id="job-link" @if($newspaper->slug) href="{{url('/'.$newspaper->slug.'/jobs/'.$date->toDateString())}}" @else href="#" @endif>Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('/'.$newspaper->slug.'/adm/'.$date->toDateString())}}" @else href="#" @endif>Admissions</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('/'.$newspaper->slug.'/ten',$date->toDateString())}}" @else href="#" @endif>Tenders</a>
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
                        <a id="job-link" @if($newspaper->slug) href="{{url('/'.$newspaper->slug.'/jobs/'.$date->toDateString())}}" @else href="#" @endif>Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('/'.$newspaper->slug.'/adm/'.$date->toDateString())}}" @else href="#" @endif>Admissions</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('/'.$newspaper->slug.'/ten',$date->toDateString())}}" @else href="#" @endif>Tenders</a>
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
                        <a id="job-link" href="">Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link" href="https://paperads.pk/admissions/paper-ads.php?type=2&amp;paper=8&amp;date=2018-09-12">Admissions</a><br/>
                        <a  rel="nofollow"  id="tender-link" href="https://paperads.pk/tenders/paper-ads.php?type=3&amp;paper=8&amp;date=2018-09-12">Tenders</a>
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
                        <a id="job-link" @if($newspaper->slug) href="{{url('/'.$newspaper->slug.'/jobs/'.$date->toDateString())}}" @else href="#" @endif>Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('/'.$newspaper->slug.'/adm/'.$date->toDateString())}}" @else href="#" @endif>Admissions</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('/'.$newspaper->slug.'/ten',$date->toDateString())}}" @else href="#" @endif>Tenders</a>
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
                        <a id="job-link" @if($newspaper->slug) href="{{url('/'.$newspaper->slug.'/jobs/'.$date->toDateString())}}" @else href="#" @endif>Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('/'.$newspaper->slug.'/adm/'.$date->toDateString())}}" @else href="#" @endif>Admissions</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('/'.$newspaper->slug.'/ten',$date->toDateString())}}" @else href="#" @endif>Tenders</a>
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
                        <a id="job-link" @if($newspaper->slug) href="{{url('/'.$newspaper->slug.'/jobs/'.$date->toDateString())}}" @else href="#" @endif>Jobs</a><br/>
                        <a  rel="nofollow" id="admission-link"  @if($newspaper->slug) href="{{url('/'.$newspaper->slug.'/adm/'.$date->toDateString())}}" @else href="#" @endif>Admissions</a><br/>
                        <a  rel="nofollow"  id="tender-link"  @if($newspaper->slug) href="{{url('/'.$newspaper->slug.'/ten',$date->toDateString())}}" @else href="#" @endif>Tenders</a>
                        </td>                      
                        @endforeach         
                        </tr>
                        <!--
                           -->
                     </table>
                     <h3><a class="my-success" href="{{route('frontend.calendar.view')}}"> View more newspapers & jobs by date</a></h3>
               </div>
               <!--
                  <button style="width:100%;" id="m-btn">Click to view more dates<img src="images/nav_table.png" style="height: 25px;" /></button>
                  
                   -->
               </center>
            </div>
            <div id="newspaper">
               <script async src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
               <!-- Paperpk job city labove and bottom list -->
               <ins class="adsbygoogle"
                  style="display:block"
                  data-ad-client="ca-pub-6975300866830988"
                  data-ad-slot="2205434093"
                  data-ad-format="auto"></ins>
               <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
               </script>  
               <br/>
               <img alt=" " src="pk_img/star_logo.png" style="width:30px;height:30px;"  align=left  />
               <p>Latest Newspaper Ads</p>
               <br/>
               <a href=><img alt="The News" src="pk_img/thenews.png"  /></a>
               <a href=><img alt="The Nation" src="pk_img/thenation.png"  /></a>
               <a href=><img alt="Dawn" src="pk_img/dawn.png"  /></a>
               <a href=><img alt="Jang" src="images/jung.jpg"  /></a>
               <a href=><img alt="Express" src="pk_img/express.png"  /></a>
               <a href=><img alt="NawaiWaqt" src="pk_img/nawaiwaqt.png"  /></a>
               <a href=><img alt="Daily Aaj" src="pk_img/aaj.png"  /></a>
               <a href=><img alt="Mashriq" src="pk_img/mashriq.png"  /></a>
               <a href=><img alt="Nai Baat" src="pk_img/naibaat.png"  /></a>
               <a href=><img alt="Dunya" src="pk_img/dunya.png"  /></a>
               <a href=><img alt="Kawish" src="pk_img/kawish.png"  /></a>
               <a href=><img alt="Khabrain" src="pk_img/khabrain.png"  /></a>
            </div>
            <div id="featured_latest_job">
               <div id=clear></div>
               <p>
               <h1><img alt="" src="pk_img/featured_job_logo.png" align=left  />Latest jobs in Pakistan ads</h1>
               </p> 
               If you are looking for jobs in Pakistan then Paperpk jobs portal is the best place to start your search. We promice to deliver you the multiple options for jobs according to your qualification , skills and experince 
               <script async src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
               <!-- top links -->
               <ins class="adsbygoogle"
                  style="display:block"
                  data-ad-client="ca-pub-6975300866830988"
                  data-ad-slot="9847020896"
                  data-ad-format="link"></ins>
               <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
               </script> <br/>
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
                           <td>{{$city->title}}</td>
                           <td><a href="#">View</a></td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
               <!--    
                  <div id="featured_latest_job">
                  
                   <img src="pk_img/city_logo.png"  align=left /><p>Jobs by Titles 
                  
                  <a href="all-job-title.php" class= "my-success" >View all </a></p>
                  
                  
                  
                  
                  </div>            
                  
                  
                  
                  <div id="job-table">
                  
                    <table class="table" style="padding-top:0px;">
                  
                  <tbody>
                  
                  <tr>
                  
                  <td><a href="job-title-list.php?title=Teacher">Teacher</a></td>
                  <td><a href="/job/title/distributor-staff_11111">Distributor Staff</a></td>    
                  <td><a href="/job/title/chief-resident-engineer_8916">Chief Resident Engineer</a></td>    
                  <td><a href="/job/title/fgdf_14911">fgdf</a></td>    
                  <td><a href="/job/title/sales-executive-modern_17736">Sales Executive Modern</a></td>    
                  </tr><tr><td><a href="/job/title/female-marketing-officer_3541">Female Marketing Officer</a></td>    
                  <td><a href="/job/title/principal-director_3378">Principal/Director</a></td>    
                  <td><a href="/job/title/suveyor_11740">Suveyor</a></td>    
                  <td><a href="/job/title/assistant-news-editor_526">Assistant News Editor</a></td>    
                  </tr><tr><td><a href="/job/title/urban-planner-designer-town-planner_10229">Urban Planner Designer & Town Planner</a></td>    
                  <td><a href="/job/title/csr-tsr_3434">CSR/TSR</a></td>    
                  <td><a href="/job/title/content-coordinator_7078">Content Coordinator</a></td>    
                  <td><a href="/job/title/flat-catering-officer_15488">Flat Catering Officer</a></td>    
                  </tr><tr>
                  </tr>
                  
                  </tbody>
                  
                  </table>
                  
                  
                  </div>
                  -->
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
                           <td>{{$cat->title}}</td>
                           <td><a href="#">View</a></td>
                        </tr>
                        @endforeach
                     </tbody>
                  
                  </table>
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
                           <td>{{$qualify->title}}</td>
                           <td><a href="#">View</a></td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
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
                           <td>{{$type->job_type_title}}</td>
                           <td><a href="#">View</a></td>
                        </tr>
                        @endforeach
                     </tbody>
                  
                  </table>
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
        <td>{{$job->title}}</td>
        <td>{{$job->apply_by}}</td>
        <td>{{$job->last_date}}</td>
        <td>{{$job->getCity->title}}</td>
        <td><a href="#">View</a></td>
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
        <td>{{$job->title}}</td>
        <td>{{$job->apply_by}}</td>
        <td>{{$job->last_date}}</td>
        <td>{{$job->getCity->title}}</td>
        <td><a href="#">View</a></td>
         </tr>
        @endforeach
     </tbody>
  </table>
  {{$tenders->links()}}
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
        <td>{{$job->title}}</td>
        <td>{{$job->apply_by}}</td>
        <td>{{$job->last_date}}</td>
        <td>{{$job->getCity->title}}</td>
        <td><a href="#">View</a></td>
         </tr>
        @endforeach
     </tbody>
  </table>
  {{$admissions->links()}}
</div>
</div>
</div>
<div id="newspaper">
               <div id="calendar2"></div>
               <div id=clear></div>
               <br/>
               <center>
                  <h3> <a class="my-success" href="calender-list.html"> Click to view more Dates</a></h3>
               </center>
            </div>
            <div id=govt_div2 style="margin-top:5px;clear:right;">
               <br/>
               <iframe width="300" height="250" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><a href=""><img src="Ads/site/img/govt_logo.png"/></a>
               <br/><br/>
               <a href="https://cvformats.com/"><img src="Ads/site/img/cv.jpg" width="300"/></a>
               <br/>
               <br/>
               <"><img src="Ads/site/img/subscribe.jpg" width="300"/></a>
               <br/><br/>
               <script async='async' src='../www.googletagservices.com/tag/js/gpt.js'></script>
               <script>
                  var googletag = googletag || {};
                  googletag.cmd = googletag.cmd || [];
               </script>
               <script>
                  googletag.cmd.push(function() {
                    googletag.defineSlot('/43651300/Paperpk', [300, 250], 'div-gpt-ad-1493978923175-0').addService(googletag.pubads());
                    googletag.pubads().enableSingleRequest();
                    googletag.enableServices();
                  });
               </script>
               <!-- /43651300/Paperpk -->
               <div id='div-gpt-ad-1493978923175-0' style='height:250px; width:300px;'>
                  <script>
                     googletag.cmd.push(function() { googletag.display('div-gpt-ad-1493978923175-0'); });
                  </script>
               </div>
               <br/><br/>
               <a href=""><img src="Ads/site/img/work-abroad.jpg" width="300"/></a>
               <br/><br/>
               <a href="https://play.google.com/store/apps/details?id=paperpktechnologies.paperpks"><img src="Ads/site/img/android.png"/></a>
               <br/><br/><br/>
               <div id="stickyunit">
                  <script async src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
                  <!-- Paperpk job list new design Side bar -->
                  <ins class="adsbygoogle"
                     style="display:inline-block;width:300px;height:600px"
                     data-ad-client="ca-pub-6975300866830988"
                     data-ad-slot="4717712091"></ins>
                  <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
               </div>
               <br/>
               <br/>
               <br/><br/>
               <a href=""><img src="Ads/site/img/work-abroad.jpg" width="300"/></a>
               <br/><br/>
               <a href="https://play.google.com/store/apps/details?id=paperpktechnologies.paperpks"><img src="Ads/site/img/android.png"/></a>
               <br/><br/><br/>
            </div>
            <br/>
            <div id=clear></div>
            <h2 color=#325465>
            Jobs in Pakistan 2018</h3>
            <p color=#325465 style="font-size:1em;"><img style="border-radius:0px;max-width:200px;width:80px;" align=left src="pk_img/paperpk-jobs-logo.png"  /> 
               At  daily paperpk we provide all jobs in Pakistan publishes in newspaper , other companies websites or posted in FB or linked in at one place so the jobseeker dont need to visit all websites. 
               <br/><br/>
               We are trying to make the process of job search easier for by providing all government and private jobs ads at one website and app with all Jang job ads updated daily.
               <br/><br/>
               We are not related to websites like daily , jobsy.pk , paperpk-jobs.com , paper.jobs.com.pk , pakistanjobsbank.com , paperpk4u.com , dailypaperpkjobs.com , ilmkidunya.com , jobz.pk , papers.com.pk , paperpkads.pk , paperpkjobs, paperpkjobs.pk or any other website / App using the name of  or trying to copy its idea. Also we dont represent any international or Pakistani newspaper. 
               <br/>       <br/>  
               Paperpk provide newspaper ads with latest jobs in Pakistan from Karachi, Lahore , Islamabad and all major cities. Tenders , admissions and newspaper jobs cuttings are in scanned forms and are updated daily. On paperpkads.com , paper.pk or  you can search blog Jobs in newspapers like Jang , Dawn, Express Nawai Waqt and other today news papers. 
               <br/><br/>
               Daily paper advertisements are for information purpose only.  don't claim any type of copy rights or responsibility of ads. This is not the alternative of epaper or newspaper. We dont verify ads with companies those publish ads or the publisher, so be carefull at time of applying specially sharing your personal and financial information .
               <br/> 
            </p>
            <div id=clear></div>
            <br/>
            <div id=search_bar>
               <center>
                  <br/>
                  <form name=search_form action=https:///filter.php method=get onsubmit="return validate();">
                     <input type=text name=title placeholder="Search Keywords"  style="width:240px;" /> &nbsp;
                     <select name=city style="width:280px;">
                        <option value="">All Cities</option>
                        <option value="55">Abbottabad</option>
                        <option value="370">Abdul Hakeem</option>
                        <option value="57">Ahmadpur East</option>
                        <option value="220">Ahmadpur Sial</option>
                        <option value="232">Akora</option>
                        <option value="170">Alipur</option>
                        <option value="215">Amangarh</option>
                        <option value="73">Arifwala</option>
                        <option value="74">Attock</option>
                        <option value="144">Badah</option>
                        <option value="257">Baddomalhi</option>
                        <option value="85">Badin</option>
                        <option value="297">Baffa</option>
                        <option value="387">Bagh</option>
                        <option value="51">Bahawalnagar</option>
                        <option value="12">Bahawalpur</option>
                        <option value="336">Bajaur Agency</option>
                        <option value="404">Baltistan</option>
                        <option value="119">Bannu</option>
                        <option value="138">Basirpur</option>
                        <option value="126">Bat Khela</option>
                        <option value="326">Batkhela</option>
                        <option value="328">Battagram</option>
                        <option value="248">Bela</option>
                        <option value="294">Bhag</option>
                        <option value="76">Bhakkar</option>
                        <option value="83">Bhalwal</option>
                        <option value="267">Bhan</option>
                        <option value="390">Bhasha Dam</option>
                        <option value="277">Bhawana</option>
                        <option value="180">Bhera</option>
                        <option value="253">Bhit Shah</option>
                        <option value="265">Bhopalwala</option>
                        <option value="346">buner</option>
                        <option value="35">Burewala</option>
                        <option value="296">Chak</option>
                        <option value="147">Chak Azam Sahu</option>
                        <option value="151">Chak Jhumra</option>
                        <option value="410">Chaklala</option>
                        <option value="64">Chakwal</option>
                        <option value="71">Chaman</option>
                        <option value="303">Chambar</option>
                        <option value="68">Charsadda</option>
                        <option value="229">Chawinda</option>
                        <option value="75">Chichawatni</option>
                        <option value="334">Chilas</option>
                        <option value="32">Chiniot</option>
                        <option value="54">Chishtian Mandi</option>
                        <option value="383">Chistian </option>
                        <option value="157">Chitral</option>
                        <option value="285">Choa Saidan Shah</option>
                        <option value="274">Chor</option>
                        <option value="93">Chuhar Kana</option>
                        <option value="108">Chunian</option>
                        <option value="46">Dadu</option>
                        <option value="262">Dajal</option>
                        <option value="292">Dalbandin</option>
                        <option value="287">Darya Khan</option>
                        <option value="49">Daska</option>
                        <option value="211">Daud Khel</option>
                        <option value="293">Daulatpur</option>
                        <option value="264">Daur</option>
                        <option value="406">Depalpur</option>
                        <option value="260">Dera Bugti</option>
                        <option value="26">Dera Ghazi Khan</option>
                        <option value="63">Dera Ismail Khan</option>
                        <option value="403">Dera Murad Jamali</option>
                        <option value="286">Dhadar</option>
                        <option value="179">Digri</option>
                        <option value="204">Dijkot</option>
                        <option value="125">Dina</option>
                        <option value="388">Dina Nath</option>
                        <option value="142">Dinga</option>
                        <option value="84">Dipalpur</option>
                        <option value="189">Dir</option>
                        <option value="290">Dokri</option>
                        <option value="120">Dullewala</option>
                        <option value="214">Dunga Bunga</option>
                        <option value="167">Dunyapur</option>
                        <option value="335">Eidghah</option>
                        <option value="235">Eminabad</option>
                        <option value="4">Faisalabad</option>
                        <option value="396">Faqirabad</option>
                        <option value="219">Faqirwali</option>
                        <option value="243">Faruka</option>
                        <option value="368">Fateh Jang</option>
                        <option value="259">Fatehpur</option>
                        <option value="197">Fazalpur</option>
                        <option value="373">Ferozewala </option>
                        <option value="140">Fort Abbas</option>
                        <option value="333">Gahkuch</option>
                        <option value="168">Gambat</option>
                        <option value="194">Garh Maharaja</option>
                        <option value="298">Garhi Khairo</option>
                        <option value="288">Garhi Yasin</option>
                        <option value="252">Gharo</option>
                        <option value="190">Ghauspur</option>
                        <option value="102">Ghotki</option>
                        <option value="332">Gilgit</option>
                        <option value="47">Gojra</option>
                        <option value="92">Gujar Khan</option>
                        <option value="8">Gujranwala</option>
                        <option value="18">Gujrat</option>
                        <option value="112">Gwadar</option>
                        <option value="42">Hafizabad</option>
                        <option value="402">Hajira</option>
                        <option value="121">Hala</option>
                        <option value="156">Hangu</option>
                        <option value="109">Haripur</option>
                        <option value="282">Harnoli</option>
                        <option value="384">Haroonabad</option>
                        <option value="89">Harunabad</option>
                        <option value="130">Hasan Abdal</option>
                        <option value="72">Hasilpur</option>
                        <option value="369">Hassan Abdal</option>
                        <option value="355">Hattar</option>
                        <option value="100">Haveli</option>
                        <option value="141">Havelian</option>
                        <option value="213">Hazro</option>
                        <option value="239">Hingorja</option>
                        <option value="284">Hunza</option>
                        <option value="7">Hyderabad</option>
                        <option value="263">Isa Khel</option>
                        <option value="2">Islamabad</option>
                        <option value="36">Jacobabad</option>
                        <option value="399">Jaglot</option>
                        <option value="374">Jahanian</option>
                        <option value="310">Jalalabad</option>
                        <option value="69">Jalalpur Jattan</option>
                        <option value="149">Jalalpur Pirwala</option>
                        <option value="104">Jampur</option>
                        <option value="308">Jamshoro</option>
                        <option value="258">Jand</option>
                        <option value="56">Jaranwala</option>
                        <option value="123">Jatoi</option>
                        <option value="124">Jauharabad</option>
                        <option value="17">Jhang</option>
                        <option value="199">Jhawarian</option>
                        <option value="39">Jhelum</option>
                        <option value="278">Jhol</option>
                        <option value="272">Jiwani</option>
                        <option value="273">Johi</option>
                        <option value="107">Kabirwala</option>
                        <option value="418">Kachi</option>
                        <option value="128">Kahna Nau</option>
                        <option value="91">Kahror Pakka</option>
                        <option value="236">Kahuta</option>
                        <option value="413">Kala Shah Kaku</option>
                        <option value="280">Kalabagh</option>
                        <option value="304">Kalaswala</option>
                        <option value="209">Kalat</option>
                        <option value="271">Kaleke</option>
                        <option value="325">Kalkul</option>
                        <option value="372">Kallar Kahar</option>
                        <option value="217">Kalur Kot</option>
                        <option value="59">Kamalia</option>
                        <option value="78">Kamber</option>
                        <option value="227">Kamir</option>
                        <option value="33">Kamoke</option>
                        <option value="136">Kamra</option>
                        <option value="206">Kandiaro</option>
                        <option value="242">Kanganpur</option>
                        <option value="312">Karak</option>
                        <option value="416">Karampur </option>
                        <option value="311">Karma</option>
                        <option value="313">Kashmir</option>
                        <option value="169">Kashmor</option>
                        <option value="24">Kasur</option>
                        <option value="367">Katlang</option>
                        <option value="53">Khairpur</option>
                        <option value="188">Khairpur Nathan Shah</option>
                        <option value="143">Khalabat</option>
                        <option value="41">Khanewal</option>
                        <option value="187">Khangah Dogran</option>
                        <option value="250">Khangarh</option>
                        <option value="44">Khanpur</option>
                        <option value="330">Khaplu</option>
                        <option value="185">Kharan</option>
                        <option value="77">Kharian</option>
                        <option value="175">Khewra</option>
                        <option value="196">Khipro</option>
                        <option value="159">Khurianwala</option>
                        <option value="61">Khushab</option>
                        <option value="45">Khuzdar</option>
                        <option value="338">Khyber Agency</option>
                        <option value="415">Killa Saifullah</option>
                        <option value="43">Kohat</option>
                        <option value="324">Kohistan</option>
                        <option value="60">Kot Addu</option>
                        <option value="216">Kot Diji</option>
                        <option value="127">Kot Radha Kishan</option>
                        <option value="234">Kot Samaba</option>
                        <option value="314">Kotli</option>
                        <option value="244">Kotli Loharan</option>
                        <option value="87">Kotri</option>
                        <option value="238">Kulachi</option>
                        <option value="158">Kundian</option>
                        <option value="198">Kunjah</option>
                        <option value="208">Kunri</option>
                        <option value="340">Kurram Agency</option>
                        <option value="256">Lachi</option>
                        <option value="299">Lakhi</option>
                        <option value="154">Lakki Marwat</option>
                        <option value="392">Lalamusa</option>
                        <option value="184">Lalian</option>
                        <option value="397">Landi Kotal</option>
                        <option value="15">Larkana</option>
                        <option value="379">Lasbela</option>
                        <option value="354">Layyah</option>
                        <option value="212">Liaqatabad</option>
                        <option value="66">Lodhran</option>
                        <option value="148">Loralai</option>
                        <option value="377">Lower Dir</option>
                        <option value="408">Lower Kurram </option>
                        <option value="268">Mach</option>
                        <option value="289">Madeji</option>
                        <option value="101">Mailsi</option>
                        <option value="329">Malakand</option>
                        <option value="163">Malakwal</option>
                        <option value="349">malir</option>
                        <option value="177">Mamu Kanjan</option>
                        <option value="48">Mandi Bahauddin</option>
                        <option value="276">Mangla</option>
                        <option value="98">Mansehra</option>
                        <option value="19">Mardan</option>
                        <option value="371">Masroor </option>
                        <option value="195">Mastung</option>
                        <option value="254">Matiari</option>
                        <option value="116">Matli</option>
                        <option value="186">Mehar</option>
                        <option value="160">Mehrabpur</option>
                        <option value="80">Mian Channun</option>
                        <option value="70">Mianwali</option>
                        <option value="193">Minchinabad</option>
                        <option value="29">Mingaora</option>
                        <option value="315">Mirpur</option>
                        <option value="31">Mirpur Khas</option>
                        <option value="118">Mirpur Mathelo</option>
                        <option value="210">Mitha Tiwana</option>
                        <option value="231">Mithi</option>
                        <option value="337">Mohmand Agency</option>
                        <option value="79">Moro</option>
                        <option value="6">Multan</option>
                        <option value="38">Muridke</option>
                        <option value="218">Murree</option>
                        <option value="398">Musa Khail</option>
                        <option value="386">Muslim Bagh</option>
                        <option value="129">Mustafabad</option>
                        <option value="249">Muzaffarabad</option>
                        <option value="37">Muzaffargarh</option>
                        <option value="110">Nankana Sahib</option>
                        <option value="162">Narang</option>
                        <option value="376">Narang Mandi</option>
                        <option value="95">Narowal</option>
                        <option value="316">Nasirabad</option>
                        <option value="171">Naudero</option>
                        <option value="240">Naukot</option>
                        <option value="261">Naushahro Firoz</option>
                        <option value="378">Naushki</option>
                        <option value="28">Nawabshah</option>
                        <option value="358">neelam</option>
                        <option value="394">Neelum </option>
                        <option value="409">North Nazimabad</option>
                        <option value="341">North Waziristan</option>
                        <option value="67">Nowshera</option>
                        <option value="201">Nushki</option>
                        <option value="30">Okara</option>
                        <option value="339">Orakzai Agency</option>
                        <option value="302">Ormara</option>
                        <option value="150">Pabbi</option>
                        <option value="266">Paharpur</option>
                        <option value="50">Pakpattan</option>
                        <option value="347">pallandri</option>
                        <option value="86">Pano Aqil</option>
                        <option value="395">Parachinar</option>
                        <option value="172">Pasni</option>
                        <option value="111">Pasrur</option>
                        <option value="90">Pattoki</option>
                        <option value="221">Phalia</option>
                        <option value="375">Phalian </option>
                        <option value="400">Phhol Nagar</option>
                        <option value="401">Phool Nagar</option>
                        <option value="241">Pind Dadan Khan</option>
                        <option value="161">Pindi Bhattian</option>
                        <option value="165">Pindi Gheb</option>
                        <option value="226">Pishin</option>
                        <option value="405">Qadirabad </option>
                        <option value="247">Qadirpur Ran</option>
                        <option value="363">Qalandarabad</option>
                        <option value="323">Qamber</option>
                        <option value="365">Qasimabad</option>
                        <option value="380">Quaidabad</option>
                        <option value="11">Quetta</option>
                        <option value="117">Rabwah</option>
                        <option value="269">Radhan</option>
                        <option value="20">Rahim Yar Khan</option>
                        <option value="183">Raiwind</option>
                        <option value="223">Raja Jang</option>
                        <option value="113">Rajanpur</option>
                        <option value="237">Ranipur</option>
                        <option value="295">Rasulnagar</option>
                        <option value="122">Ratodero</option>
                        <option value="385">Rawalakot</option>
                        <option value="5">Rawalpindi</option>
                        <option value="152">Renala Khurd</option>
                        <option value="153">Risalpur</option>
                        <option value="114">Rohri</option>
                        <option value="301">Rojhan</option>
                        <option value="34">Sadiqabad</option>
                        <option value="27">Sahiwal</option>
                        <option value="317">Sakhakot</option>
                        <option value="181">Sakrand</option>
                        <option value="224">Samasatta</option>
                        <option value="105">Sambrial</option>
                        <option value="106">Sanghar</option>
                        <option value="411">Sangla Hill</option>
                        <option value="391">Sanjwal</option>
                        <option value="134">Sarai Alamgir</option>
                        <option value="251">Sarai Naurang</option>
                        <option value="283">Sarai Sidhu</option>
                        <option value="9">Sargodha</option>
                        <option value="417">Sawari </option>
                        <option value="139">Sehwan</option>
                        <option value="174">Setharja</option>
                        <option value="97">Shabqadar</option>
                        <option value="82">Shahdadkot</option>
                        <option value="96">Shahdadpur</option>
                        <option value="393">Shaheed Benazirabad</option>
                        <option value="245">Shahpur Chakar</option>
                        <option value="359">shakargarh</option>
                        <option value="366">Shangla</option>
                        <option value="382">Sharaqpur Sharif</option>
                        <option value="178">Sharqpur</option>
                        <option value="16">Sheikhupura</option>
                        <option value="412">Shigar</option>
                        <option value="40">Shikarpur</option>
                        <option value="407">Shinkiari </option>
                        <option value="356">shorkot</option>
                        <option value="99">Shujaabad</option>
                        <option value="13">Sialkot</option>
                        <option value="103">Sibi</option>
                        <option value="205">Sillanwali</option>
                        <option value="281">Sinjhoro</option>
                        <option value="203">Sita Road</option>
                        <option value="331">Skardu</option>
                        <option value="279">Sodhra</option>
                        <option value="342">South Waziristan</option>
                        <option value="414">Sui </option>
                        <option value="202">Sujawal</option>
                        <option value="173">Sukheke</option>
                        <option value="14">Sukkur</option>
                        <option value="300">Surab</option>
                        <option value="65">Swabi</option>
                        <option value="318">Swat</option>
                        <option value="131">Talagang</option>
                        <option value="246">Talhar</option>
                        <option value="146">Tandlianwala</option>
                        <option value="52">Tando Adam</option>
                        <option value="357">Tando Alam</option>
                        <option value="364">Tando Allahyar </option>
                        <option value="275">Tando Ghulam Ali</option>
                        <option value="182">Tando Jam</option>
                        <option value="88">Tando Muhammad Khan</option>
                        <option value="191">Tangi</option>
                        <option value="145">Tank</option>
                        <option value="320">Tarbela</option>
                        <option value="132">Taunsa</option>
                        <option value="381">Taunsa Sharif </option>
                        <option value="306">Taxila</option>
                        <option value="344">Thal</option>
                        <option value="291">Thano Bula Khan</option>
                        <option value="348">Tharparkar</option>
                        <option value="133">Thatta</option>
                        <option value="164">Thul</option>
                        <option value="321">Timergara</option>
                        <option value="94">Toba Tek Singh</option>
                        <option value="155">Topi</option>
                        <option value="343">Torghar</option>
                        <option value="81">Turbat</option>
                        <option value="230">Ubauro</option>
                        <option value="228">Uch</option>
                        <option value="137">Umarkot</option>
                        <option value="322">Umerkot</option>
                        <option value="135">Usta Muhammad</option>
                        <option value="270">Uthal</option>
                        <option value="192">Utmanzai</option>
                        <option value="389">Vehari</option>
                        <option value="58">Vihari</option>
                        <option value="25">Wah</option>
                        <option value="255">Warah</option>
                        <option value="225">Warburton</option>
                        <option value="62">Wazirabad</option>
                        <option value="222">Yazman</option>
                        <option value="233">Zafarwal</option>
                        <option value="166">Zahir Pir</option>
                        <option value="207">Zaida</option>
                        <option value="115">Zhob</option>
                     </select>
                     &nbsp;
                     <select name=cat  style="width:240px;">
                        <option value="">All Categories</option>
                        <option value="3">Abroad</option>
                        <option value="106">Accounting Finance</option>
                        <option value="231">Agriculture</option>
                        <option value="60">Architects</option>
                        <option value="7">Aviation</option>
                        <option value="104">Banking</option>
                        <option value="213">Beautician</option>
                        <option value="9">Call Center</option>
                        <option value="10">chef and cook</option>
                        <option value="67">Communication</option>
                        <option value="69">Court</option>
                        <option value="70">Customer Service</option>
                        <option value="109">Disabled</option>
                        <option value="32">Education & Teaching</option>
                        <option value="12">Engineering</option>
                        <option value="13">Fashion Designer</option>
                        <option value="14">Female</option>
                        <option value="15">Government</option>
                        <option value="16">Internship</option>
                        <option value="102">Inventory And Stores</option>
                        <option value="217">Legal</option>
                        <option value="103">Livestock</option>
                        <option value="19">Media Press TV</option>
                        <option value="20">Medical</option>
                        <option value="21">Newspaper</option>
                        <option value="230">Oil and Gas</option>
                        <option value="107">Police</option>
                        <option value="23">Public Relations</option>
                        <option value="24">Quality Assurance</option>
                        <option value="25">Research Development</option>
                        <option value="26">Restaurant</option>
                        <option value="27">Sales and Marketing</option>
                        <option value="28">Scientist</option>
                        <option value="22">Security</option>
                        <option value="100">Social</option>
                        <option value="33">Supporting and Helper</option>
                        <option value="34">Technical</option>
                        <option value="35">Telecom</option>
                        <option value="36">Tourism</option>
                     </select>
                     <input type=submit value="Find"  style="width:80px;" />
                  </form>
                  <br/><br/>
               </center>
            </div>
         </div>
         <div id=clear></div>
      </div>
@endsection