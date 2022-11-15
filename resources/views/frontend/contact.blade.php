@php
  $setting =  App\Models\Setting::find(1);
@endphp 

@extends('frontend.yield')
@section('contents')
      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>{{ucfirst($setting->contact_description)}}</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address </h3>
              <p>{{ucfirst($setting->address)}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>{{ucfirst($setting->email)}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>{{ucfirst($setting->phone)}}</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">

            <img  class="mb-4 mb-lg-0"  frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen src="{{url('/')}}/{{$setting->contact_img}}">
          </div>

          <div class="col-lg-6">

            <form action="{{route('contact.store')}}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->
@endsection
