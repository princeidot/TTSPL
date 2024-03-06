<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from colza-demo.pbminfotech.com/html-demo/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 10:59:35 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FineTek Co., Ltd. | Your Partner in Industrial Automation Solutions Since 1978</title>
    <link rel="canonical" href="https://ttspl.co.in/key-business/fine-tek" />

    <meta name="description" content="Established in 1978, FineTek specializes in custom solutions for industrial automation in liquid level, flow, pressure, and temperature. Explore our range of products, including level sensors, flow meters, and more.">

    @include('layouts.head')
    <style>
        .about-us_section {
            padding: 40px 0px 20px 0px;
        }
		.pbmit-ihbox-style-4 .pbmit-ihbox-icon-wrapper img{
			width:100%;
			border-radius:0px;
		}
    </style>
</head>

<body>

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <header class="site-header header-style-1">
            @include('layouts.header')
            <!-- Header Main Area End Here -->

            <!-- Title Bar -->
            <div class="pbmit-title-bar-wrapper">
                <div class="container">
                    <div class="pbmit-title-bar-content">
                        <div class="pbmit-title-bar-content-inner">
                            <div class="pbmit-tbar">
                                <div class="pbmit-tbar-inner">
                                    <h1 class="pbmit-tbar-title">Fine Tek</h1>
                                </div>
                            </div>
                            <div class="pbmit-breadcrumb">
                                <div class="pbmit-breadcrumb-inner">
                                    <span><a title="" href="{{ url('') }}"
                                            class="home"><span>Home</span></a></span>
                                    <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                                     <span><a title="" href="{{ route('kbusiness') }}"
                                            class="home"><span>Key Business</span></a></span>
                                    <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                                    <span><span class="post-root post post-post current-item">Fine Tek</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title Bar End-->
        </header>


        <!-- Page Content -->
        <div class="page-content pbmit-bg-color-light">

          

            
            <!-- About start -->
            <section class="about-us_section" style="border-bottom:1px solid;background: white;">
                <div class="container">
                    <div class="about-content-one">
                        <div class="row">
                            <div class="col-md-4 m-auto">
                                {{-- <div class="pbmit-heading-subheading">

                                    <h2 class="pbmit-title">Fine Tek</h2>
                                </div> --}}
                                <div class="about-ihbox">
                                    <div class="pbmit-ihbox pbmit-ihbox-style-4">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-headingicon">
                                                <div class="pbmit-ihbox-icon">
                                                    <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                        <img src="{{ url('asset/newimg/fine-take.png') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="pbmit-ihbox-contents"></div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="about-content-right">
                                    <p>
                                        FineTek Co., Ltd. established in 1978. FineTek business model is based on
                                        providing complete customized solutions for a wide range of industrial
                                        automation process applications in liquid level, flow, pressure and temperature.
                                        Products are
                                        In Level instruments: Single point level switch/ Continuous measurement Level
                                        sensor
                                        In Flow instruments: Flow switches/ Flow meters.
                                    </p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- About End -->

			
        </div>
        <!-- Page Content End -->


        <!-- Footer -->
        @include('layouts.footer')
        <!-- Footer End -->

    </div>
    <!-- Page Wrapper End -->

    <!-- Search Box Start Here -->
    <div class="pbmit-search-overlay">
        <div class="pbmit-icon-close"></div>
        <div class="pbmit-search-outer">
            <form class="pbmit-site-searchform">
                <input type="search" class="form-control field searchform-s" name="s"
                    placeholder="Type Word Then Press Enter">
                <button type="submit">
                    <i class="pbmit-base-icon-search-1"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Search Box End Here -->

    <!-- JS
        ============================================ -->
    @include('layouts.script')
</body>


<!-- Mirrored from colza-demo.pbminfotech.com/html-demo/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 10:59:38 GMT -->

</html>
