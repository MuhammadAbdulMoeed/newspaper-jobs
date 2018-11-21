@extends('frontend.app')
@section('content')
<style>
   fieldset.scheduler-border {
   border: 3px solid #019875;
   padding: 0 1.4em 1.4em 1.4em !important;
   margin: 0 0 1.5em 0 !important;
   -webkit-box-shadow:  0px 0px 0px 0px #000;
   box-shadow:  0px 0px 0px 0px #000;width: 48%;
   }
   #show-ad-page-job-details-div {
   color: #325465;
   }
   legend.scheduler-border {
   color:#019875;
   font-size: 1.2em !important;
   font-weight: bold !important;
   text-align: left !important;
   width:auto;
   padding:0 10px;
   border-bottom:none;
   }
   @media screen and (max-width:600px){
   fieldset.scheduler-border {
   width: 98%;
   }
   }
   td,th{font-size:1em;}
   #show-ad-img-div a {
   background-color: transparent;
   padding: 5px 10px 5px 10px;
   border-radius: 5px;
   color: #23527c;
   font-size: 1.3em;
   }
</style>
<div id=wrapper_total>
   <div id="navigate">
      <div id=left-ad-social style="position: absolute; width: 125px; float: left; top: -95px; left: -125px; z-index: 1; clear: both;">
         <div id="s2s">
         </div>
      </div>
      <img src="{{asset('public/images.jpg')}}" width="100%" height="200px">
      <br/>
      <div id="show-ad-page-job-details-div" >
         <div id="show-ad-img-div">
            <!--
               <a href="">Apply Now</a> &nbsp; <a href="">More Details</a>-->
            <div id=clear></div>
            <br/>
            <center>
               
               <fieldset class="scheduler-border" style="float: left;" >
                  <legend class="scheduler-border">Job Details</legend>
                  <table>
                     <!--
                        <tr>
                            <th>Industry</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Functional Area</th>
                            <td></td>
                        </tr>
                        -->
                     <tr>
                        <th>Total Positions</th>
                        <td>
                           {{$add->total_pos}}
                        </td>
                     </tr>
                     <tr>
                        <th>Company Name</th>
                        <td>
                           {{$add->company_name}}
                        </td>
                     </tr>
                     <tr>
                        <th>Company Abbreviation</th>
                        <td>
                           {{$add->company_abbrevation}}
                        </td>
                     </tr>
                     <tr>
                        <th>Company Logo</th>
                        <td>
                           <a href="" target="_blank"> <img width=170px src="{{asset('/storage/app/'.$add->rel_logo)}}" /></a><br/>
                        </td>
                     </tr>
                     <tr>
                        <th>Job Type</th>
                        <td>
                           {{$add->getJobType->job_type_title}}
                        </td>
                     </tr>
                     <tr>
                        <th>Cities</th>
                        <td>
                           {{$add->getCity->title}},                             
                        </td>
                     </tr>
                     <tr>
                        <th>Deadline to Apply</th>
                        <td>{{$add->last_date}}</td>
                     </tr>
                     <tr>
                        <th>Job Location</th>
                        <td>
                           {{$add->address}}<br>
                        </td>
                     </tr>
                     <tr>
                        <th>Gender</th>
                        <td>{{$add->gendar}}</td>
                     </tr>
                     <tr>
                        <th>Salary</th>
                        <td > {{$add->salary}} (estimated)</td>
                     </tr>
                     <tr>
                        <th>Qualification</th>
                        <td>    {{$add->getQualification->title}}
                        </td>
                     </tr>
                     <tr>
                        <th>Responsibility</th>
                        <td></td>
                     </tr>
                     <tr>
                        <th>Skills</th>
                        <td>{{$add->skills}} </td>
                     </tr>
                     <tr>
                        <th>Working Hours</th>
                        <td>
                           {{$add->working_hours}} Hours
                        </td>
                     </tr>
                     <tr>
                        <th>Age</th>
                        <td>{{$add->age_limit}} Years(max)</td>
                     </tr>
                     <tr>
                        <th>Experience</th>
                        <td> {{$add->experience}} </td>
                     </tr>
                     <tr>
                        <th>Source</th>
                        <td>
                           Newspaper
                        </td>
                     </tr>
                     <tr>
                        <th>Contact Number</th>
                        <td>{{$add->contact_number}}</td>
                     </tr>
                     <tr style="width: 100%; background-color: #019875;color:white;font-size:1.8em;">
                        <td  colspan=2>Apply @ : </td>
                     </tr>
                     <tr style="width: 100%; background-color: transparent;color:white;font-size:1.5em;">
                        <td colspan=2></td>
                     </tr>
                     <!--
                        <tr style="background-color: white;">
                            <th>Email</th>
                            <td></td>
                        </tr><tr><td> &nbsp;</td></tr>    -->
                     <tr style="background-color: white;">
                        <th>Address </th>
                        <td>
                           {{$add->address}}
                        </td>
                     </tr>
                  </table>
               </fieldset>
               <fieldset class="scheduler-border" style="float: right;min-height: 340px;">
                  <legend class="scheduler-border">Advertisement</legend>
                  <script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
                  <!-- paperpk admissions 600 300 -->
                  <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-5600064405332347"
                     data-ad-slot="5710564550"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                  <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                  </script><br/>
               </fieldset>
               <fieldset class="scheduler-border" style="float: right;min-height: 340px;">
                  <legend class="scheduler-border">Job Description</legend>
                  <table width=100%>
                     <tr>
                        <td>{{$add->description}}</td>
                     </tr>
                     <tr>
                        <td>
                           @if($add->created_by == "executive")
                           <a href="{{url('apply_job/'.$add->id)}}"> 
                           <img src="../images/Apply-Button.jpg" witdth="200"/></a>
                           @else
                           <img src="../images/Apply-Button.jpg" witdth="200"/>
                           @endif
                        </td>
                     </tr>
                  </table>
               </fieldset>
               <fieldset class="scheduler-border" style="float: right;min-height: 340px;">
                  <legend class="scheduler-border">Related</legend>
                  @foreach($rel as $re)
                  <a href="{{url('detail_page/'.$re->id)}}">{{$re->title}}</a>
                  </br>
                  @endforeach
               
               </fieldset>
               <br/>
               <br/>
               <img id="img_path" src="{{asset('/storage/app/'.$add->newspaper_piece)}}" />
               <br/><a class="btn btn-success" style="    background-color: #019875;color:white;" href="{{url('/storage/app/'.$add->newspaper_piece)}}" target="_blank">View Full Image</a>
               <div id=clear></div>
               
               <div id=clear></div>
               <div id=clear></div>
               <br/>
               <div id=clear></div>
               <br/>
            </center>
            <div id=clear></div>
            <br/><br/>
         </div>
      </div>
      <br>
      <br>
      <div id=govt_div style="clear:right;">
         <a href=""><img src="{{asset('public/cv.jpg')}}"/></a>
         <br/><br/>
         <a href=""><img src="{{asset('public/cv.jpg')}}" width="300"/></a>
         <br/>
         <br/>
         <!-- /43651300/Paperpk -->
         <!--
            <table class=" table  table-striped">
                <tbody>
                    <tr>
                        <th colspan=3 style="background-color: #019875;color: white;width: 300px;text-align: center;">More Civil Court Attock Jobs</th>
                    </tr>
                </tbody>
                <tbody>
            
                    <tr>
                        
                        <td>
            <a href="803719/civil-court-attock-jobs">
            Jang</a>
            </td>
                        <td>
            <a href="803719/civil-court-attock-jobs">
            October 11,2018</td>
            </a>
                    </tr>
            
            
                    <tr>
                        
                        <td>
            <a href="803691/civil-court-attock-jobs">
            Nawaiwaqt</a>
            </td>
                        <td>
            <a href="803691/civil-court-attock-jobs">
            October 11,2018</td>
            </a>
                    </tr>
            
            
                    <tr>
                        
                        <td>
            <a href="560101/civil-court-attock-jobs">
            Nawaiwaqt</a>
            </td>
                        <td>
            <a href="560101/civil-court-attock-jobs">
            March 03,2016</td>
            </a>
                    </tr>
            
                </tbody>
            </table> -->
      </div>
      <div id=clear></div>
      <div id=search_bar>
         <a href="{{url('company_add/'.$add->company_name)}}">
            <p style="font-size: 3em; font-weight: bold; color: purple"> More Jobs By {{$add->company_name}} </p>
         </a>
      </div>
   </div>
   <div id=clear></div>
   <br/>
</div>
@endsection