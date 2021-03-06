	<!-- header file start from -->
	<!-- REMOVE FOLLOWING LINK -->
<a href="" class="btn btn-dark rounded-pill" style="font-size:13px; z-index:100; position: fixed; bottom:10px; right:10px;">Download theme</a>
	<!-- REMOVE  //END -->
<header class="section-header">
	<nav class="navbar d-none d-md-flex p-md-0 navbar-expand-sm navbar-light border-bottom">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTop4">
				<ul class="navbar-nav">	
					<ul class="navbar-nav mr-auto">
						<li><span class="nav-link">Hi, <a href="#"> Sign in </a> or <a href="#"> Register </a></span></li>
					</ul>
					<!-- <li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">   Watchlist </a>
						<ul class="dropdown-menu small">
							<li><a class="dropdown-item" href="#">First item</a></li>
							<li><a class="dropdown-item" href="#">Second item</a></li>
							<li><a class="dropdown-item" href="#">Third item </a></li>
						</ul>
					</li> -->
				</ul> <!-- list-inline //  -->
			</div> <!-- navbar-collapse .// -->
		</div> <!-- container //  -->
	</nav>
	<section class="header-main border-bottom">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-2 col-lg-3 col-md-12">
					<a href="http://bootstrap-ecommerce.com/" class="brand-wrap">
						<img class="logo" src="{{ asset('images/logo3661.png?v=2.0') }}">
					</a> <!-- brand-wrap.// -->
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<form action="#" class="search-header">
						<div class="input-group w-100">
							<select class="custom-select border-right"  name="category_name">
								<option value="">All type</option><option value="codex">Special</option>
								<option value="comments">Only best</option>
								<option value="content">Latest</option>
							</select>
							<input type="text" class="form-control" placeholder="Search">

							<div class="input-group-append">
								<button class="btn btn-primary" type="submit">
									<i class="fa fa-search"></i> Search
								</button>
							</div>
						</div>
					</form> <!-- search-wrap .end// -->
				</div> <!-- col.// -->
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="widgets-wrap float-md-right">
						<div class="widget-header mr-3">
							<li style="list-style-type: none;" class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Profile</a>
								<ul class="dropdown-menu small">
									@if (Route::has('login'))
									<li><a class="dropdown-item" href="#"> </a>
					                    @auth
					                        <a class="dropdown-item" href="{{ url('/home') }}">Home</a>
					                    @else
					                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>

					                        @if (Route::has('register'))
					                            <a class="dropdown-item" href="{{ route('register') }}">Register</a>
					                        @endif
					                    @endauth
					                </li>
					            @endif
								</ul>
							</li>
								<!-- <a href="#" class="widget-view">
									<div class="icon-area">
										<i class="fa fa-user"></i>
										<span class="notify">3</span>
									</div>
									<small class="text"> My profile </small> -->
								<!-- </a> -->
						</div>
						<div class="widget-header mr-3">
							<a href="#" class="widget-view">
								<div class="icon-area">
									<i class="fa fa-comment-dots"></i>
									<span class="notify">1</span>
								</div>
								<small class="text"> Message </small>
							</a>
						</div>
						<div class="widget-header mr-3">
							<a href="#" class="widget-view">
								<div class="icon-area">
									<i class="fa fa-bell"></i>
									<span class="notify">1</span>
								</div>
								<small class="text"> Notification </small>
							</a>
						</div>
						<div class="widget-header">
							<a href="#" class="widget-view">
								<div class="icon-area">
									<i class="fa fa-shopping-cart"></i>
								</div>
								<small class="text"> Cart </small>
							</a>
						</div>
					</div> <!-- widgets-wrap.// -->
				</div> <!-- col.// -->
			</div> <!-- row.// -->
		</div> <!-- container.// -->
	</section> <!-- header-main .// -->
	<nav class="navbar navbar-main navbar-expand-lg border-bottom">
		<div class="container">
			<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button> -->
			<div class="collapse navbar-collapse" id="main_nav">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-bars text-muted mr-2"></i> Demo pages </a>
						<div class="dropdown-menu dropdown-large">
							<nav class="row">
								<div class="col-6">
									<a href="page-category.html">All category</a>
									<a href="page-listing-large.html">Listing list</a>
									<a href="page-listing-grid.html">Listing grid</a>
									<a href="page-shopping-cart.html">Shopping cart</a>
									<a href="page-detail-product.html">Product detail</a>
									<a href="page-content.html">Page content</a>
									<a href="page-user-login.html">Page login</a>
									<a href="page-user-register.html">Page register</a>
								</div>
								<div class="col-6">
									<a href="page-profile-main.html">Profile main</a>
									<a href="page-profile-orders.html">Profile orders</a>
									<a href="page-profile-seller.html">Profile seller</a>
									<a href="page-profile-wishlist.html">Profile wishlist</a>
									<a href="page-profile-setting.html">Profile setting</a>
									<a href="page-profile-address.html">Profile address</a>
								</div>
							</nav> <!--  row end .// -->
						</div> <!--  dropdown-menu dropdown-large end.// -->
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Ready to ship</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-md-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Get the app</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com/" data-toggle="dropdown">English</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">Russian</a>
							<a class="dropdown-item" href="#">French</a>
							<a class="dropdown-item" href="#">Spanish</a>
							<a class="dropdown-item" href="#">Chinese</a>
						</div>
					</li>
				</ul>
			</div> <!-- collapse .// -->
		</div> <!-- container .// -->
	</nav>
</header> <!-- section-header.// -->
	<!-- header file to end -->