<?php
$adsense = App\AdsenseCode::where('size' , '348x340')->inRandomOrder()->first();
?>
@if(!empty($adsense))
{!! $adsense->code !!}
@else
<img src="{{asset('img/download.jpg')}}" style="width: 348px; height: 340px;"></tr>
@endif