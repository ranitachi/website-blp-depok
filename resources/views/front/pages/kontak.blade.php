@extends('front.layouts.master')

@section('title')
    <title>Kontak Kami - Bagian Pengadaan Barang/Jasa Pemerintah Kota Depok</title>
    <style>
        #gmap_canvas img{max-width:none!important;background:none!important}
    </style>
@endsection
@section('content')
@php
    Counter::showAndCount('kontak');
@endphp
<!-- bage header Start -->
<div class="container">
    <div class="page-header">
      <h1>Kontak Kami </h1>
      <ol class="breadcrumb">
      <li><a href="{{route('front.homeindex')}}">Beranda</a></li>
      <li class="active">Kontak Kami</li>
      </ol>
    </div>
  </div>
  <!-- bage header End --> 
  <!-- data Start -->
  <section>
    <div class="container ">
      <div class="row "> 
        <!-- left sec Start -->
        <div class="col-sm-16">
          <div class="row">
            <div class="col-sm-16">
              <div class="row">
                <div class="col-sm-11">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8401.604737556425!2d106.82159881955346!3d-6.3902051959254695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x57e78d4e0c142a20!2sKantor+Walikota+Depok!5e0!3m2!1sid!2sid!4v1513591346193" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-sm-4  adress">
                  <address>
                  <strong>Alamat</strong><br>
                  {{$contact->alamat}}
                  </address>
                  <address>
                  <strong>Email</strong><br>
                  <a>{{$contact->email}}</a>
                  </address>
                  <strong>Media Sosial</strong><br>
                  <ul class="list-inline">
                    <li><a href="http://{{$contact->twitter}}" target="_blank"><span class="ion-social-twitter"></span></a></li>
                    <li><a href="http://{{$contact->facebook}}" target="_blank"><span class="ion-social-facebook"></span></a></li>
                    <li><a href="http://{{$contact->instagram}}" target="_blank"><span class="ion-social-googleplus"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- left sec End --> 
        
      </div>
    </div>
  </section>
  <!-- Data End --> 
@endsection