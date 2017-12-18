@extends('front.layouts.master')

@section('title')
  <title>Selamat Datang - Unit Layanan Pengadaan Pemerintah Kota Depok</title>
@endsection

@section('content')
<div class="container">
    <div class="row"> 
      <!-- hot news start -->
      <div class="col-sm-16 hot-news hidden-xs">
        <div class="row">
          <div class="col-sm-15"> <span class="ion-ios7-timer icon-news pull-left"></span>
            <ul id="js-news" class="js-hidden">
              <li class="news-item"><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor</a></li>
              <li class="news-item"><a href="">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</a></li>
              <li class="news-item"><a href="">Donec quam felis, ultricies nec, pellentesque eu</a></li>
              <li class="news-item"><a href="">Nulla consequat massa quis enim. Donec pede justo, fringilla</a></li>
              <li class="news-item"><a href=""> Donec pede justo, fringilla vel, aliquet nec, vulputate eget ultricies nec, pellentesque</a></li>
              <li class="news-item"><a href="">In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo</a></li>
              <li class="news-item"><a href="">Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis </a></li>
            </ul>
          </div>
          <div class="col-sm-1 shuffle text-right"><a href="#"><span class="ion-shuffle"></span></a></div>
        </div>
      </div>
      <!-- hot news end --> 
      <!-- banner outer start -->
      <div  class="col-sm-16 banner-outer wow fadeInLeft animated" data-wow-delay="1s" data-wow-offset="50">
        <div class="row">
          <div class="col-sm-16 col-md-16 col-lg-16"> 
            <!-- carousel start -->
            <div id="sync1" class="owl-carousel">
              <div class="box item"> <a href="#">
                <div class="carousel-caption">Republican budget leader Paul Ryan
                  faces key test in fiscal talks</div>
                <img class="img-responsive" src="{{asset('front/images/banner-slider/slide-img-1.jpg')}}" width="1600" height="972" alt=""/>
                <div class="overlay"></div>
                <div class="overlay-info">
                  <div class="cat">
                    <p class="cat-data"><span class="ion-model-s"></span>lifestyle</p>
                  </div>
                  <div class="info">
                    <p><span class="ion-android-data"></span>Dec 16 2014<span class="ion-chatbubbles"></span>351</p>
                  </div>
                </div>
                </a></div>
              <div class="box item"> <a href="#">
                <div class="carousel-caption">Republican budget leader Paul Ryan
                  faces key test in fiscal talks</div>
                <img class="img-responsive"  src="{{asset('front/images/banner-slider/slide-img-2.jpg')}}"  width="1600" height="972" alt=""/>
                <div class="overlay"></div>
                <div class="overlay-info">
                  <div class="cat">
                    <p class="cat-data"><span class="ion-flask"></span>business</p>
                  </div>
                  <div class="info">
                    <p><span class="ion-android-data"></span>Dec 16 2014<span class="ion-chatbubbles"></span>351</p>
                  </div>
                </div>
                </a></div>
              <div class="box item"> <a href="#">
                <div class="carousel-caption">Republican budget leader Paul Ryan
                  faces key test in fiscal talks</div>
                <img class="img-responsive"  src="{{asset('front/images/banner-slider/slide-img-3.jpg')}}"  width="1600" height="972" alt=""/>
                <div class="overlay"></div>
                <div class="overlay-info">
                  <div class="cat">
                    <p class="cat-data"><span class="ion-model-s"></span>travel</p>
                  </div>
                  <div class="info">
                    <p><span class="ion-android-data"></span>Dec 16 2014<span class="ion-chatbubbles"></span>351</p>
                  </div>
                </div>
                </a></div>
              <div class="box item"> <a href="#">
                <div class="carousel-caption">Republican budget leader Paul Ryan
                  faces key test in fiscal talks</div>
                <img class="img-responsive" src="{{asset('front/images/banner-slider/slide-img-4.jpg')}}"  width="1600" height="972" alt=""/>
                <div class="overlay"></div>
                <div class="overlay-info">
                  <div class="cat">
                    <p class="cat-data"><span class="ion-model-s"></span>soprt</p>
                  </div>
                  <div class="info">
                    <p><span class="ion-android-data"></span>Dec 16 2014<span class="ion-chatbubbles"></span>351</p>
                  </div>
                </div>
                </a></div>
              <div class="box item"> <a href="#">
                <div class="carousel-caption">Republican budget leader Paul Ryan
                  faces key test in fiscal talks</div>
                <img  class="img-responsive" src="{{asset('front/images/banner-slider/slide-img-5.jpg')}}"  width="1600" height="972" alt=""/>
                <div class="overlay"></div>
                <div class="overlay-info">
                  <div class="cat">
                    <p class="cat-data"><span class="ion-model-s"></span>Lifestyle</p>
                  </div>
                  <div class="info">
                    <p><span class="ion-android-data"></span>Dec 16 2014<span class="ion-chatbubbles"></span>351</p>
                  </div>
                </div>
                </a></div>
              <div class="box item"> <a href="#">
                <div class="carousel-caption">Republican budget leader Paul Ryan
                  faces key test in fiscal talks</div>
                <img class="img-responsive" src="{{asset('front/images/banner-slider/slide-img-6.jpg')}}"  width="1600" height="972" alt=""/>
                <div class="overlay"></div>
                <div class="overlay-info">
                  <div class="cat">
                    <p class="cat-data"><span class="ion-model-s"></span>sport</p>
                  </div>
                  <div class="info">
                    <p><span class="ion-android-data"></span>Dec 16 2014<span class="ion-chatbubbles"></span>351</p>
                  </div>
                </div>
                </a></div>
              <div class="box item"> <a href="#">
                <div class="carousel-caption">Republican budget leader Paul Ryan
                  faces key test in fiscal talks</div>
                <img class="img-responsive" src="{{asset('front/images/banner-slider/slide-img-7.jpg')}}"  width="1600" height="972" alt=""/>
                <div class="overlay"></div>
                <div class="overlay-info">
                  <div class="cat">
                    <p class="cat-data"><span class="ion-model-s"></span>Lifestyle</p>
                  </div>
                  <div class="info">
                    <p><span class="ion-android-data"></span>Dec 16 2014<span class="ion-chatbubbles"></span>351</p>
                  </div>
                </div>
                </a></div>
              <div class="box item"> <a href="#">
                <div class="carousel-caption">Republican budget leader Paul Ryan
                  faces key test in fiscal talks</div>
                <img class="img-responsive"   src="{{asset('front/images/banner-slider/slide-img-8.jpg')}}"  width="1600" height="972" alt=""/>
                <div class="overlay"></div>
                <div class="overlay-info">
                  <div class="cat">
                    <p class="cat-data"><span class="ion-model-s"></span>business</p>
                  </div>
                  <div class="info">
                    <p><span class="ion-android-data"></span>Dec 16 2014<span class="ion-chatbubbles"></span>351</p>
                  </div>
                </div>
                </a></div>
            </div>
            <div class="row">
              <div id="sync2" class="owl-carousel">
                <div class="item"><img class=" img-responsive" src="{{asset('front/images/banner-slider/slide-img-1.jpg')}}"  width="1600" height="972" alt=""/></div>
                <div class="item"><img class="img-responsive" src="{{asset('front/images/banner-slider/slide-img-2.jpg')}}"  width="1600" height="972" alt=""/></div>
                <div class="item"><img class="img-responsive" src="{{asset('front/images/banner-slider/slide-img-3.jpg')}}"  width="1600" height="972" alt=""/></div>
                <div class="item"><img class="img-responsive " src="{{asset('front/images/banner-slider/slide-img-4.jpg')}}"  width="1600" height="972" alt=""/></div>
                <div class="item"><img class="img-responsive " src="{{asset('front/images/banner-slider/slide-img-5.jpg')}}"  width="1600" height="972" alt=""/></div>
                <div class="item"><img class="img-responsive " src="{{asset('front/images/banner-slider/slide-img-6.jpg')}}"  width="1600" height="972" alt=""/></div>
                <div class="item"><img class="img-responsive" src="{{asset('front/images/banner-slider/slide-img-7.jpg')}}"  width="1600" height="972" alt=""/></div>
                <div class="item"><img class="img-responsive " src="{{asset('front/images/banner-slider/slide-img-8.jpg')}}"  width="1600" height="972" alt=""/></div>
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
                  <div class="main-title">pengumuman</div>
                </div>
                <div class="row">
                  <div class="topic col-sm-16"> <a href="#"><img class=" img-thumbnail" src="{{asset('front/images/science/sci-main.jpg')}}" width="600" height="227" alt=""/>
                    <h3> Curabitur ullamcorper ultricies nisi nam eget dui</h3>
                    <div class="text-danger sub-info-bordered ">
                      <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                      <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                    </div>
                    </a>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                  </div>
                  <div class="col-sm-16">
                    <ul class="list-unstyled  top-bordered ex-top-padding">
                      <li> <a href="#">
                        <div class="row">
                          <div class="col-lg-3 col-md-4 hidden-sm  "><img width="76" height="76" alt="" src="{{asset('front/images/science/sci-main.jpg')}}" class="img-thumbnail pull-left"> </div>
                          <div class="col-lg-13 col-md-12">
                            <h4>Irish cream and chocolate
                              cheesecake </h4>
                            <div class="text-danger sub-info">
                              <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                              <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            </div>
                          </div>
                        </div>
                        </a> </li>
                      <li> <a href="#">
                        <div class="row ">
                          <div class="col-lg-3 col-md-4 hidden-sm  "><img width="76" height="76" alt="" src="{{asset('front/images/science/sci-main.jpg')}}" class="img-thumbnail pull-left"> </div>
                          <div class="col-lg-13 col-md-12">
                            <h4>Irish cream and chocolate
                              cheesecake </h4>
                            <div class="text-danger sub-info">
                              <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                              <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            </div>
                          </div>
                        </div>
                        </a> </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-8 col-xs-16 wow fadeInRight animated" data-wow-delay="0.5s" data-wow-offset="130">
                <div class="main-title-outer pull-left">
                  <div class="main-title">kegiatan</div>
                  
                </div>
                <div class="row left-bordered">
                  <div class="topic col-sm-16"> <a href="#"> <img  class="img-thumbnail" src="{{asset('front/images/science/sci-main.jpg')}}" width="600" height="227" alt=""/>
                    <h3>Feds open formal probe into tesla
                      electric ship</h3>
                    <div class="text-danger sub-info-bordered">
                      <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                      <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                    </div>
                    </a>
                    <p>Lorem Ipsum has been the standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                  </div>
                  <div class="col-sm-16">
                    <ul class="list-unstyled top-bordered ex-top-padding">
                      <li> <a href="#">
                        <div class="row">
                          <div class="col-lg-3 col-md-4 hidden-sm  "><img width="76" height="76" alt="" src="{{asset('front/images/science/sci-main.jpg')}}" class="img-thumbnail pull-left"> </div>
                          <div class="col-lg-13 col-md-12">
                            <h4>Irish cream and chocolate
                              cheesecake </h4>
                            <div class="text-danger sub-info">
                              <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                              <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            </div>
                          </div>
                        </div>
                        </a> </li>
                      <li> <a href="#">
                        <div class="row ">
                          <div class="col-lg-3 col-md-4 hidden-sm  "><img width="76" height="76" alt="" src="{{asset('front/images/science/sci-main.jpg')}}" class="img-thumbnail pull-left"> </div>
                          <div class="col-lg-13 col-md-12">
                            <h4>Irish cream and chocolate
                              cheesecake </h4>
                            <div class="text-danger sub-info">
                              <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                              <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            </div>
                          </div>
                        </div>
                        </a> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <hr>
          </div>
          <!-- Scince & Travel end --> 
          
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
                <li class="active"><a href="#popular" role="tab" data-toggle="tab">berita populer</a></li>
                <li><a href="#recent" role="tab" data-toggle="tab">berita terbaru</a></li>
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="popular">
                  <ul class="list-unstyled">
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5 col-md-4"><img class="img-thumbnail pull-left" src="{{asset('front/images/popular/pop-1.jpg')}}" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11 col-md-12">
                          <h4>Tellus. Phasellus viverra nulla ut metus</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="{{asset('front/images/popular/pop-1.jpg')}}" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11 col-md-12">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="{{asset('front/images/popular/pop-1.jpg')}}" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11 col-md-12">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="{{asset('front/images/popular/pop-1.jpg')}}" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11 col-md-12">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="{{asset('front/images/popular/pop-1.jpg')}}" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11 col-md-12">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                  </ul>
                </div>
                <div class="tab-pane" id="recent">
                  <ul class="list-unstyled">
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="{{asset('front/images/popular/pop-1.jpg')}}" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="{{asset('front/images/popular/pop-1.jpg')}}" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="{{asset('front/images/popular/pop-1.jpg')}}" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4m Ipsum has been the standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="{{asset('front/images/popular/pop-1.jpg')}}" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="{{asset('front/images/popular/pop-1.jpg')}}" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
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