<!doctype html>
<html class="no-js" lang="zxx">
@include('layouts.header')
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		@include('layouts.top-header')
		<!-- End Search Popup -->
        <!-- Start Slider area -->
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        	<!-- Start Single Slide -->
        	@include('layouts.slide')
            <!-- End Single Slide -->
        </div>
        <!-- End Slider area -->
		<!-- Start BEst Seller Area -->
		
		<!-- Start BEst Seller Area -->
		<!-- Start NEwsletter Area -->
		
		<!-- End NEwsletter Area -->
		<!-- Start Best Seller Area -->
		@include('layouts.all-product')
		<!-- Start BEst Seller Area -->
		<!-- Start Recent Post Area -->
		@include('layouts.our-blog')
		<!-- End Recent Post Area -->
		<!-- Best Sale Area -->
		@include('layouts.best-seller')
		<!-- Best Sale Area Area -->
		<!-- Footer Area -->
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			@include('layouts.footer')
		</footer>
		<!-- //Footer Area -->
		<!-- QUICKVIEW PRODUCT -->
		<div id="quickview-wrapper">
		    <!-- Modal -->
		    @include('layouts.quickview-modal')
		</div>
		<!-- END QUICKVIEW PRODUCT -->
	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	@include('layouts.script')
	
</body>
</html>