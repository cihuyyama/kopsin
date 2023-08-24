<html>

<body>
	<div class="wrapper_top_w3layouts">
		<div class="header_agileits">
			<div class="logo inner_page_log">
				<h1><a class="navbar-brand" href="#"><span>Coffee</span> <i>Shop</i></a></h1>
			</div>
			<div class="overlay overlay-contentpush">
				<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

				<nav>
					<ul>
						<li>
							

						</li>
						<li><a href="index" class="active">Home</a></li>
						<!-- <li><a href="customerInfoShow">Profile</a></li> -->
						<li><a href="showMenu">Menu</a></li>
						<li><a href="orderplace">Cart</a></li>
						<!-- <li><a href="order">Orders</a></li> -->

						<li><a href="logout">Logout</a></li>
					</ul>
				</nav>
			</div>
			<div class="mobile-nav-button">
				<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
			</div>
			<!-- cart details -->
			<div class="top_nav_right">
				<div class="shoecart shoecart2 cart cart box_1">
					<form action="orderplace" method="" class="last">
						<!-- <input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1"> -->
						<button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i><span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty: ''}}</span></button>
					</form>
				</div>
			</div>
			<!--cart details -->
			<!-- search -->
			<div class="search_w3ls_agileinfo">
				<!-- <div class="cd-main-header">
					<ul class="cd-header-buttons">
						<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
					</ul>
				</div> -->
				<div id="cd-search" class="cd-search">
					<form action="search" method="get">
						<input name="search" type="search" placeholder="Click enter after typing...">
					</form>
				</div>
			</div>
			<!-- //search -->
		</div>
	</div>
</body>

</html>