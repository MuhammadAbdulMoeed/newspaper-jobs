<?php
$adsense = App\AdsenseCode::where('size' , '700x90')->inRandomOrder()->first();
?>
@if(!empty($adsense))
{!! $adsense->code !!}
@else
<img src="{{asset('img/download.jpg')}}" style="width: 700px; max-height: 90px;"></tr>
@endif