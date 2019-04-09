<?php
$adsense = App\AdsenseCode::where('size' , '700x90')->inRandomOrder()->first();
?>
@if(!empty($adsense))
<div style="min-width: 700px;">
{!! $adsense->code !!}
</div>
@else
<img src="{{asset('img/download.jpg')}}" style="width: 700px; max-height: 90px;"></tr>
@endif