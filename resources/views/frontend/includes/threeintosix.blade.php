<?php
$adsense = App\AdsenseCode::where('size' , '300x600')->inRandomOrder()->first();
?>
@if(!empty($adsense))
{!! $adsense->code !!}
@else
<img src="{{asset('img/download.jpg')}}" style="width: 300px; height: 600px;"></tr>
@endif