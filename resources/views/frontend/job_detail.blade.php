@extends('frontend.app')
@section('content')
<div id=wrapper_total>
   <div id="navigate">
      <div id=left-ad-social style="position: absolute; width: 125px; float: left; top: -95px; left: -125px; z-index: 1; clear: both;">
         <div id="s2s">
         </div>
      </div>
      <div id=social>
         <div id=s2s class="soc_lnk">
            <br/>
            =
         </div>
         <script>
            function socialHide(){
            document.getElementsByClassName("soc_lnk")[0].style.display="none";
            }
         </script>
      </div>
      <div id=clear></div>
      <br/>
      <div id="show-ad-page-banner">
         <div>
            <h2  style="padding-left:5%;">Process Server jobs in Civil Court in Attock, </h2>
         </div>
         <h5> &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Posted Date: October 11,2018</h5>
      </div>
      <div id=clear></div>
      <br/>
      <script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
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
      <div id="show-ad-page-job-details-div" >
         <div id="show-ad-img-div">
            <!--
               <a href="">Apply Now</a> &nbsp; <a href="">More Details</a>-->
            <div id=clear></div>
            <br/>
            <center>
               <img id="img_path" src="{{asset('/storage/app/'.$add->newspaper_piece)}}" />
               <br/><a class="btn btn-success" style="    background-color: #019875;color:white;" href="{{url('/storage/app/'.$add->newspaper_piece)}}" target="_blank">View Full Image</a>
               <script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
               <!-- top links -->
               <ins class="adsbygoogle"
                  style="display:block"
                  data-ad-client="ca-pub-6975300866830988"
                  data-ad-slot="9847020896"
                  data-ad-format="link"></ins>
               <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
               </script> 
               <div id=clear></div>
               <br/>
               <br/>
              
               <fieldset class="scheduler-border" style="float: left;" >
                  <legend class="scheduler-border">Job Details</legend>
                  <div class="col-xs-6">
                  <table class="table">
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
                        <td>{{$add->total_pos}}</td>
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
                        <th>Job Type</th>
                        <td>
                           {{$add->getJobType->job_type_title}}
                        </td>
                     </tr>
                     <tr>
                        <th>Cities</th>
                        <td>
                           {{$add->getCity->title}}                           
                        </td>
                     </tr>
                     <tr>
                        <th>Deadline to Apply</th>
                        <td>{{$add->last_date}}</td>
                     </tr>
                     <tr>
                        <th>Job Location</th>
                        <td>
                           {{$add->address}}
                        </td>
                     </tr>
                     <tr>
                        <th>Gender</th>
                        <td>{{$add->gendar}}</td>
                     </tr>
                     <tr>
                        <th>Salary</th>
                        <td > {{$add->salary}}</td>
                     </tr>
                     <tr>
                        <th>Qualification</th>
                        <td>    {{$add->getQualification->title}}
                        </td>
                     </tr>
                     <tr>
                        <th>Skills</th>
                        <td>{{$add->skills}}</td>
                     </tr>
                     <tr>
                        <th>Working Hours</th>
                        <td itemprop="workHours">{{$add->working_hours}} Hours</td>
                     </tr>
                     <tr>
                        <th>Age</th>
                        <td>{{$add->age_limit}} Years(max)</td>
                     </tr>
                    
                     <tr>
                        <th>Experience</th>
                        <td>{{$add->experience}} </td>
                     </tr>
                     
                    
                     <tr>
                        <th>Contact Number</th>
                        <td>{{$add->contact_number}}</td>
                     </tr>
                     <!--
                        <tr style="background-color: white;">
                            <th>Email</th>
                            <td itemprop="email"></td>
                        </tr><tr><td> &nbsp;</td></tr>    -->
                     <tr style="background-color: white;">
                        <th>Address </th>
                        <td>
                          {{$add->address}}
                        </td>
                     </tr>
                  </table>
                  </div>
                  <div class="col-xs-6">
                  <table class="table pull-right">
                     <tr>
                        <th>Apply Job</th>
                        <td><a href="{{url('/')}}">Apply job</a></td>
                     </tr>
                  </table>
               </div>
               </fieldset>
            
               <div id=clear></div>
            </center>
           
            <div id=clear></div>
            <br/><br/>
         </div>
      </div>
      <div id=google-ad>
         <script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
         <script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
         <!-- Paperpk job detail page sidebar -->
         <ins class="adsbygoogle"
            style="display:inline-block;width:300px;height:250px"
            data-ad-client="ca-pub-6975300866830988"
            data-ad-slot="7879988095"></ins>
         <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
         </script>
         <br/>
      </div>
      <div id=google-ad-ag>
         <script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
         <!-- paperpk job detail new side bar bottom responsive -->
         <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-6975300866830988"
            data-ad-slot="4368118498"
            data-ad-format="auto"></ins>
         <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
         </script>
      </div>
      <br/>
      <div id=govt_div style="clear:right;">
         <center>
            <img width=170px src="../uploads/co_img/1536661619.jpg" /><br/>
            <a style="font-size:1em;" href="http://paperpk.com/company/civil-court_1194" class="my-success" style="color: white;" target="_blank">More Civil Court Jobs</a>
         </center>
         <br/>
         <iframe width="300" height="250" src="https://www.youtube.com/embed/vhC55VfZMxE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><a href="https://paperpk.com/job/category/government"><img src="../Ads/site/img/govt_logo.png"/></a>
         <br/><br/>
         <a href="https://cvformats.com/"><img src="../Ads/site/img/cv.jpg" width="300"/></a>
         <br/>
         <br/>
         <a href="http://paperpk.com/subscribe.php"><img src="../Ads/site/img/subscribe.jpg" width="300"/></a>
         <br/><br/>
         <a href="http://paperpk.com/book-newspaper-ads/"><img src="../Ads/site/img/book-newspaper-ads.png" width="300"/></a>
         <br/>
         <br/>
         <script async='async' src='../../www.googletagservices.com/tag/js/gpt.js'></script>
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
         <a href="https://paperads.pk/job/category/abroad"><img src="../Ads/site/img/work-abroad.jpg" width="300"/></a>
         <br/><br/>
         <a href="https://play.google.com/store/apps/details?id=paperpktechnologies.paperpks"><img src="../Ads/site/img/android.png"/></a>
         <br/><br/><br/>
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
         <center>
            <br/>
            <form name=search_form action=http://paperpk.com/filter.php method=get onsubmit="return validate();">
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
                  <option value="419">Miranshah</option>
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
                  <option value="106">Accounting & Finance</option>
                  <option value="9">Admin & Office</option>
                  <option value="27">Advertising & Marketing</option>
                  <option value="103">Animal Care</option>
                  <option value="13">Art Fashion & Design</option>
                  <option value="104">Banking</option>
                  <option value="23">Business Operations</option>
                  <option value="33">Cleaning & Facilities</option>
                  <option value="11">Computer & IT</option>
                  <option value="60">Construction</option>
                  <option value="69">Court</option>
                  <option value="70">Customer Service</option>
                  <option value="109">Disabled</option>
                  <option value="32">Education</option>
                  <option value="230">Energy & Mining</option>
                  <option value="36">Entertainment & Travel</option>
                  <option value="231">Farming & Outdoors</option>
                  <option value="14">Female</option>
                  <option value="15">Government</option>
                  <option value="20">Healthcare</option>
                  <option value="10">Human Resources</option>
                  <option value="34">Installation, Maintenance & Repair</option>
                  <option value="16">Internship</option>
                  <option value="217">Legal</option>
                  <option value="24">Manufacturing & Warehouse</option>
                  <option value="19">Media Communications & Writing</option>
                  <option value="21">Newspaper</option>
                  <option value="213">Personal Care & Services</option>
                  <option value="107">Police</option>
                  <option value="22">Protective Services</option>
                  <option value="67">Real Estate</option>
                  <option value="25">Research Development</option>
                  <option value="26">Restaurant & Hospitality</option>
                  <option value="102">Sales & Retail</option>
                  <option value="12">Science & Engineering</option>
                  <option value="100">Social Services & Nonprofit</option>
                  <option value="28">Sports, Fitness & Recreation</option>
                  <option value="35">Telecom</option>
                  <option value="7">Transportation & Logistics</option>
               </select>
               <input type=submit value="Find"  style="width:80px;" />
            </form>
            <br/><br/>
         </center>
      </div>
   </div>
   <div id=clear></div>
   <br/>
</div>
@endsection