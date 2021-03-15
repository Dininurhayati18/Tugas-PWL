@extends('layouts.app')
@section('title', 'Halaman Contact')
@section('content')

<section id="contact" class="contact">
<div class="container">

          <div class="section-title">
            <h2>Contact</h2>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-4">
              <div class="contact-about">
                <h3>Social Profiles</h3>
                <div class="social-links">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="info">
                <div class="d-flex align-items-center">
                  <i class="bi bi-geo-alt"></i>
                  <p>Cikaret<br>Cianjur, Jawa Barat</p>
                </div>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-envelope"></i>
                  <p>dininurhayati86@gmail.com</p>
                </div>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-phone"></i>
                  <p>+62 8312 64789 59</p>
                </div>
              </div>
            </div>

            <div class="col-lg-5 col-md-8">
              <form action="" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>

          </div>
        </div>
</section>

<x-modal dn="primary">
    Next
</x-modal>
@stop