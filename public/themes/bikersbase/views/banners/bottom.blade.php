@if(isset($banners['bottom']))
	<section>
	  <div class="container">
    	  <div class="space20"></div>
	      <div class="row space20">
	        @foreach($banners['bottom'] as $banner)
	          @include('layouts.banner', $banner)
	        @endforeach
	    </div><!-- /.row -->
	  </div><!-- /.container -->
	</section>
@endif