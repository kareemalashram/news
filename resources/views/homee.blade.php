
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home 03</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/fontawesome-5.0.8/css/fontawesome-all.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <!--===============================================================================================-->
</head>
<body class="animsition">

<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="topbar">
            <div class="content-topbar container h-100">
                <div class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								فلسطين
							</span>

							<img class="m-b-1 m-rl-8" src="{{ asset('images/icons/icon-night.png') }}" alt="IMG">

							<span>
								HI 58° LO 56°
							</span>
						</span>

                    <a href="#" class="left-topbar-item">
                        من نحن
                    </a>

                    <a href="#" class="left-topbar-item">
                        تواصل معنا
                    </a>

                    <a href="{{ route('register') }}" class="left-topbar-item">
                        مستخدم جديد
                    </a>

                    <a href="{{route('dashbord')}}" class="left-topbar-item">
                        لوحة تحكم
                    </a>
                </div>

                <div class="right-topbar">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-pinterest-p"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-vimeo-v"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-youtube"></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.html"><img src="{{ asset('images/icons/logo-01.png') }}" alt="IMG-LOGO"></a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								New York, NY
							</span>

							<img class="m-b-1 m-rl-8" src="{{ asset('images/icons/icon-night.png') }}" alt="IMG">

							<span>
								HI 58° LO 56°
							</span>
						</span>
                </li>

                <li class="left-topbar">
                    <a href="#" class="left-topbar-item">
                        About
                    </a>

                    <a href="#" class="left-topbar-item">
                        Contact
                    </a>

                    <a href="#" class="left-topbar-item">
                        Sing up
                    </a>

                    <a href="{{route('dashbord')}}" class="left-topbar-item">
                        Log in
                    </a>


                </li>

                <li class="right-topbar">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-pinterest-p"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-vimeo-v"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-youtube"></span>
                    </a>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="index.html">Home</a>
                    <ul class="sub-menu-m">
                        <li><a href="index.html">Homepage v1</a></li>
                        <li><a href="home-02.html">Homepage v2</a></li>
                        <li><a href="home-03.html">Homepage v3</a></li>
                    </ul>

                    <span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
                </li>

                <li>
                    <a href="category-01.html">News</a>
                </li>

                <li>
                    <a href="category-02.html">Entertainment </a>
                </li>

                <li>
                    <a href="category-01.html">Business</a>
                </li>

                <li>
                    <a href="category-02.html">Travel</a>
                </li>

                <li>
                    <a href="category-01.html">Life Style</a>
                </li>

                <li>
                    <a href="category-02.html">Video</a>
                </li>

                <li>
                    <a href="#">Features</a>
                    <ul class="sub-menu-m">
                        <li><a href="category-01.html">Category Page v1</a></li>
                        <li><a href="category-02.html">Category Page v2</a></li>
                        <li><a href="blog-grid.html">Blog Grid Sidebar</a></li>
                        <li><a href="blog-list-01.html">Blog List Sidebar v1</a></li>
                        <li><a href="blog-list-02.html">Blog List Sidebar v2</a></li>
                        <li><a href="blog-detail-01.html">Blog Detail Sidebar</a></li>
                        <li><a href="blog-detail-02.html">Blog Detail No Sidebar</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>

                    <span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
                </li>
            </ul>
        </div>

        <!--  -->
        <div class="wrap-logo no-banner container">
            <!-- Logo desktop -->
            <div class="logo">
                <a href="index.html"><img src="{{ asset('images/icons/logo-01.png') }}" alt="LOGO"></a>
            </div>
        </div>

        <!--  -->
        <div class="wrap-main-nav">
            <div class="main-nav">
                <!-- Menu desktop -->
                <nav class="menu-desktop">
                    <a class="logo-stick" href="index.html">
                        <img src="images/icons/logo-01.png" alt="LOGO">
                    </a>

                    <ul class="main-menu justify-content-center">
                        <li class="main-menu-active">
                            <a href="{{ route('kareem') }}">صفحة الرئيسية</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('dashbord')}}">لوجة تحكم</a></li>
                                <li><a href="{{ route('register') }}">مستخدم جديد</a></li>
                            </ul>
                        </li>

                        <li class="mega-menu-item">
                            <a href="category-01.html">اخببار</a>

                            <div class="sub-mega-menu">
                                <div class="nav flex-column nav-pills" role="tablist">
                                    <a class="nav-link active" data-toggle="pill" href="" role="tab">رياضية</a>
                                    <a class="nav-link" data-toggle="pill" href="" role="tab">طقس</a>
                                </div>

                            </div>
                        </li>

                        <a href="{{route('courese')}}" class="left-topbar-item" style="color: #0c0c0c" >
                            الدورات
                        </a>
                        <li class="mega-menu-item">
                            <a href="category-02.html">سفر</a>

                            <div class="sub-mega-menu">
                                <div class="nav flex-column nav-pills" role="tablist">
                                    <a class="nav-link active" data-toggle="pill" href="#travel-1" role="tab">All</a>
                                    <a class="nav-link" data-toggle="pill" href="#travel-2" role="tab">Hotels</a>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="travel-1" role="tabpanel">
                                        <div class="row">
                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="images/post-39.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="images/post-41.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="tab-pane" id="travel-2" role="tabpanel">
                                        <div class="row">
                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="images/post-35.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="images/post-36.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="images/post-37.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="images/post-38.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="mega-menu-item">
                            <a href="category-01.html">موضة</a>

                            <div class="sub-mega-menu">
                                <div class="nav flex-column nav-pills" role="tablist">
                                    <a class="nav-link active" data-toggle="pill" href="#life-1" role="tab">All</a>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="life-1" role="tabpanel">
                                        <div class="row">
                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="images/post-25.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="mega-menu-item">
                            <a href="category-02.html">فيديوهات</a>

                            <div class="sub-mega-menu">
                                <div class="nav flex-column nav-pills" role="tablist">
                                    <a class="nav-link active" data-toggle="pill" href="#video-1" role="tab">All</a>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="video-1" role="tabpanel">
                                        <div class="row">
                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="images/post-50.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="#">المزيد</a>
                            <ul class="sub-menu">
                                <li><a href="category-01.html">Category Page v1</a></li>
                                <li><a href="category-02.html">Category Page v2</a></li>
                                <li><a href="blog-grid.html">Blog Grid Sidebar</a></li>
                                <li><a href="blog-list-01.html">Blog List Sidebar v1</a></li>
                                <li><a href="blog-list-02.html">Blog List Sidebar v2</a></li>
                                <li><a href="blog-detail-01.html">Blog Detail Sidebar</a></li>
                                <li><a href="blog-detail-02.html">Blog Detail No Sidebar</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- Headline -->
<div class="container">
    <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
        <div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
				<span class="text-uppercase cl2 p-r-8">
					Trending Now:
				</span>

            <span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
					<span class="dis-inline-block slide100-txt-item animated visible-false">
						Interest rate angst trips up US equity bull market
					</span>

					<span class="dis-inline-block slide100-txt-item animated visible-false">
						Designer fashion show kicks off Variety Week
					</span>

					<span class="dis-inline-block slide100-txt-item animated visible-false">
						Microsoft quisque at ipsum vel orci eleifend ultrices
					</span>
				</span>
        </div>

        <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
            <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
            <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
                <i class="zmdi zmdi-search"></i>
            </button>
        </div>
    </div>
</div>

<!-- Feature post -->
@yield('page')

<!-- Footer -->
<footer>
    <div class="bg2 p-t-40 p-b-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-b-20">
                    <div class="size-h-3 flex-s-c">
                        <a href="index.html">
                            <img class="max-s-full" src="images/icons/logo-02.png" alt="LOGO">
                        </a>
                    </div>

                    <div>
                        <p class="f1-s-1 cl11 p-b-16">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor magna eget elit efficitur, at accumsan sem placerat. Nulla tellus libero, mattis nec molestie at, facilisis ut turpis. Vestibulum dolor metus, tincidunt eget odio
                        </p>

                        <p class="f1-s-1 cl11 p-b-16">
                            Any questions? Call us on (+1) 96 716 6879
                        </p>

                        <div class="p-t-15">
                            <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                <span class="fab fa-facebook-f"></span>
                            </a>

                            <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                <span class="fab fa-twitter"></span>
                            </a>

                            <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                <span class="fab fa-pinterest-p"></span>
                            </a>

                            <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                <span class="fab fa-vimeo-v"></span>
                            </a>

                            <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                <span class="fab fa-youtube"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 p-b-20">
                    <div class="size-h-3 flex-s-c">
                        <h5 class="f1-m-7 cl0">
                            Popular Posts
                        </h5>
                    </div>

                    <ul>
                        <li class="flex-wr-sb-s p-b-20">
                            <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('images/popular-post-01.jpg') }}" alt="IMG">
                            </a>

                            <div class="size-w-5">
                                <h6 class="p-b-5">
                                    <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
                                        Donec metus orci, malesuada et lectus vitae
                                    </a>
                                </h6>

                                <span class="f1-s-3 cl6">
										Feb 17
									</span>
                            </div>
                        </li>

                        <li class="flex-wr-sb-s p-b-20">
                            <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                <img src="images/popular-post-02.jpg" alt="IMG">
                            </a>

                            <div class="size-w-5">
                                <h6 class="p-b-5">
                                    <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
                                        Lorem ipsum dolor sit amet, consectetur
                                    </a>
                                </h6>

                                <span class="f1-s-3 cl6">
										Feb 16
									</span>
                            </div>
                        </li>

                        <li class="flex-wr-sb-s p-b-20">
                            <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                <img src="images/popular-post-03.jpg" alt="IMG">
                            </a>

                            <div class="size-w-5">
                                <h6 class="p-b-5">
                                    <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
                                        Suspendisse dictum enim quis imperdiet auctor
                                    </a>
                                </h6>

                                <span class="f1-s-3 cl6">
										Feb 15
									</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-4 p-b-20">
                    <div class="size-h-3 flex-s-c">
                        <h5 class="f1-m-7 cl0">
                            Category
                        </h5>
                    </div>

                    <ul class="m-t--12">
                        <li class="how-bor1 p-rl-5 p-tb-10">
                            <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                Fashion (22)
                            </a>
                        </li>

                        <li class="how-bor1 p-rl-5 p-tb-10">
                            <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                Technology (29)
                            </a>
                        </li>

                        <li class="how-bor1 p-rl-5 p-tb-10">
                            <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                Street Style (15)
                            </a>
                        </li>

                        <li class="how-bor1 p-rl-5 p-tb-10">
                            <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                Life Style (28)
                            </a>
                        </li>

                        <li class="how-bor1 p-rl-5 p-tb-10">
                            <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                DIY & Crafts (16)
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg11">
        <div class="container size-h-4 flex-c-c p-tb-15">
				<span class="f1-s-1 cl0 txt-center">
					Copyright © 2018

					<a href="#" class="f1-s-1 cl10 hov-link1">Colorlib.</a>

					All rights reserved.
				</span>
        </div>
    </div>
</footer>

<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
</div>

<!-- Modal Video 01-->
<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document" data-dismiss="modal">
        <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

        <div class="wrap-video-mo-01">
            <div class="video-mo-01">
                <iframe src="https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
