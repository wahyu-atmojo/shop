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
<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Checkout</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Checkout</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Checkout Area -->
        <section class="wn__checkout__area section-padding--lg bg__white">
        	<div class="container">
        		{{-- <div class="row">
        			<div class="col-lg-12">
        				<div class="wn_checkout_wrap">
        					<div class="checkout_info">
        						<span>Returning customer ?</span>
        						<a class="showlogin" href="#">Click here to login</a>
        					</div>
        					<div class="checkout_login">
        						<form class="wn__checkout__form" action="#">
        							<p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>

        							<div class="input__box">
        								<label>Username or email <span>*</span></label>
        								<input type="text">
        							</div>

        							<div class="input__box">
        								<label>password <span>*</span></label>
        								<input type="password">
        							</div>
        							<div class="form__btn">
        								<button>Login</button>
        								<label class="label-for-checkbox">
        									<input id="rememberme" name="rememberme" value="forever" type="checkbox">
        									<span>Remember me</span>
        								</label>
        								<a href="#">Lost your password?</a>
        							</div>
        						</form>
        					</div>
        					<div class="checkout_info">
        						<span>Have a coupon? </span>
        						<a class="showcoupon" href="#">Click here to enter your code</a>
        					</div>
        					<div class="checkout_coupon">
        						<form action="#">
        							<div class="form__coupon">
        								<input type="text" placeholder="Coupon code">
        								<button>Apply coupon</button>
        							</div>
        						</form>
        					</div>
        				</div>
        			</div>
        		</div> --}}
        		<div class="row">
        			{{-- <div class="col-lg-6 col-12">
        				<div class="customer_details">
        					<h3>Billing details</h3>
        					<div class="customar__field">
        						<div class="margin_between">
	        						<div class="input_box space_between">
	        							<label>First name <span>*</span></label>
	        							<input type="text">
	        						</div>
	        						<div class="input_box space_between">
	        							<label>last name <span>*</span></label>
	        							<input type="text">
	        						</div>
        						</div>
        						<div class="input_box">
        							<label>Company name <span>*</span></label>
        							<input type="text">
        						</div>
        						<div class="input_box">
        							<label>Country<span>*</span></label>
        							<select class="select__option">
										<option>Select a country…</option>
										<option>Afghanistan</option>
										<option>American Samoa</option>
										<option>Anguilla</option>
										<option>American Samoa</option>
										<option>Antarctica</option>
										<option>Antigua and Barbuda</option>
        							</select>
        						</div>
        						<div class="input_box">
        							<label>Address <span>*</span></label>
        							<input type="text" placeholder="Street address">
        						</div>
        						<div class="input_box">
        							<input type="text" placeholder="Apartment, suite, unit etc. (optional)">
        						</div>
        						<div class="input_box">
        							<label>District<span>*</span></label>
        							<select class="select__option">
										<option>Select a country…</option>
										<option>Afghanistan</option>
										<option>American Samoa</option>
										<option>Anguilla</option>
										<option>American Samoa</option>
										<option>Antarctica</option>
										<option>Antigua and Barbuda</option>
        							</select>
        						</div>
								<div class="input_box">
									<label>Postcode / ZIP <span>*</span></label>
									<input type="text">
								</div>
								<div class="margin_between">
									<div class="input_box space_between">
										<label>Phone <span>*</span></label>
										<input type="text">
									</div>

									<div class="input_box space_between">
										<label>Email address <span>*</span></label>
										<input type="email">
									</div>
								</div>
        					</div>
        					<div class="create__account">
        						<div class="wn__accountbox">
	        						<input class="input-checkbox" name="createaccount" value="1" type="checkbox">
	        						<span>Create an account ?</span>
        						</div>
        						<div class="account__field">
        							<form action="#">
        								<label>Account password <span>*</span></label>
        								<input type="text" placeholder="password">
        							</form>
        						</div>
        					</div>
        				</div>
        				<div class="customer_details mt--20">
        					<div class="differt__address">
	        					<input name="ship_to_different_address" value="1" type="checkbox">
	        					<span>Ship to a different address ?</span>
        					</div>
        					<div class="customar__field differt__form mt--40">
        						<div class="margin_between">
	        						<div class="input_box space_between">
	        							<label>First name <span>*</span></label>
	        							<input type="text">
	        						</div>
	        						<div class="input_box space_between">
	        							<label>last name <span>*</span></label>
	        							<input type="text">
	        						</div>
        						</div>
        						<div class="input_box">
        							<label>Company name <span>*</span></label>
        							<input type="text">
        						</div>
        						<div class="input_box">
        							<label>Country<span>*</span></label>
        							<select class="select__option">
										<option>Select a country…</option>
										<option>Afghanistan</option>
										<option>American Samoa</option>
										<option>Anguilla</option>
										<option>American Samoa</option>
										<option>Antarctica</option>
										<option>Antigua and Barbuda</option>
        							</select>
        						</div>
        						<div class="input_box">
        							<label>Address <span>*</span></label>
        							<input type="text" placeholder="Street address">
        						</div>
        						<div class="input_box">
        							<input type="text" placeholder="Apartment, suite, unit etc. (optional)">
        						</div>
        						<div class="input_box">
        							<label>District<span>*</span></label>
        							<select class="select__option"> 
										<option>Select a country…</option>
										<option>Afghanistan</option>
										<option>American Samoa</option>
										<option>Anguilla</option>
										<option>American Samoa</option>
										<option>Antarctica</option>
										<option>Antigua and Barbuda</option>
        							</select>
        						</div>
								<div class="input_box">
									<label>Postcode / ZIP <span>*</span></label>
									<input type="text">
								</div>
								<div class="margin_between">
									<div class="input_box space_between">
										<label>Phone <span>*</span></label>
										<input type="text">
									</div>
									<div class="input_box space_between">
										<label>Email address <span>*</span></label>
										<input type="email">
									</div>
								</div>
        					</div>
        				</div>
        			</div> --}}
        			<div class="col-lg-12 col-12 md-mt-40 sm-mt-40">
        				<div class="wn__order__box">
        					<h3 class="onder__title">Pembelian Anda</h3>
        					<ul class="order__total">
        						<li>Produk</li>
        						<li>Total</li>
        					</ul>
        					<ul class="order_product">
        						@if(session('cart'))
            						@foreach(session('cart') as $id => $details)
        								<li>{{ $details['name'] }} × {{ $details['quantity'] }}<span>Rp. {{ $details['quantity'] * $details['price'] }}</span></li>
        							@endforeach
        						@endif
        					</ul>
        					<ul class="shipping__method">
        						<li>SubTotal Keranjang <span>Rp. {{ $subtotal }}</span></li>
        						<li>Pengiriman 
        							<ul>
        								<li>
        									<input name="shipping_method[0]" data-index="0" value="legacy_flat_rate" checked="checked" type="radio">
        									@if($kota)
        									<label>Rp. 200000</label>
        									@else
        									<label>Rp. 300000</label>
        									@endif
        								</li>
        								{{-- <li>
        									<input name="shipping_method[0]" data-index="0" value="legacy_flat_rate" checked="checked" type="radio">
        									<label>Flat Rate: $48.00</label>
        								</li> --}}
        							</ul>
        						</li>
        					</ul>
        					<ul class="total__amount">
        						@if($kota)
        						<li>Total Pesanan <span>Rp. {{ $subtotal + 200000 }}</span></li>
        						@else
        						<li>Total Pesanan <span>Rp. {{ $subtotal + 300000 }}</span></li>
        						@endif
        					</ul>
        				</div>
					    <div id="accordion" class="checkout_accordion mt--30" role="tablist">
						    <div class="payment">
						        <div class="che__header" role="tab" id="headingOne">
						          	<a class="checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						                <span>Rekening Bank Transfer</span>
						          	</a>
						        </div>
						        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
					            	<div class="payment-body">Lakukan pembayaran Anda langsung ke rekening bank kami. Pesanan Anda tidak akan dikirim sampai dana telah dikirim ke rekening kami.</div>
						        </div>
						    </div>
						    {{-- <div class="payment">
						        <div class="che__header" role="tab" id="headingTwo">
						          	<a class="collapsed checkout__title" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							            <span>Cheque Payment</span>
						          	</a>
						        </div>
						        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
					          		<div class="payment-body">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</div>
						        </div>
						    </div> --}}
						    {{-- <div class="payment">
						        <div class="che__header" role="tab" id="headingThree">
						          	<a class="collapsed checkout__title" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							            <span>Cash on Delivery</span>
						          	</a>
						        </div>
						        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
					          		<div class="payment-body">Pay with cash upon delivery.</div>
						        </div>
						    </div> --}}
						    <div class="payment">
						        <div class="che__header" role="tab" id="headingFour">
						          	<a class="collapsed checkout__title" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							            <span><img src="{{ asset('icons/bni.png') }}" style="width: 100px; height: 50px" alt="payment images"> </span>
						          	</a>
						        </div>
						        {{-- <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
					          		<div class="payment-body">BRI</div>
						        </div> --}}
						    </div>
						    <div class="payment" >
						        <div class="che__header" role="tab" id="headingFour">
						          	<a class="collapsed checkout__title"  href="{{ route('proses_checkout', Auth::user()->id) }}"  style="background-color: #d2691e">
						          		<center><span>Bayar</span></center>
						          	</a>
						        </div>
						        {{-- <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
					          		<div class="payment-body">BRI</div>
						        </div> --}}
						    </div>
					    </div>

        			</div>
        		</div>
        	</div>
        </section>
        <!-- End Checkout Area -->
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
</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	@include('page.layouts.script')
	
	
</body>
</html>