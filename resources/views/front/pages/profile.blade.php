@extends('front.layouts.master')

@section('title')
  <title>Profil - Bagian Pengadaan Barang/Jasa Pemerintah Kota Depok</title>
@endsection
@section('content')
@php
    Counter::showAndCount('profile');
@endphp
<!-- bage header Start -->
  <div class="container">
    <div class="page-header">
      <h1>Profil ULP</h1>
      <ol class="breadcrumb">
        <li><a href="{{route('front.homeindex')}}">Beranda</a></li>
        <li class="active">Profil</li>
      </ol>
    </div>
  </div>
  <!-- bage header End --> 
  <!-- data Start -->
  <section>
    <div class="container ">
      <div class="row "> 
        <!-- left sec Start -->
        <div class="col-md-11 col-sm-11">
          <div class="row"> 
            <!-- post details start -->
            <div class="col-sm-16">
              <div class="row">
                <div class="sec-topic col-sm-16  wow fadeInDown animated " data-wow-delay="0.5s">
                  <div class="row">
                    <div class="col-sm-16 sec-info">
                      <div class="text-danger sub-info-bordered">
                        <div class="time"><span class="ion-android-data icon"></span>{{ \Carbon\Carbon::parse($profile->created_at)->toFormattedDateString() }}</div>
                        <div class="comments"><span class="ion-chatbubbles icon"></span>{{$profile->view}}</div>
                      </div>
                      {!! str_replace(array('\\n','\\r'), ' ',$profile->desc ) !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- post details end --> 
            
          </div>
        </div>
        <!-- left sec End --> 
        <!-- right sec Start -->
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
                      <li> <a href="{{route('front.berita', $item->id)}}">
                        <div class="row">
                          <div class="col-sm-5 col-md-4"><img class="img-thumbnail pull-left" src="{{url('/')}}{{$item->file}}" width="164" style="max-height:54px" alt=""/> </div>
                          <div class="col-sm-11 col-md-12">
                            <h4>
                              @php
                                  $isititle = explode(' ', $item->title);
                              @endphp
                              @if(count($isititle) > 8)
                                  @for($i = 0; $i <= 8; $i++)
                                      {{ $isititle[$i] }}
                                  @endfor
                                  ...
                              @else
                                {{ $item->title }}
                              @endif
                            </h4>
                            <div class="text-danger sub-info">
                              <div class="time"><span class="ion-android-data icon"></span>{{ \Carbon\Carbon::parse($item->created_at)->toFormattedDateString() }}</div>
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
                      <li> <a href="{{route('front.berita', $item->id)}}">
                        <div class="row">
                          <div class="col-sm-5 col-md-4"><img class="img-thumbnail pull-left" src="{{url('/')}}{{$item->file}}" width="164" style="max-height:54px" alt=""/> </div>
                          <div class="col-sm-11 col-md-12">
                            <h4>
                              @php
                                  $isititle = explode(' ', $item->title);
                              @endphp
                              @if(count($isititle) > 8)
                                  @for($i = 0; $i <= 8; $i++)
                                      {{ $isititle[$i] }}
                                  @endfor
                                  ...
                              @else
                                {{ $item->title }}
                              @endif
                            </h4>
                            <div class="text-danger sub-info">
                              <div class="time"><span class="ion-android-data icon"></span>{{ \Carbon\Carbon::parse($item->created_at)->toFormattedDateString() }}</div>
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
        <!-- Right Sec End --> 
      </div>
    </div>
  </section>
  <!-- Data End --> 
@endsection