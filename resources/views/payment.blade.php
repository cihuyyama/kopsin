<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Coffee Shop | Payment </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="#" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
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
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />

	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->
<div class="banner_top innerpage" id="home">
       @include('cusheader')
		<!-- //cart details -->
		<!-- search -->

		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="index">Home</a><i>|</i></li>
					<li>Payment</li>
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
				<h3>Pay<span>ment</span></h3>
				<div class="alert alert-success fade show " aria-hidden="true">
                            <span class="close" data-dismiss="alert" aria-hidden="true">×</span>
                            <strong style="text-align:center;background: #b3e6e6; color: green;" aria-hidden="true">{{Session::get('orderConfirm')}}</strong>
                            <a href="#" class="alert-link"></a>
               </div>
				<!--/tabs-->
				<div class="responsive_tabs">
					<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Cash on delivery (COD)</li>
							<li>Credit/Debit</li>
							<li>Bikash</li>
							
						</ul>
						<div class="resp-tabs-container">
							<!--/tab_one-->
						
							<div class="tab1">
								<div class="pay_info">
								    <form action="payment" method="post">
										<div class="vertical_post check_box_agile">
											<h5>COD</h5>
											<div class="checkbox">
												@csrf
												<input class="billing-address-name form-control" type="hidden" type="number" name="order_id" value="{{$order_id}}">
											 <h5>Your Total Amount: <b><span name="total" style=" color: #fc636b;">{{$total}}</span></b>  Taka</h5> 
											 <input class="billing-address-name form-control" type="hidden" type="number" name="total" value="{{$total}}">
											 <h5>Service charge:  <b><span name="total" style=" color: #fc636b;">{{$charge}}</span></b>  Taka</h5>
											 <input class="billing-address-name form-control" type="hidden" type="number" name="charge" value="{{$charge}}">
											 <h5>Discount:  <b><span name="total" style=" color: #fc636b;">{{$discount}}</span></b> Taka</h5>
											 <input class="billing-address-name form-control" type="hidden" type="number" name="discount" value="{{$discount}}">
												<div class="check_box_one cashon_delivery">
												<input class="billing-address-name form-control" type="hidden" type="text" name="type" value="COD">
													<!-- <label class="anim">
																	<input type="checkbox" class="checkbox">
																	<span> We also accept Credit/Debit card on delivery. Please Check with the agent.</span> 
																</label> -->
												</div>
												<input type="submit"  value="Confirm Now">

											</div>
										</div>
									</form>
								</div>

							</div>
							<!--//tab_one-->
							<div class="tab2">
								<div class="pay_info">
								<form action="payment" method="post" class="creditly-card-form agileinfo_form">
								@csrf
								<input class="billing-address-name form-control" type="hidden" type="number" name="order_id" value="{{$order_id}}">
										<section class="creditly-wrapper wthree, w3_agileits_wrapper">
											<div class="credit-card-wrapper">
											<h5>Your Total Amount: <b><span name="total" style=" color: #fc636b;">{{$total}}</span></b>  Taka</h5> 
											 <input class="billing-address-name form-control" type="hidden" type="number" name="total" value="{{$total}}">
											 <h5>Service charge:  <b><span name="total" style=" color: #fc636b;">{{$charge}}</span></b>  Taka</h5>
											 <input class="billing-address-name form-control" type="hidden" type="number" name="charge" value="{{$charge}}">
											 <h5>Discount:  <b><span name="total" style=" color: #fc636b;">{{$discount}}</span></b> Taka</h5>
											 <input class="billing-address-name form-control" type="hidden" type="number" name="discount" value="{{$discount}}">
												<div class="first-row form-group">
													<div class="controls">
														<label class="control-label">Name on Card</label>
														<input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
													</div>
													<div class="w3_agileits_card_number_grids">
														<div class="w3_agileits_card_number_grid_left">
															<div class="controls">
																<label class="control-label">Card Number</label>
																<input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
																    autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
															</div>
														</div>
														<div class="w3_agileits_card_number_grid_right">
															<div class="controls">
																<label class="control-label">CVV</label>
																<input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
															</div>
														</div>
														<div class="clear"> </div>
													</div>
													<div class="controls">
														<label class="control-label">Expiration Date</label>
														<input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
													</div>
												</div>

												<input class="billing-address-name form-control" type="hidden" type="text" name="type" value="CARD">
												<!-- <button class="submit"><span>Make a payment </span></button> -->
												<input type="submit" value="PAY NOW">
											</div>
										</section>
									</form>

								</div>
							</div>
							<div class="tab3">

								<div class="pay_info">
									<div class="vertical_post">
										<form action="payment" method="post">
											<h5>Bikash</h5>
											@csrf
											
											<input class="billing-address-name form-control" type="hidden" type="text" name="type" value="Bikash">
											<input class="billing-address-name form-control" type="hidden" type="number" name="order_id" value="{{$order_id}}">

											<h5>Your Total Amount: <b><span name="total" style=" color: #fc636b;">{{$total}}</span></b>  Taka</h5> 
											 <input class="billing-address-name form-control" type="hidden" type="number" name="total" value="{{$total}}">
											 <h5>Service charge:  <b><span name="total" style=" color: #fc636b;">{{$charge}}</span></b>  Taka</h5>
											 <input class="billing-address-name form-control" type="hidden" type="number" name="charge" value="{{$charge}}">
											 <h5>Discount:  <b><span name="total" style=" color: #fc636b;">{{$discount}}</span></b> Taka</h5>
											 <input class="billing-address-name form-control" type="hidden" type="number" name="discount" value="{{$discount}}">
											<div class="swit-radio">
												<!-- <div class="check_box_one">
													<div class="radio_one"> <label><input type="radio" name="radio" checked=""><i></i>Syndicate Bank</label> </div>
												</div> -->
												
											</div>
											
											<input type="submit" value="PAY NOW">
										</form>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<!--//tabs-->
			</div>

		</div>
		<!-- //payment -->

		<div class="clearfix"></div>
	</div>
	<!-- //top products -->
    <!-- //footer -->
    @include('cusfooter')
	<!-- //footer -->
   <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function (evt) {
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
	<!-- easy-responsive-tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>

	<!-- credit-card -->
	<script type="text/javascript" src="js/creditly.js"></script>
	<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />

	<script type="text/javascript">
		$(function () {
			var creditly = Creditly.initialize(
				'.creditly-wrapper .expiration-month-and-year',
				'.creditly-wrapper .credit-card-number',
				'.creditly-wrapper .security-code',
				'.creditly-wrapper .card-type');

			$(".creditly-card-form .submit").click(function (e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
					// Your validated credit card output
					console.log(output);
				}
			});
		});
	</script>
	<!-- //credit-card -->


	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
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