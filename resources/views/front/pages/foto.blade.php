@extends('front.layouts.master')

@section('title')
  <title>Dokumentasi Foto - Unit Layanan Pengadaan Pemerintah Kota Depok</title>
@endsection

@section('content')
<div class="container"> 
    
    <!-- bage header start -->
    <div class="page-header">
      <h1>Gallery</h1>
      <ol class="breadcrumb">
        <li><a href="{{route('front.homeindex')}}">Beranda</a></li>
        <li class="active">Dokumentasi Foto</li>
      </ol>
    </div>
    
    <!-- bage header end --> 
    
  </div>
  
  <!-- data start -->
  <section>
    <div class="container ">
      <div class="row "> 
        <!-- left sec start -->
        <div class="col-md-11 col-sm-11">
          <div class="row"> 
            <!-- gallery start -->
            <div class="gallery">
            
            @foreach($photo as $item)
                <div class="col-sm-8 wow fadeInDown animated "> <a class="gallery-item" href="{{url('/')}}{{$item->picture}}" class="popup-img">
                    <div class="thumb-box"><span class="ion-arrow-expand"></span>
                    <div class="carousel-caption">{{$item->title}}</div>
                    <img width="1600" style="height:200px;" alt="" src="{{url('/')}}{{$item->picture}}" class="img-thumbnail"></div>
                    </a> 
                </div>
            @endforeach
              
            </div>
          </div>
        </div>
        <!-- left sec end --> 
        
        <!-- right sec start -->
        <div class="col-sm-5 hidden-xs right-sec">
          <div class="bordered">
            <div class="row ">
              
              <!-- activities start -->
              <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="130"> 
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-justified " role="tablist">
                  <li class="active"><a href="#popular" role="tab" data-toggle="tab">Berita Terbaru</a></li>
                  <li><a href="#recent" role="tab" data-toggle="tab">Berita Populer</a></li>
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content">
                <div class="tab-pane active" id="popular">
                  <ul class="list-unstyled">
                    @foreach($latestnews as $i => $item)
                      @if($i<5)
                      <li> <a href="#">
                        <div class="row">
                          <div class="col-sm-5 col-md-4"><img class="img-thumbnail pull-left" src="{{url('/')}}{{$item->file}}" width="164" height="152" alt=""/> </div>
                          <div class="col-sm-11 col-md-12">
                            <h4>{{$item->title}}</h4>
                            <div class="text-danger sub-info">
                              <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                              <div class="comments"><span class="ion-eye icon"></span>{{$item->view}}</div>
                            </div>
                          </div>
                        </div>
                        </a> </li>
                      @endif
                    @endforeach
                  </ul>
                </div>
                <div class="tab-pane" id="recent">
                  <ul class="list-unstyled">
                    @foreach($popularnews as $i => $item)
                      @if($i<5)
                      <li> <a href="#">
                        <div class="row">
                          <div class="col-sm-5 col-md-4"><img class="img-thumbnail pull-left" src="{{url('/')}}{{$item->file}}" width="164" height="152" alt=""/> </div>
                          <div class="col-sm-11 col-md-12">
                            <h4>{{$item->title}}</h4>
                            <div class="text-danger sub-info">
                              <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                              <div class="comments"><span class="ion-eye icon"></span>{{$item->view}}</div>
                            </div>
                          </div>
                        </div>
                        </a> </li>
                      @endif
                    @endforeach
                  </ul>
                </div>
              </div>
              </div>
              <!-- activities end --> 
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- data end --> 
@endsection