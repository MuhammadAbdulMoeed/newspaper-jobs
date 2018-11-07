@extends('frontend.app')
@section('content')

<div id=wrapper_total>
            <div id="navigate">
               <div id=left-ad-social style="position: absolute; width: 125px; float: left; top: -95px; left: -125px; z-index: 1; clear: both;">
                  <div id="s2s">
                     <!--  <img src=http://islamictiming.com/img/ad.jpg width=125px />  -->
                  </div>
               </div>
               <div id=clear></div>
               <div id="city-page-banner">
                  <h2 itemprop="name">Latest Jobs in Newspaper</h2>
                  <div id=star_img>
                     <!--<a href="">Follow</a><br/><br/><br/>
                        <h5>32 Followers</h5>-->
                  </div>
                  <div id=clear></div>
                  <div id=cat-links>
                     <!--
                        <a href="job/city/">Jobs</a><a href="admission/city/">Admissions</a><a href="tender/city/">Tenders</a>-->
                  </div>
                  <div id=clear></div>
               </div>
               <div id=clear></div>
               <div id="featured_latest_job">
                  <!--<p><img alt="Latest Jobs" src="pk_img/job_logo.png" align=left  style="border-radius: 90px;" />Jobs in </p>-->
                  <div id=clear></div>
                  <br/>
                  <div id="job-table">
                    <div id="calendar3">
                        
                    </div>
                  </div>
               </div>
               <div id="newspaper">
                  <p>Newspaper Jobs Ads</p>
                  <div id=clear></div>
                  <br/>
                @foreach($newspapers as $newspaper)
               <a href=><img alt="The News" src="{{asset('/storage/app/'.$newspaper->logo)}}"  /></a>
               @endforeach
               </div>
               
               
            </div>
            <div id=clear></div>
            <br/>
         </div>
         @endsection