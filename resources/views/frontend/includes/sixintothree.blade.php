<?php
$adsense = App\AdsenseCode::where('size' , '600x300')->inRandomOrder()->first();
?>
@if(!empty($adsense))
{!! $adsense->code !!}
@else
<img src="{{asset('img/download.jpg')}}" style="width: 600px; max-height: 300px;"></tr>
@endif