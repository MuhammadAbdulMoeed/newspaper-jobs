<?php
$cat = App\Category::take(3)->get();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" lang="en">
   <link rel="canonical" href="index.html">
   <!-- Mirrored from paperpk.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Sep 2018 02:20:01 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=BIG5">
      <title>Online </title>
      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="{{asset('css/includes/bootstrap.min.css')}}" />
      <script src="{{asset('js/includes/jquery.min.js')}}"></script>
      <script src="{{asset('js/includes/bootstrap.min.js')}}"></script>
      <link rel="stylesheet" href="{{asset('css/includes/my_style.css')}}" />
      <link rel="shortcut icon" href="images/favicon.ico" />
       <link rel="stylesheet" href="{{asset('css/includes/fullcalendar.min.css')}}" />
 
      <style>
         #job-table table a:visited{background-color: black;}
         #company-img2 a:hover img{
         -webkit-filter: grayscale(100%) brightness(50);
         -moz-filter: grayscale(100%) brightness(50);
         }
         #company-img2 a:hover{
         color:white;
         } 
         .Newspaper_border a img:hover{
         border:1px dashed brown;
         }
         .Newspaper_border {
         padding-top:5px;
         border-right: #DBE1E6 1px solid;
         border-bottom: #DBE1E6 1px solid;
         }
         #table td{
         text-align:center;
         }
         #table img{
         width:75px;
         height: 40px;
         }
         #job-link{color:#F60;}
         a#job-link:visited{color: blue;}
         #admission-link{color:#C00;}
         #tender-link{color:#666;}
         #newspaper img{
         width: 90px; height: 40px;
         }
         #s-h{display:none;}
         a#job-one-lnkl:visited{color: gray;}
         a#company_sub_link{
         color: #cb65dc;
         font-size:0.8em;
         } 
      </style>
   </head>
   <body>
      <div id="wrapper">
         <div id="main_container_mobile">
                <img alt="AddLogo" src="pk_img/logo.png" align="left" width="180px">
                <a id="nav_buttonid"><img alt="navigate-button" src="{{asset('public/nav_head_logo.png')}}" align="right" width="45px" style="margin:7px 14px ;"></a>
                
                    <ul id="toggle_ul">
                        @if(auth()->user())
                  <a href="{{url('/account')}}">My Account</a>
                  @else
                  <a href="{{url('/register')}}">Job Seeker</a>
                  <br>
                  <a href="{{url('/login')}}">Log in</a>
                  @endif
                    </ul>
            </div>
         <div id="main_container">
            <div id="menu_div">
               <div id="account_link">
                @if(auth()->user())
                  <a href="{{url('/account')}}">My Account</a>
                  @else
                  <a href="{{url('/register')}}">Job Seeker</a><a href="{{url('/es-register')}}">Employee Seeker</a>
                  @endif
               </div>
               <ul>
                  <li><a href="{{url('/')}}"><img src="https://paperpk.com/careers/images/home.png" height=30px /></a></li>
                  @if($cat)
                  @foreach($cat as $ca)
                  <li><a href="{{url('category/'.$ca->id)}}">{{$ca->title}}</a></li>
                  @endforeach
                  @endif
               </ul>
            </div>
         </div>
         <div id="logo_div">
            <a href=""><img alt="" src="" align="left" width=200px /></a>
         </div>
         <div id=clear></div>
         @yield('content')
         <div id=footer>
            
            <img alt="Pk_banner" src="https://paperpk.com/careers/pk_img/background_search.png" style="width:100%;" />
            <div id="copy-right">
               <table bgcolor="white" width="100%">
                  <tr>
                     <td bgcolor="white">
                        <p>  
                           
                        </p>
                     </td>
                  </tr>
               </table>
               <br/> 
            </div>
            <br/>  <br/>       
            <script>
               function Hdiv(){
               document.getElementById("app").style.display="none";
               }
            </script>
         </div>
      </div>
   </body>
   <head>
      <script src="{{asset('js/includes/my_js.js')}}"></script>
      <script src="{{asset('js/includes/moment.min.js')}}"></script>
      <script src="{{asset('js/includes/fullcalendar.min.js')}}"></script>
      @yield('js-script')
      <script>

         $(document).ready(function(){

var url1 = "{{url('showcalenderjobs')}}"
var url2 = "{{url('showcalendertender')}}"
var url3 = "{{url('showcalenderadmissions')}}"
            function search(){
               var news = $('#newspaper').find(":selected").text();
               var type = $('#job_type').find(":selected").text();
               var date = $('#date').val();
               windows.location = "{{url('/')}}"+news+"/"+type+"/"+date

            }
         
            $('#calendar2').fullCalendar();
             $("#m-btn").click(function(){
                 $("#s-h").toggle('slow');
         
             });
             $('#calendar3').fullCalendar({
               header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
    },
   eventSources: [
    url1,
    url2,
    url3
  ],
  eventClick: function (calEvent, jsEvent, view) {
    console.log('html' , calEvent)
    window.location = calEvent.html;
},
});
         
         });
         
      </script>
   </head>
</html>