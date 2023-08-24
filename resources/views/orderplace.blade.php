<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Coffee Shop | Cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="#" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/shop.css" type="text/css" media="screen" property="" />
	<link href="css/style7.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->
	<div class="banner_top innerpage" id="home">
		<!-- Header -->
		@include('cusheader')
		<!-- //Header -->
		<!-- cart details -->
		<!-- <form method="get" class="" action="order" target="">    <button type="button" class="sbmincart-closer">×</button>    
					<ul>    
					@if(Session::has('cart'))            
						<li class="sbmincart-item">            
							<div class="sbmincart-details-name">    
							@foreach ($products as $item)           
								<a class="sbmincart-name" href="">{{$item['name']}}</a>               
								<ul class="sbmincart-attributes">                                                                            

								</ul>            
							</div>        

							<div class="sbmincart-details-quantity">                
								<input class="sbmincart-quantity" data-sbmincart-idx="0" name="quantity_1" type="text" pattern="[0-9]*" value="{{$item['qty']}}" autocomplete="off">           
							</div>            
							<div class="sbmincart-details-remove">               
								<button type="button" class="sbmincart-remove" data-sbmincart-idx="0">×</button>           
							</div>           
							<div class="sbmincart-details-price">               
								<span class="sbmincart-price">{{$totalPrice}}</span>           
							</div>            
							
							<input type="hidden" name="shoe_item_1" value="Cappuccino">           
							<input type="hidden" name="amount_1" value="120">           
							<input type="hidden" name="shipping_1" value="undefined">           
							<input type="hidden" name="shipping2_1" value="undefined">        
						</li>            
						@endforeach
					</ul>   
					@else
                    @endif
								 <div class="sbmincart-footer">                   
									  <div class="sbmincart-subtotal"> Subtotal: $240.00 USD </div>            
									  <button class="sbmincart-submit" href="order">Check Out</button>            
									</div>    <input type="hidden" name="cmd" value="_cart">    
									<input type="hidden" name="upload" value="1">            
					<input type="hidden" name="bn" value="sbmincart_AddToCart_WPS_US">    
				</form> -->

		<!-- //cart details -->
		<!-- search -->

		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="index">Home</a><i>|</i></li>
					<li>Cart</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3>Chec<span>kout</span></h3>

				<div class="checkout-right">
					<h4>Your shopping cart contains: <span></span></h4>

					@if(Session::has('cart'))
					<table class="timetable_sub">
						<thead>
							<tr>

								<th>Type</th>
								<th>Product</th>
								<th>Name</th>
								<th width="20%">Details</th>
								<th>Quantity</th>

								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead>

						<!--  -->
						<tbody>
							@foreach ($products as $item)
							<tr class="rem1">

								<td class="invert">{{$item['type']}}</td>

								<td class="invert-image"><a href="#"><img src="{{$item['pic']}}" alt=" " class="img-responsive"></a></td>
								<td class="invert">{{$item['name']}}</td>
								<td class="invert">{{$item['info']}}</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<!-- <div class="entry value-minus">&nbsp;</div> -->
											<div class="entry value"><span>{{$item['qty']}}</span></div>
											<!-- <div class="entry value-plus active">&nbsp;</div> -->
										</div>
									</div>
								</td>


								<td class="invert">{{$item['price']}}</td>
								<!-- <td class="invert">
									<div class="rem">
										<div class="close1"> </div>
									</div>

								</td> -->
								<td class="invert">
									<div class="rem">
										<a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white" href="reduce/{{$item['id']}}">remove </a>
									</div>
								</td>
								<!-- <td><a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/reduce/{{$item['id']}}" style="font-size: 14px; padding: 0 5px ">Reduce one</a>
                                    <a class="dropdown-item" href="#"style="font-size: 14px;padding: 0 5px ">#</a>     
                                </div></td> -->
								@endforeach
							</tr>
							<!--  -->
							@else
							@endif



						</tbody>
					</table>
				</div>
				<div class="checkout-left">
					<form action="cnfmOrder" onsubmit="false" method="post">
						<div class="col-md-4 checkout-left-basket">
							<h4>Continue to basket</h4>

							@foreach ($products as $item)
							<ul>

								<li>
									<input class="billing-address-name form-control" type="hidden" name="productId" value="{{$item['id']}}">
								</li>
								<li name="item">{{$item['name']}} <i>-</i> <span>{{$item['price']}} </span></li>
								<input class="billing-address-name form-control" type="hidden" name="qty" value="{{$item['qty']}}">
								@endforeach

								<li style="border-bottom: 1px solid #DDD; margin: 2em 0 0;">Item Price<i>-</i> <span>{{$totalPrice}}.00 </span></li>


								@csrf

								<li style=" margin: 2em 0 0">Discount <i>-</i> <span>10%</span></li>

								<input class="billing-address-name form-control" type="hidden" name="discount" value="{{$discount}}">
								<li> <span name="discount">-{{$discount}}.00 Rupiah </span></li>
								<input class="billing-address-name form-control" type="hidden" name="charge" value="{{$charge}}">
								<li style=" margin: 2em 0 0">Service Charges <i>-</i> <span name="charge">{{$charge}}.00 </span></li>
								<li style=" margin: 2em 0 0">
									<label style="color: #af0be4">Apply Voucher </label>
									<select class="form-control option-w3ls" style="padding: 0 5px">
										<option>Morning 50/= </option> <span>50.00 </span>
										<option>Evening 20/=</option> <span>20.00</span>


									</select>
								</li>


								<input class="billing-address-name form-control" type="hidden" name="total" value="{{$total}}">
								<li style="font-size: 1em;color: #212121;font-weight: 600;padding: 1em 0;border-top: 1px solid #DDD;border-bottom: 1px solid #DDD; margin: 2em 0 0;}">
									Total <i>-</i> <span name="total">{{$total}}.00 Rupiah</span>
								</li>
								<!-- <div><li style="text-align: end; margin-top: 10px"><button class="btn btn-success" href="#">Check Out</button><li></div> -->


							</ul>

						</div>
						<div class="col-md-8 address_form">
							<h4>Add a new Details</h4>
							<div class="card_number_grids">
								<div class="card_number_grid_left">
									<div class="controls">
										<label class="control-label">Mobile number:</label>
										<textarea class="form-control" name="DelAddress" type="text" placeholder="+62" required=""></textarea>
									</div>
								</div>
							</div>
							<div class="controls">
								<label class="control-label">Delivery Address: </label>
								<textarea class="form-control" name="DelAddress" type="text" placeholder="House, Road, Block, City" required=""></textarea>
							</div>
							<!-- <button class="submit check_out">Delivery to this Address</button> -->
							<div class="checkout-right-basket">
										<button class="btn btn-success" type="button">Check Out</button>
							<!-- <input id="btnSubmit"  class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full" name="submit">							 -->
							</div>

							<!-- <section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">Full name: </label>
											@foreach (session('user') as $item)
										</div>
										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="controls">
													<label class="control-label">Mobile number:</label>

												</div>
											</div>
										</div>
										<div class="controls">
											<label class="control-label">Delivery Address: </label>
											<textarea class="form-control" name="DelAddress" type="text" placeholder="House, Road, Block, City" required=""></textarea>
										</div>

										@endforeach
										<div class="controls">
											<label class="control-label">Address type: </label>
											<select class="form-control option-w3ls" style="padding: 0 5px;">
												<option>Office</option>
												<option>Home</option>
												<option>Commercial</option>

											</select>
										</div>
									</div> -->
							<!-- <button class="submit check_out">Delivery to this Address</button> -->
							<!-- <div class="checkout-right-basket">
										<button class="btn btn-success" type="submit">Check Out</button>
							<input id="btnSubmit"  class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full" name="submit" value="Make a Payment">							 -->
							<!-- </div>
								</div>
							</section> -->

							<!-- <div class="checkout-right-basket">
							<input id="btnSubmit" type="submit"  class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full" name="submit" value="Make a Payment">
								
							</div> -->
							<!-- <a href="payment">Make a Payment </a> -->
						</div>

						<div class="clearfix"> </div>


						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
		<!-- //top products -->
		@include('cusfooter')
		<!-- //footer -->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!-- js -->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- //js -->
		<!-- cart-js -->
		<!-- <script src="js/minicart.js"></script> -->
		<script>
			shoe.render();

			shoe.cart.on('shoe_checkout', function(evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
				}
			});
		</script>
		<!-- //cart-js -->
		<!-- /nav -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/demo1.js"></script>
		<!-- //nav -->
		<!--search-bar-->
		<script src="js/search.js"></script>
		<!--//search-bar-->
		<!--quantity-->
		<script>
			$('.value-plus').on('click', function() {
				var divUpd = $(this).parent().find('.value'),
					newVal = parseInt(divUpd.text(), 10) + 1;
				divUpd.text(newVal);
			});

			$('.value-minus').on('click', function() {
				var divUpd = $(this).parent().find('.value'),
					newVal = parseInt(divUpd.text(), 10) - 1;
				if (newVal >= 1) divUpd.text(newVal);
			});
		</script>
		<!--quantity-->
		<script>
			$(document).ready(function(c) {
				$('.close1').on('click', function(c) {
					$('.rem1').fadeOut('slow', function(c) {
						$('.rem1').remove();
					});
				});
			});
		</script>
		<script>
			$(document).ready(function(c) {
				$('.close2').on('click', function(c) {
					$('.rem2').fadeOut('slow', function(c) {
						$('.rem2').remove();
					});
				});
			});
		</script>
		<script>
			$(document).ready(function(c) {
				$('.close3').on('click', function(c) {
					$('.rem3').fadeOut('slow', function(c) {
						$('.rem3').remove();
					});
				});
			});
		</script>

		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 1000);
				});
			});
		</script>
		<!-- //end-smoth-scrolling -->
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>

</html>