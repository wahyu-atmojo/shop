<section class="wn__bestseller__area bg--white pt--80  pb--30">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section__title text-center">
					<h2 class="title__be--2">Semua <span class="color--theme">Produk</span></h2>
					<p>Produk UD. Tumbuh Jati Terbuat dari kayu pilihan serta di dibuat oleh para ahli kayu Jepara. Produk asli Jepara</p>
				</div>
			</div>
		</div>
		<div class="row mt--50">
			<div class="col-md-12 col-lg-12 col-sm-12">
				<div class="product__nav nav justify-content-center" role="tablist">
                    <a class="nav-item nav-link active btn btn-outline-warning" data-toggle="tab" href="#nav-all" role="tab">Semua Produk</a>
                    <!-- <a class="nav-item nav-link" data-toggle="tab" href="#nav-biographic" role="tab">BIOGRAPHIC</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-adventure" role="tab">ADVENTURE</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-children" role="tab">CHILDREN</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-cook" role="tab">COOK</a> -->
                </div>
			</div>
		</div>
		<div class="container">
			  <div class="row">
			  	@foreach($item as $i)
			    <div class="col-md-4">
			      <div class="thumbnail">
			        <a href="{{ route('detail-product', $i->id) }}">
			          <img src="{{ asset('produk/'.$i->image) }}" alt="Lights" style="width:100%">
			          <div class="caption">
			          	<div class="product product__style--3">
				            <div class="product__content content--center content--center">
								<h4><a href="{{ route('detail-product', $i->id) }}">{{$i->name}}</a></h4>
								<ul class="prize d-flex">
									@if($i->diskon > 0)
									<li>Rp. {{($i->price)-(($i->price * $i->diskon)/100)}}</li>
									<li class="old_prize">{{$i->price}}</li>
									@else
									<li>Rp. {{ number_format($i->price, 2, ',','.') }}</li>
									@endif
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
											<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
			          </div>
			        </a>
			      </div>
			    </div>
			    @endforeach

			  </div>
			</div>
			<!-- <div class="row">
				<div class="col-lg-12">
					<div class="section__title text-center">
		    			<button type="button" class="btn btn-outline-warning btn-lg">Semua Produk</button>
					</div>
				</div>
			</div> -->
		</div>
</section>