<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Coffee Shop | Profile</title>
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
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

     <!-- admin css -->
     <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
   
</head>

<body>
	<!-- banner -->
	<div class="banner_top innerpage" id="home">
	<!-- Header -->	
	@include('cusheader')
    <!--// Header -->	
	
		<!-- search -->
		<div class="search_w3ls_agileinfo">
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
				</ul>
			</div>
			<div id="cd-search" class="cd-search">
				<form action="#" method="post">
					<input name="Search" type="search" placeholder="Click enter after typing...">
				</form>
			</div>
		</div>
		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="index">Home</a><i>|</i></li>
					<li>Profile</li>
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
				<h3>UserP<span>rofile</span></h3>
                @foreach (session('user') as $item)
              

                <div class="checkout-left">
					
					<div class="col-md-8 address_form">
						<h4>Profile Information</h4>
                        <div class="mb-2 md:mx-2 lg:mx-2 border-solid border-gray-200 rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
							Profile: {{$item->cName}}
                            </div>
                            <div class="p-3">
                                <form class="w-full" action="itemadd" method="POST">
                                <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" action="itemadd" method="POST" enctype="multipart/form-data" style="margin-inline-start: 20%;background-color: #a9cdf3f5;padding: 5% 5%;">
                                    <div class="flex items-center border-b border-b-1 border-teal-500 py-4">
                                    <label class="w-full px-5 py-1 font-medium text-gray-700" for="id">Id:</label>
                                    <span class="w-full px-5 py-1 font-medium text-gray-700 bg-gray-200 rounded" id="id">{{$item->id}}</span>  
                                    </div>

                                    <div class="flex items-center border-b border-b-1 border-teal-400 py-4">
                                    <label class="w-full px-5 py-1 font-medium text-gray-700" for="name">Name:</label>
                                    <span class="w-full px-5 py-1 font-medium text-gray-700 bg-gray-200 rounded" id="name">{{$item->cName}}</span>
                                    </div>

                                    <div class="flex items-center border-b border-b-1 border-purple-400 py-4">
                                    <label class="w-full px-5 py-1 font-medium text-gray-700" for="name">Email:</label>
                                    <span class="w-full px-5 py-1 font-medium text-gray-700 bg-gray-200 rounded" id="name">{{$item->cEmail}}</span>
                                    </div>

                                    <div class="flex items-center border-b border-b-1 border-purple-600 py-4">
                                    <label class="w-full px-5 py-1 font-medium text-gray-700" for="name">Address:</label>
                                    <span class="w-full px-5 py-1 font-medium text-gray-700 bg-gray-200 rounded" id="name">{{$item->cAddress}}</span>
                                    </div>

                                    <div class="flex items-center border-b border-b-1 border-red-600 py-4">
                                    <label class="w-full px-5 py-1 font-medium text-gray-700" for="name">Phone:</label>
                                    <span class="w-full px-5 py-1 font-medium text-gray-700 bg-gray-200 rounded" id="name">{{$item->cPhone}}</span>
                                    </div>

                                    <div class="flex items-center border-b border-b-1 border-red-500 py-4">
                                    <label class="w-full px-5 py-1 font-medium text-gray-700" for="name">Password:</label>
                                    <span class="w-full px-5 py-1 font-medium text-gray-700 bg-gray-200 rounded" id="name">{{$item->cPass}}</span>
                                    </div>

                                    <div class="flex items-center border-b border-b-1 border-info py-4">
                                      
                                        <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-10 border-4 text-white py-2 px-4 rounded" type="button" href ="adminInfoEdit">
                                        Edit Profile
                                        </button>
                                       
                                    </div>
                                </form>
                            </div>
                </div>
					</div>

					
                @endforeach

					<div class="clearfix"></div>
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
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>

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