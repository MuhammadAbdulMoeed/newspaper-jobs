@php
$path = 'frontend.includes.'.$data;
           @endphp
           @isset($viewonly)
           @include($path)
           @else
           <tr><td colspan="4">
<center id="ad_r">
@include($path)
</center>
</td></tr>
           @endisset
           