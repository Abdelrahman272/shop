<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    @include('website.layouts.heade')

</head>

<body class="home_supermarket">

    <!-- backtotop - start -->
    <div id="thetop"></div>
    <div class="backtotop bg_supermarket_red">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- preloader - start -->
    <!-- <div id="preloader"></div> -->
    <!-- preloader - end -->

    <!-- header_section - start
  ================================================== -->
    @include('website.layouts.main-headerbar')
    <!-- header_section - end
  ================================================== -->

    <!-- main body - start
  ================================================== -->
    <main>

        <!-- sidebar mobile menu & sidebar cart - start
   ================================================== -->
        @include('website.layouts.main-sidebar')
        <!-- sidebar mobile menu & sidebar cart - end
   ================================================== -->

        @yield('content')

    </main>
    <!-- main body - end
  ================================================== -->

    <!-- footer_section - start
  ================================================== -->
    @include('website.layouts.footer')
    <!-- footer_section - end
  ================================================== -->

    @include('website.layouts.footer-scripts')

</body>

</html>
