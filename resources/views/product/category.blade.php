<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{asset ('app-assets/css/img/favicon.png')}}" type="image/png">
	<title>های هیلز</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('app-assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset ('app-assets/css/bootstrap-v4-rtl-master/bootstrap-rtl.css')}} ">
	<link rel="stylesheet" href="{{asset('app-assets/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('app-assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('app-assets/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('app-assets/vendors/lightbox/simpleLightbox.css')}}">
	<link rel="stylesheet" href="{{asset('app-assets/vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('app-assets/vendors/animate-css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('app-assets/vendors/jquery-ui/jquery-ui.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('app-assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('app-assets/css/responsive.css')}}">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-left">
					<p>	تماس با ما: ۰۹۱۲۱۲۳۴۵۶۷</p>
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li>
						<a href="{{route('login')}}">
								ورود/ثبت نام
							</a>
						</li>
						<li>
							<a href="#">
								پروفایل من
							</a>
						</li>
						<li>
						<a href="{{route('contact')}}">
							تماس با ما
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="{{route('home')}}">
						<img src="{{asset('app-assets/img/logo.png')}}" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-7 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active">
									<a class="nav-link" href="{{route('home')}}">خانه</a>
									</li>
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">فروشگاه</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
											<a class="nav-link" href="{{route('category')}}">دسته بندی محصولات</a>
												<li class="nav-item">
												<a class="nav-link" href="{{route('singleproduct')}}">جزئیات محصول</a>
													<li class="nav-item">
														<a class="nav-link" href="{{route('productcheckout')}}">بررسی نهایی محصول</a>
														<li class="nav-item">
														<a class="nav-link" href="{{route('cart')}}">سبد خرید</a>
														</li>
														<li class="nav-item">
														<a class="nav-link" href="{{route('faktor')}}">تایید خرید</a>
														</li>
										</ul>
										</li>
										{{-- <li class="nav-item submenu dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a class="nav-link" href="blog.html">Blog</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="single-blog.html">Blog Details</a>
												</li>
											</ul>
										</li> --}}
										<li class="nav-item submenu dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">صفحات</a>
											<ul class="dropdown-menu">
												<li class="nav-item">
												<a class="nav-link" href="{{route('login')}}">ورود</a>
													<li class="nav-item">
													<a class="nav-link" href="{{route('tracking')}}">پیگیری سفارش</a>
														{{-- <li class="nav-item">
															<a class="nav-link" href="elements.html">Elements</a>
														</li> --}}
											</ul>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="{{route('contact')}}" style="margin-right:30px;">ارتباط با ما</a>
											</li>
								</ul>
							</div>

							<div class="col-lg-5">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<hr>
									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-search" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-user" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-heart-o" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="lnr lnr lnr-cart"></i>
										</a>
									</li>

									<hr>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Shop Category Page</h2>
					<div class="page_link">
					<a href="{{route('home')}}">Home</a>
					<a href="{{route('category')}}">Category</a>
						<a href="{{route('category')}}">Women Fashion</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Category Product Area =================-->
	<section class="cat_product_area section_gap">
		<div class="container-fluid">
			<div class="row flex-row-reverse">
				<div class="col-lg-9">
					<div class="product_top_bar">
						<div class="left_dorp">
							<select class="sorting">
								<option value="1">Default sorting</option>
								<option value="2">Default sorting 01</option>
								<option value="4">Default sorting 02</option>
							</select>
							<select class="show">
								<option value="1">Show 12</option>
								<option value="2">Show 14</option>
								<option value="4">Show 16</option>
							</select>
						</div>
						<div class="right_page ml-auto">
							<nav class="cat_page" aria-label="Page navigation example">
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link" href="#">
											<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
										</a>
									</li>
									<li class="page-item active">
										<a class="page-link" href="#">1</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">2</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">3</a>
									</li>
									<li class="page-item blank">
										<a class="page-link" href="#">...</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">6</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="latest_product_inner row">
						@foreach($all as $product)
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="f_p_item">
								<div class="f_p_img">
								<img class="img-fluid" src="app-assets/img/product/feature-product/{{$product->imagename}}" alt="">
									<div class="p_icon">
										<a href="#">
											<i class="lnr lnr-heart"></i>
										</a>
									<a href="{{'addtoshoppingcart/'.$product->kala->id}}">
											<i class="lnr lnr-cart"></i>
										</a>
									</div>
								</div>
								<a href="#">
									
									<h4>{{$product->kala->name}}</h4>
								</a>
								<h5>{{$product->kala->price}}</h5>
								
							</div>
						</div>
					@endforeach

						
						
						
					</div>
				</div>
				<div class="col-lg-3">
					<div class="left_sidebar_area">
						<aside class="left_widgets cat_widgets">
							<div class="l_w_title pr-2">
								<h3>جستجوی دسته‌بندی کالا‌ها</h3>
							</div>
							<div class="widgets_inner">
								<ul class="list">
									<li>
										<a href="#">کفش</a>
										<ul class="list">
											<li>
												<a href="#">کفش زنانه</a>
											</li>
											<li>
												<a href="#">کفش مردانه</a>
											</li>
											<li>
												<a href="#">کفش دخترانه</a>
											</li>
											<li>
												<a href="#">کفش پسرانه</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">مانتو</a>
										<ul class="list">
											<li>
												<a href="#">مانتو تابستانه</a>
											</li>
											<li>
												<a href="#">مانتو زمستانه</a>
											</li>
											<li>
												<a href="#">مانتو مجلسی</a>
											</li>
										
										</ul>
									</li>

									<li>
										<a href="#">شلوار</a>
										<ul class="list ">
											<li>
									
												
													<li>
														<a href="#">شلوار جین</a>
													</li>
													<li>
														<a href="#">شلوار کتان</a>
													</li>
											
											</li>
										
										</ul>
									</li>

									<li>
										<a href="#">کیف</a>
										<ul class="list">
											<li>
												<a href="#">Frozen Fish</a>
											</li>
											<li>
												<a href="#">Dried Fish</a>
											</li>
											<li>
												<a href="#">Fresh Fish</a>
											</li>
											<li>
												<a href="#">Meat Alternatives</a>
											</li>
											<li>
												<a href="#">Meat</a>
											</li>
										</ul>
									</li>
									
								</ul>
							</div>
						</aside>
						<aside class="left_widgets p_filter_widgets">
							<div class="l_w_title">
								<h3>Product Filters</h3>
							</div>
							<div class="widgets_inner">
								<h4>Brand</h4>
								<ul class="list">
									<li>
										<a href="#">Apple</a>
									</li>
									<li>
										<a href="#">Asus</a>
									</li>
									<li class="active">
										<a href="#">Gionee</a>
									</li>
									<li>
										<a href="#">Micromax</a>
									</li>
									<li>
										<a href="#">Samsung</a>
									</li>
								</ul>
							</div>
							<div class="widgets_inner">
								<h4>Color</h4>
								<ul class="list">
									<li>
										<a href="#">Black</a>
									</li>
									<li>
										<a href="#">Black Leather</a>
									</li>
									<li class="active">
										<a href="#">Black with red</a>
									</li>
									<li>
										<a href="#">Gold</a>
									</li>
									<li>
										<a href="#">Spacegrey</a>
									</li>
								</ul>
							</div>
							<div class="widgets_inner">
								<h4>Price</h4>
								<div class="range_item">
									<div id="slider-range"></div>
									<div class="row m0">
										<label for="amount">Price : </label>
										<input type="text" id="amount" readonly>
									</div>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>

			<div class="row">
				<nav class="cat_page mx-auto" aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#">
								<i class="fa fa-chevron-left" aria-hidden="true"></i>
							</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="#">01</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">02</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">03</a>
						</li>
						<li class="page-item blank">
							<a class="page-link" href="#">...</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">09</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">
								<i class="fa fa-chevron-right" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</section>
	<!--================ End Subscription Area ================-->

	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Us</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Newsletter</h6>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn">
										<span class="lnr lnr-arrow-right"></span>
									</button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget instafeed">
						<h6 class="footer_title">Instagram Feed</h6>
						<ul class="list instafeed d-flex flex-wrap">
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-01.jpg')}}" alt="">
							</li>
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-02.jpg')}}" alt="">
							</li>
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-03.jpg')}}" alt="">
							</li>
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-04.jpg')}}" alt="">
							</li>
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-05.jpg')}}" alt="">
							</li>
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-06.jpg')}}" alt="">
							</li>
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-07.jpg')}}" alt="">
							</li>
							<li>
								<img src="{{asset ('app-assets/img/instagram/Image-08.jpg')}}" alt="">
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Follow Us</h6>
						<p>Let us be social</p>
						<div class="f_social">
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-dribbble"></i>
							</a>
							<a href="#">
								<i class="fa fa-behance"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		
		</div>
	</footer>
	<!--================ End footer Area  =================-->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset ('app-assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset ('app-assets/js/popper.js')}}"></script>
	<script src="{{asset ('app-assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset ('app-assets/js/stellar.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/lightbox/simpleLightbox.min.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset ('app-assets/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset ('app-assets/js/mail-script.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset ('app-assets/vendors/counter-up/jquery.counterup.js')}}"></script>
	<script src="{{asset ('app-assets/js/theme.js')}}"></script>
</body>

</html>