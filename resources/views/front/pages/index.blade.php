@extends('front.layouts.master')

@section('title')
  <title>Selamat Datang - Bagian Pengadaan Barang/Jasa Pemerintah Kota Depok</title>
@endsection
@section('content')
@php
    Counter::showAndCount('index');
@endphp<div class="container">
    <div class="row"> 
      <!-- hot news start -->
      <div class="col-sm-16 hot-news hidden-xs">
        <div class="row">
          <div class="col-sm-15"> <span class="ion-ios7-timer icon-news pull-left"></span>
            <ul id="js-news" class="js-hidden">
              @foreach($latestnews as $item)
                <li class="news-item"><a href="{{route('front.berita', $item->id)}}">{{$item->title}}</a></li>    
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      <!-- hot news end --> 
      <!-- banner outer start -->
      <div  class="col-sm-16 banner-outer wow fadeInLeft animated" data-wow-delay="1s" data-wow-offset="50">
        <div class="row">
          <div class="col-sm-16 col-md-16 col-lg-16"> 
            <!-- carousel start -->
            <div id="sync1" class="owl-carousel">
              @foreach($slider as $item)
                <div class="box item"> <a>
                <div class="carousel-caption">
                  @php
                    echo $item->desc;
                  @endphp
                </div>
                <img class="img-responsive" src="{{url('/')}}{{$item->picture}}" width="1600" style="max-height:500px;"/>
                <div class="overlay"></div>
                <div class="overlay-info">
                  <div class="cat">
                    <p class="cat-data"><span class="ion-navicon-round"></span>{{$item->title}}</p>
                  </div>
                </div>
                </a></div>
              @endforeach
            </div>
            <div class="row">
              <div id="sync2" class="owl-carousel">
                @foreach($slider as $item)
                  <div class="item"><img class="img-responsive" src="{{url('/')}}{{$item->picture}}"  width="1600" style="height:150px;"/></div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- banner outer end --> 
      
    </div>
  </div>
  <!-- top sec end --> 
  
  <!-- data start -->
  
  <div class="container ">
    <div class="row "> 
      <!-- left sec start -->
      <div class="col-md-11 col-sm-11">
        <div class="row"> 
          <!-- business start -->
          <!-- Science & Travel start -->
          <div class="col-sm-16 business">
            <div class="row">
              <div class="col-xs-16 col-sm-8  wow fadeInLeft animated science" data-wow-delay="0.5s" data-wow-offset="130">
                <div class="main-title-outer pull-left">
                  <div class="main-title">{{isset($featuredcategories[0]->nama_kategori) ? $featuredcategories[0]->nama_kategori : ''}}</div>
                </div>
                <div class="row">
                  @foreach($latestnews as $i => $item)
                    @if($featuredcategories[0]->id == $item->id_kategori)
                      <div class="topic col-sm-16"> <a href="{{route('front.berita', $item->id)}}"><img class=" img-thumbnail" src="{{url('/')}}{{$item->file}}" width="600" style="max-height:227px;" alt=""/>
                        <h3> 
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
                        </h3>
                        <div class="text-danger sub-info-bordered ">
                          <div class="time"><span class="ion-android-data icon"></span>{{ \Carbon\Carbon::parse($item->created_at)->toFormattedDateString() }}</div>
                          <div class="comments"><span class="ion-eye icon"></span>{{$item->view}}</div>
                        </div>
                        </a>
                        <p>
                          @php
                            $content = explode(' ', strip_tags($item->desc));
                            foreach($content as $x => $value){
                              if($x<20) {
                                echo $value." ";
                              }
                            }
                          @endphp
                        </p>
                      </div>
                      @break
                    @endif
                  @endforeach
                  
                  <div class="col-sm-16">
                    <ul class="list-unstyled  top-bordered ex-top-padding">
                      @php
                        $flag = 0;
                        $limit = 0;
                      @endphp
                      @foreach($latestnews as $i => $item)
                        @if($featuredcategories[0]->id == $item->id_kategori)
                          @if($flag!=0)
                            @if($limit<2)
                              <li> <a href="{{route('front.berita', $item->id)}}">
                              <div class="row">
                                <div class="col-lg-3 col-md-4 hidden-sm  "><img width="76" height="76" alt="" src="{{url('/')}}{{$item->file}}" class="img-thumbnail pull-left"> </div>
                                <div class="col-lg-13 col-md-12">
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
                              @php
                                $limit++;
                              @endphp
                            @endif
                          @else
                            @php
                              $flag++;
                            @endphp
                          @endif
                        @endif
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-8 col-xs-16 wow fadeInRight animated" data-wow-delay="0.5s" data-wow-offset="130">
                <div class="main-title-outer pull-left">
                  <div class="main-title">{{isset($featuredcategories[1]->nama_kategori) ? $featuredcategories[1]->nama_kategori : ''}}</div>
                  
                </div>
                <div class="row left-bordered">
                  @foreach($latestnews as $i => $item)
                    @if($featuredcategories[1]->id == $item->id_kategori)
                      <div class="topic col-sm-16"> <a href="{{route('front.berita', $item->id)}}"><img class=" img-thumbnail" src="{{url('/')}}{{$item->file}}" width="600" style="max-height:227px;" alt=""/>
                        <h3>
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
                        </h3>
                        <div class="text-danger sub-info-bordered ">
                          <div class="time"><span class="ion-android-data icon"></span>{{ \Carbon\Carbon::parse($item->created_at)->toFormattedDateString() }}</div>
                          <div class="comments"><span class="ion-eye icon"></span>{{$item->view}}</div>
                        </div>
                        </a>
                        <p>
                          @php
                            $content = explode(' ', strip_tags($item->desc));
                            foreach($content as $x => $value){
                              if($x<20) {
                                echo $value." ";
                              }
                            }
                          @endphp
                        </p>
                      </div>
                      @break
                    @endif
                  @endforeach
                  <div class="col-sm-16">
                    <ul class="list-unstyled top-bordered ex-top-padding">
                      @php
                        $flag = 0;
                        $limit = 0;
                      @endphp
                      @foreach($latestnews as $i => $item)
                        @if($featuredcategories[1]->id == $item->id_kategori)
                          @if($flag!=0)
                            @if($limit<2)
                              <li> <a href="{{route('front.berita', $item->id)}}">
                              <div class="row">
                                <div class="col-lg-3 col-md-4 hidden-sm  "><img width="76" height="76" alt="" src="{{url('/')}}{{$item->file}}" class="img-thumbnail pull-left"> </div>
                                <div class="col-lg-13 col-md-12">
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
                                    <div class="comments"><span class="ion-eye icon"></span>351</div>
                                  </div>
                                </div>
                              </div>
                              </a> </li>
                              @php
                                $limit++;
                              @endphp
                            @endif
                          @else
                            @php
                              $flag++;
                            @endphp
                          @endif
                        @endif
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <hr>
          </div>
          <!-- Scince & Travel end --> 
          
          <div class="col-sm-16 wow fadeInUp animated " data-wow-delay="0.5s" data-wow-offset="100">
            <div class="main-title-outer pull-left">
              <div class="main-title">Website Terkait</div>
            </div>
            <div class="row">
              <div id="owl-lifestyle" class="owl-carousel owl-theme lifestyle pull-left">
                @foreach ($webrekanan as $item)
                  <div class="item topic"> <a href="http://{{ $item->url }}" target="_blank"> <img class="img-thumbnail" src="{{ $item->image }}" width="300" height="132" alt=""/>
                    <h4>{{ $item->nama_web }}</h4>
                    </a>
                  </div>
                @endforeach
              </div>
            </div>
            <hr>
          </div>
          {{--  <div class="col-sm-16 wow fadeInUp animated " data-wow-delay="0.5s" data-wow-offset="100">
            <div class="main-title-outer pull-left">
              <div class="main-title">Manual SI-MANDA PBJ</div>
            </div>
            <div class="row">
              <div id="" class="pull-left">
                  <div class="item topic">
                    <a href="{{asset('files/manual-si-manda-pbj.pdf')}}" target="_blank"> <img class="img-thumbnail" src="{{ asset('theme/img/icons/pdf.png') }}" width="100" height="100" alt=""/>
                    <h4>Unduh</h4>
                    </a>
                  </div>
              </div>
            </div>
            <hr>
          </div>  --}}

        </div>
      </div>
      <!-- left sec end --> 
      <!-- right sec start -->
      <div class="col-sm-5 hidden-xs right-sec">
        <div class="bordered top-margin">
          <div class="row ">
            <!-- activities start -->
            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="130"> 
              <!-- Nav tabs -->
              <ul class="nav nav-tabs nav-justified " role="tablist">
                <li class="active"><a href="#popular" role="tab" data-toggle="tab">berita terbaru</a></li>
                <li><a href="#recent" role="tab" data-toggle="tab">berita populer</a></li>
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="popular">
                  <ul class="list-unstyled">
                    @foreach($latestnews as $i => $item)
                      @if($i<5)
                      <li> <a href="{{route('front.berita', $item->id)}}">
                        <div class="row">
                          <div class="col-sm-5 col-md-4"><img class="img-thumbnail pull-left" src="{{url('/')}}{{$item->file}}" width="164" style="max-height:55px;" alt=""/> </div>
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
                              <div class="time"><span class="ion-android-data icon"></span>
                                {{ \Carbon\Carbon::parse($item->created_at)->toFormattedDateString() }}
                              </div>
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
                          <div class="col-sm-5 col-md-4"><img class="img-thumbnail pull-left" src="{{url('/')}}{{$item->file}}" width="164" style="max-height:55px;" alt=""/> </div>
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
      <!-- right sec end --> 
    </div>
  </div>
  <!-- data end --> 
@endsection