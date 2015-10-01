<!DOCTYPE html>
<html lang="en">
		@include('head')
<body>
<section class="hbox stretch">
  <!-- .aside -->
        @include('sidebar')
  <!-- /.aside -->
  <!-- .vbox -->
  <section id="content">
    <section class="vbox">
       @include('header')
       @yield('content')
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>
  <!-- /.vbox -->
</section>
<script src="js/app.v2.js"></script>
<!-- Bootstrap -->
<!-- Sparkline Chart -->
<!-- App -->
</body>
</html>
