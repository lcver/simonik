@include('_____FUNCTION.time-ago')
@php
if(session('logged')){
    $v = session('logged');
    echo timeAgo($v);
}
@endphp