<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
@yield('style')

<body>

  <!-- ======= Property Search Section ======= -->
  @include('layouts.search')
 <!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->
 @include('layouts.header')
  <!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
<!-- End Intro Section -->

  <main id="main">

   @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
 <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('layouts.script')
@yield('scripts')

</body>

</html>
