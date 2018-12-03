<?php
$adsense = App\AdsenseCode::where('size' , 600)->inRandomOrder()->first();
?>
@if(!empty($adsense))
{!! $adsense->code !!}
@else
<img src="{{asset('img/download.jpg')}}" style="width: 764px; max-height: 267px;"></tr>
@endif