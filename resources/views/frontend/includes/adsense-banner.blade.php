<?php
$adsense = App\AdsenseCode::inRandomOrder()->first();
?>

<style type="text/css">
	.image { 
   position: relative; 
   width: 100%; /* for IE 6 */
}

h2 { 
   position: absolute; 
   top: 200px; 
   left: 0; 
   width: 100%; 
}
</style>

<div class="image">
<img src="{{asset('public/images.jpg')}}" width="100%" height="200px">
</div>