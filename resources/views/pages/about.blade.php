@extends('layouts.app')
@section('title', 'Halaman About')
@section('content')
    
<section id="about" class="about">
<div class="container">

<div class="section-title">
  <h2>About Me</h2>
</div>

<div class="row content">
  <div class="col-lg-6">
    <ul>
      <li><i class="bi bi-chevron-right"></i> <strong>Nama:</strong> <span>Dini Nurhayati</span></li>
      <li><i class="bi bi-chevron-right"></i> <strong>NPM:</strong> <span>5520119032</span></li>
      <li><i class="bi bi-chevron-right"></i> <strong>Kelas:</strong> <span>IF A 2019</span></li>
      <li><i class="bi bi-chevron-right"></i> <strong>Program Studi:</strong> <span>Teknik Informatika</span></li>
    </ul>
  </div>
  <div class="col-lg-6">
    <ul>
      <li><i class="bi bi-chevron-right"></i> <strong>Universitas:</strong> <span>Suryakancana Cianjur</span></li>
      <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+628 312 6478 959</span></li>
      <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>dininurhayati86@gmail.com</span></li>
      <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span>Cianjur, Jawa Barat Indonesia</span></li>
    </ul>
  </div>
</div>

</div>
</section>

<x-modal dn="primary">
    Next
</x-modal>
@stop