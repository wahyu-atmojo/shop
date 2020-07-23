<!doctype html>
<html class="no-js" lang="zxx">
@include('page.layouts.header')
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		
		<!-- Header -->
		@include('page.layouts.top-header')
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Keranjang</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Keranjang</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top: 10px;">
        	<center>
		         @if ($message = Session::get('success'))
			      <div class="alert alert-success alert-block">
			        <button type="button" class="close" data-dismiss="alert">×</button> 
			          <strong>{{ $message }}</strong>
			      </div>
			    @endif

			    @if ($message = Session::get('error'))
			      <div class="alert alert-danger alert-block">
			        <button type="button" class="close" data-dismiss="alert">×</button> 
			        <strong>{{ $message }}</strong>
			      </div>
			    @endif

			    @if ($message = Session::get('warning'))
			      <div class="alert alert-warning alert-block">
			        <button type="button" class="close" data-dismiss="alert">×</button> 
			        <strong>{{ $message }}</strong>
			    </div>
			    @endif

			    @if ($message = Session::get('info'))
			      <div class="alert alert-info alert-block">
			        <button type="button" class="close" data-dismiss="alert">×</button> 
			        <strong>{{ $message }}</strong>
			      </div>
			    @endif

			    @if ($errors->any())
			      <div class="alert alert-danger">
			        <button type="button" class="close" data-dismiss="alert">×</button> 
			        Please check the form below for errors
			    </div>
			    @endif
			</center>
		</div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                        <form action="#">               
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-name">Kode Transaksi</th>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Satuan</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	{{-- {{dd($transaksi)}} --}}
			            				@foreach($transaksi as $id => $details)
                                    	{{-- {{dd($details['subtotal'])}} --}}
	                                        <tr>

                                    			<td class="product-name"><a href="#">{{ $details['kode_transaksi'] }}</a></td>
	                                            <td class="product-thumbnail"><img src="{{ asset('produk/'.$details['image_produk']) }}" alt="product img"></td>
	                                            <td class="product-name"><a href="#">{{ $details['keterangan_produk'] }}</a></td>
	                                            <td class="product-price"><span class="amount">{{ $details['subtotal'] }}</span></td>
	                                            <td class="product-quantity">{{ $details['quantity'] }}</td>
	                                            <td class="product-subtotal">{{ $details['quantity'] * $details['subtotal'] }}</td>
				                               
	                                        </tr>
					                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form> 
                        <div class="cartbox__btn">
                            <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                <!-- <li><a href="#">Coupon Code</a></li>
                                <li><a href="#">Apply Code</a></li>
                                <li><a href="#">Update Cart</a></li>
                                <li><a href="#">Check Out</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Cart total</li>
                                    <li>Sub Total</li>
                                </ul>
                                <ul class="cart__total__tk">
                                    <li>{{ $total }} Produk</li>
                                    <li>Rp. {{ $subtotal }}</li>
                                </ul>
                            </div>
                            <div class="cart__total__amount">
                                <span>Total</span>
                                <span>Rp. {{ $subtotal }}</span>
                            </div>
                        </div>
                        <div class="cartbox__total__area">
			                <div class="product__info__main">
				                <div class="box-tocart d-flex justify-content-between">
					                <div class="addtocart__actions">
										<a href="{{ route('bukti_transfer') }}" class="tocart cart-style"  type="submit" title="CheckOut">Upload Bukti Transfer</a>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
                
            </div>  
        </div>
        <!-- cart-main-area end -->
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
									<p>Copyright <i class="fa fa-copyright"></i> <a href="#">UD. Tumbuh Jati.</a> <!-- All Rights Reserved --></p>
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