<?php
$adsense = App\AdsenseCode::inRandomOrder()->first();
?>
@if(!empty($adsense))
{!! $adsense->code !!}
@else
<img src="{{asset('public/images.jpg')}}" width="100%" height="200px">
@endif