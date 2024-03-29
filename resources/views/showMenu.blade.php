<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
<title>Coffee Shop | Customer</title>
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
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
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

	<!-- Header -->
	
	@include('cusheader')
	<!-- //Header -->
	<!-- <button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button> -->
		<!-- cart details -->
			<!-- <div class="">
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
					<li><a class="top_shoe_cart" href="orderplace"><i class="fa fa-shopping-cart"> </i><span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty: ''}}</span></a></li>
				</ul>
			</div>

		</div> -->
		<!-- //cart details -->
		<!-- search -->

		<!-- //search --> 
		
		
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="index">Home</a><i>|</i></li>
					<li>Menu</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		
		<div class="shop_inner_inf">
			<!-- tittle heading -->

			<!-- //tittle heading -->
			<!-- product left -->
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">Search Here..</h3>
					<form action="search" method="get">
						<input type="search" placeholder="Product name..." name="search" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				<!-- price range -->
				

			</div>
			<!-- //product left -->
			<!-- product right -->
			<div class="left-ads-display col-md-9">
				<div class="wrapper_top_shop">
					<div class="col-md-6 shop_left">
						<img src="images/coffeeOff.jpg" alt="">
						<h6>15% off on Coffees</h6>
					</div>
					<div class="col-md-6 shop_right">
						<img src="images/appetizer.jpg" alt="">
						<h6>20% off on Appetizer</h6>
					</div>
					<div class="clearfix"></div>
					<!-- product-sec1 -->
                    <!--Coffee-->
					@foreach ($collection as $item)
					<div class="product-sec1">

					
					
						

						
						
						<div class="col-md-4 product-men">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="{{$item->pic}}" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href ="/single/{{$item->id }}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="/single/{{$item->id }}">{{$item->fName}} </a>
										</h4>
										<div>
											<h6 style="color: #888888;">
											{{$item->fInfo}}
										    </h6>
									    </div>
										
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">{{$item->fPrice}}tk</span>
													</div>
												</div>
												<ul class="stars">
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
											<div class="shoe single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="shoe_item" value={{$item->fName}}>
													<input type="hidden" name="amount" value={{$item->fPrice}}>
													<a href ="/addtocart/{{$item->id }}" class="link-product-add-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>

											</div>
										</div>
										
									</div>
								</div>
							</div>
                           
						</div>
						
                        

					</div>
                    @endforeach
                    <div class="clearfix"></div>

					<!-- //product-sec1 -->
					<div class="col-md-10 shop_left shp" style="width: 100%;justify-content: center;">
						<img src="images/drinks.jpg" alt="">
						<h6>10% off on Drinks</h6>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
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
	<div id="staplesbmincart">
		<form method="get" class="" action="order" target="">   
			<button type="button" class="sbmincart-closer">×</button>    
			<ul>                
			<li class="sbmincart-item">            
					<div class="sbmincart-details-name">                
						<a class="sbmincart-name" href="http://127.0.0.1:8000/customerlogin">Orange</a>                
						<ul class="sbmincart-attributes"></ul>            
					</div>     

					<div class="sbmincart-details-quantity">                
					 <input class="sbmincart-quantity" data-sbmincart-idx="0" name="quantity_1" type="text" pattern="[0-9]*" value="1" autocomplete="off">      
					</div>          

					<div class="sbmincart-details-remove">            
					 <button type="button" class="sbmincart-remove" data-sbmincart-idx="0">×</button>    
					</div>         
					<div class="sbmincart-details-price">        
					 <span class="sbmincart-price">$140.00</span> 
					</div>           
							<input type="hidden" name="shoe_item_1" value="Orange">  
							<input type="hidden" name="amount_1" value="140">      
							<input type="hidden" name="shipping_1" value="undefined">  
							<input type="hidden" name="shipping2_1" value="undefined">       
		    </li>           
	        </ul>   
	            <div class="sbmincart-footer">                   
		            <div class="sbmincart-subtotal"> Subtotal: $140.00 USD</div>       
		            <button class="sbmincart-submit" href="order">Check Out</button>         
			    </div>   
			          <input type="hidden" name="cmd" value="_cart">   
				      <input type="hidden" name="upload" value="1">       
				      <input type="hidden" name="bn" value="sbmincart_AddToCart_WPS_US">   
	 </form>

					
	</div>
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
	<!-- price range (top products) -->
	<script src="js/jquery-ui.js"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 1000,
				values: [50, 100],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

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