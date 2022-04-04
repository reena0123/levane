<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-end">

            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <!--            <h1 class="logo me-auto"><a href="index.html"></a></h1>-->

            <a href="index.html" class="logo me-auto"><img src="{{ asset('storage/assets/img/logo.png') }}" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto {{ request()->is("home")?'active':'' }}" href="{{ route('front.home') }}">Home</a></li>
                    <li><a class="nav-link scrollto {{ request()->is("about")?'active':'' }}"  href="{{ route('front.about') }}">About</a></li>
                    <li><a class="nav-link scrollto {{ request()->is("product")?'active':'' }}" href="{{ route('front.product') }}">Products</a></li>
                    <li><a class="nav-link scrollto {{ request()->is("career")?'active':'' }}" href="{{ route('front.career') }}">Careers</a></li>
                    <li><a class="nav-link scrollto {{ request()->is("blog")?'active':'' }}" href="{{ route('front.blog') }}">Blog</a></li>
                     <li><a class="nav-link scrollto {{ request()->is("gallery")?'active':'' }}" href="{{ route('front.gallery') }}">Gallery</a></li>
                    <li><a class="nav-link scrollto {{ request()->is("contact")?'active':'' }}" href="{{ route('front.contact') }}">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header><!-- End Header -->