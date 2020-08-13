<!doctype html>
<html class="no-js" lang="zxx">
@include('page.layouts.header')
<div class="wrapper" id="wrapper">
	@include('page.layouts.top-header')
	<div class="ht__bradcaump__area bg-image--5">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-12">
	                <div class="bradcaump__inner text-center">
	                	<h2 class="bradcaump-title">Gallery</h2>
	                    <nav class="bradcaump-content">
	                      <a class="breadcrumb_item" href="index.html">Home</a>
	                      <span class="brd-separetor">/</span>
	                      <span class="breadcrumb_item active">Gallery</span>
	                    </nav>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
    <!-- End Bradcaump area -->
    <!-- Start Contact Area -->
    <section class="wn_contact_area bg--white pt--80 pb--80">
	<div class="container">
      <h2>Gallery</h2>
      <div style="padding-bottom: 30px">
          <p>Berikut beberapa foto produksi dari bengkel UD. Tumbuh Jati.</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="{{ asset('main/images/5.jpg')}}" target="_blank">
              <img src="{{ asset('main/images/5.jpg')}}" alt="Proses produksi" style="width:100%">
              <div class="caption">
                <p>Foto pembuatan produk di bengkel UD. Tumbuh Jati.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="{{ asset('main/images/2.jpg')}}" target="_blank">
              <img src="{{ asset('main/images/2.jpg')}}" alt="Proses produksi" style="width:100%">
              <div class="caption">
                <p>Foto pembuatan produk di bengkel UD. Tumbuh Jati.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="{{ asset('main/images/3.jpg')}}" target="_blank">
              <img src="{{ asset('main/images/3.jpg')}}" alt="Proses produksi" style="width:100%">
              <div class="caption">
                <p>Foto pembuatan produk di bengkel UD. Tumbuh Jati.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="{{ asset('main/images/4.jpg')}}" target="_blank">
              <img src="{{ asset('main/images/3.jpg')}}" alt="Proses produksi" style="width:100%">
              <div class="caption">
                <p>Foto pembuatan produk di bengkel UD. Tumbuh Jati.</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- End Contact Area -->
	<!-- Footer Area -->
	<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="index.html">
										<!-- <img src="images/logo/3.png" alt="logo"> -->UD. Tumbuh Jati
									</a>
									<p>Produk UD. Tumbuh Jati Terbuat dari kayu pilihan serta di dibuat oleh para ahli kayu Jepara. Produk asli Jepara</p>
									
								</div>
								<div class="footer__content">
									<ul class="social__net social__net--2 d-flex justify-content-center">
										<li><a href="#"><i class="bi bi-facebook"></i></a></li>
										<li><a href="#"><i class="bi bi-google"></i></a></li>
										<li><a href="#"><i class="bi bi-twitter"></i></a></li>
										<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
										<li><a href="#"><i class="bi bi-youtube"></i></a></li>
									</ul>
									<!-- <ul class="mainmenu d-flex justify-content-center">
										<li><a href="index.html">Trending</a></li>
										<li><a href="index.html">Best Seller</a></li>
										<li><a href="index.html">All Product</a></li>
										<li><a href="index.html">Wishlist</a></li>
										<li><a href="index.html">Blog</a></li>
										<li><a href="index.html">Contact</a></li>
									</ul> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">
								<div class="copy__right__inner text-left">
									<p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">UD. Tumbuh Jati.</a> <!-- All Rights Reserved --></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="payment text-right">
								<img src="images/icons/payment.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	<!-- //Footer Area -->

</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	@include('page.layouts.script')
	
	
</body>
</html>
	    <!-- Google Map js -->