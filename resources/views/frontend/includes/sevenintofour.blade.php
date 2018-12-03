<?php
$adsense = App\AdsenseCode::where('size' , '717x417')->inRandomOrder()->first();
?>
@if(!empty($adsense))
{!! $adsense->code !!}
@else
<img src="{{asset('img/download.jpg')}}" style="width: 717px; max-height: 417px;"></tr>
@endif