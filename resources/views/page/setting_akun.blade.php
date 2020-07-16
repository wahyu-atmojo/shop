<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
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
                        	<h2 class="bradcaump-title">Setting Akun</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Setting Akun</span>
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
        					<h3 class="onder__title">Setting Akun</h3>
        				</div>
					    <div id="accordion" class="checkout_accordion mt--30" role="tablist">
						    <div class="payment">
						        <div class="che__header" role="tab" id="headingOne">
						          	<a class="checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						                <span>Nama</span>
						          	</a>
						        </div>
						        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
					            	<div class="payment-body">{{ Auth::user()->name}}</div>
						        </div>
						        <div class="che__header" role="tab" id="headingOne">
						          	<a class="checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						                <span>Email</span>
						          	</a>
						        </div>
						        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
					            	<div class="payment-body">{{Auth::user()->email}}</div>
						        </div>
						        <div class="che__header" role="tab" id="headingOne">
						          	<a class="checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						                <span>Kota</span>
						          	</a>
						        </div>
						        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
					            	<div class="payment-body">{{Auth::user()->kota}}</div>
						        </div>
						        <div class="che__header" role="tab" id="headingOne">
						          	<a class="checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						                <span>Postal Code</span>
						          	</a>
						        </div>
						        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
					            	<div class="payment-body">{{Auth::user()->postal_code}}</div>
						        </div>
						        <div class="che__header" role="tab" id="headingOne">
						          	<a class="checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						                <span>Nomor Telepon</span>
						          	</a>
						        </div>
						        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
					            	<div class="payment-body">{{Auth::user()->phone}}</div>
						        </div>
						        <div class="che__header" role="tab" id="headingOne">
						          	<a class="checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						                <span>Alamat</span>
						          	</a>
						        </div>
						        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
					            	<div class="payment-body">{{Auth::user()->alamat}}</div>
						        </div>
						        <div class="che__header" role="tab" id="headingOne" style="background: red">
						          	<a class="checkout__title" aria-expanded="true" aria-controls="collapseOne" style="background: #d2691e" data-toggle="modal" data-target="#exampleModal">
						                <center><span>Edit Akun</span></center>
						          	</a>
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

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Edit Akun</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="{{ route('proses-akun', Auth::user()->id) }}" method="POST">
            		{{ csrf_field() }}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama</label>
				    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama" name="nama" value="{{ Auth::user()->name }}">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email</label>
				    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan email" name="email" value="{{ Auth::user()->email }}">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Kota</label>
				    <input type="text" class="form-control" id="kota" aria-describedby="emailHelp" placeholder="Masukkan kota" name="kota" value="{{ Auth::user()->kota}}">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Postal Code</label>
				    <input type="text" class="form-control" id="postal" aria-describedby="emailHelp" placeholder="Masukkan Postal Code" name="postal" value="{{ Auth::user()->postal_code }}">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nomor Telepon</label>
				    <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Masukkan nomor Telepon" name="phone" value="{{ Auth::user()->phone }}">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Alamat</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="alamat" aria-describedby="emailHelp" placeholder="Masukkan Alamat" name="alamat" value="{{ Auth::user()->alamat }}"></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary">Simpan</button>
				</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
</div>

	<!-- //Main wrapper -->

	<!-- JS Files -->
	@include('page.layouts.script')
	<script>
	// Add the following code if you want the name of the file appear on select
	$(".custom-file-input").on("change", function() {
	  var fileName = $(this).val().split("\\").pop();
	  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});
	</script>
</body>
</html>