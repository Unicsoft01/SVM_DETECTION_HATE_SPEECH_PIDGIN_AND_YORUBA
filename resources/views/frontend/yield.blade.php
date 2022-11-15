@include("frontend.inc.header")

@if(route('home')==url()->current())
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Welcome to PAAU Consultancy Service</h1>
      <h2 id="message"> </h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section>
  <!-- End Hero -->
@endif

  <main id="main">
@yield('contents')
  </main><!-- End #main -->

@include("frontend.inc.footer")