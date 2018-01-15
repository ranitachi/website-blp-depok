<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')
    @include('front.includes.headstyle')
</head>
<body>

<!-- wrapper start -->
<div class="wrapper"> 
  @include('front.includes.header')

  @include('front.includes.navbar')
  
  @yield('content')
  
  @include('front.includes.footer')
</div>
<!-- wrapper end --> 

<!-- jQuery --> 
<script src="{{asset('front/js/jquery.min.js')}}"></script> 
<!--jQuery easing--> 
<script src="{{asset('front/js/jquery.easing.1.3.js')}}"></script> 
<!-- bootstrab js --> 
<script src="{{asset('front/js/bootstrap.js')}}"></script> 
<!--style switcher--> 
<script src="{{asset('front/js/style-switcher.js')}}"></script> <!--wow animation--> 
<script src="{{asset('front/js/wow.min.js')}}"></script> 
<!-- time and date --> 
<script src="{{asset('front/js/moment.min.js')}}"></script> 
<!--news ticker--> 
<script src="{{asset('front/js/jquery.ticker.js')}}"></script> 
<!-- owl carousel --> 
<script src="{{asset('front/js/owl.carousel.js')}}"></script> 
<!-- magnific popup --> 
<script src="{{asset('front/js/jquery.magnific-popup.js')}}"></script> 
<!-- weather --> 
<script src="{{asset('front/js/jquery.simpleWeather.min.js')}}"></script> 
<!-- calendar--> 
<script src="{{asset('front/js/jquery.pickmeup.js')}}"></script> 
<!-- go to top --> 
<script src="{{asset('front/js/jquery.scrollUp.js')}}"></script> 
<!-- scroll bar --> 
<script src="{{asset('front/js/jquery.nicescroll.js')}}"></script> 
<script src="{{asset('front/js/jquery.nicescroll.plus.js')}}"></script> 
<!--masonry--> 
<script src="{{asset('front/js/masonry.pkgd.js')}}"></script> 
<!--media queries to js--> 
<script src="{{asset('front/js/enquire.js')}}"></script> 
<!--custom functions--> 
<script src="{{asset('front/js/custom-fun.js')}}"></script>
</body>
<script type="text/javascript">
  var APP_URL = {!! json_encode(url('/')) !!}
  $.ajaxSetup({
			headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
	});
</script>
</html>