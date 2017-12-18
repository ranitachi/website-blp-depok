<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Globalnews - Home</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- bootstrap styles-->
<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- google font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
<!-- ionicons font -->
<link href="{{asset('front/css/ionicons.min.css')}}" rel="stylesheet">
<!-- animation styles -->
<link rel="stylesheet" href="{{asset('front/')}}css/animate.css" />
<!-- custom styles -->
<link href="{{asset('front/css/custom-red.css')}}" rel="stylesheet" id="style">
<!-- owl carousel styles-->
<link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('front/css/owl.transitions.css')}}">
<!-- magnific popup styles -->
<link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- preloader start -->
<div id="preloader">
  <div id="status"></div>
</div>
<!-- preloader end --> 

<!-- wrapper start -->
<div class="wrapper"> 
  <!-- header toolbar start -->
  <div class="header-toolbar">
    <div class="container">
      <div class="row">
        <div class="col-md-16 text-uppercase">
          <div class="row">
            <div class="col-sm-8 col-xs-16">
              <ul id="inline-popups" class="list-inline">
                <li class="hidden-xs"><a href="#">advertisement</a></li>
                <li><a class="open-popup-link" href="#log-in" data-effect="mfp-zoom-in">log in</a></li>
                <li><a class="open-popup-link" href="#create-account" data-effect="mfp-zoom-in">create account</a></li>
                <li><a  href="#">About</a></li>
              </ul>
            </div>
            <div class="col-xs-16 col-sm-8">
              <div class="row">
                <div id="weather" class="col-xs-16 col-sm-8 col-lg-9"></div>
                <div id="time-date" class="col-xs-16 col-sm-8 col-lg-7"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- header toolbar end --> 
  
  <!-- sticky header start -->
  <div class="sticky-header"> 
    <!-- header start -->
    <div class="container header">
      <div class="row">
        <div class="col-sm-5 col-md-5 wow fadeInUpLeft animated"><a class="navbar-brand" href="index.html">globalnews</a></div>
        <div class="col-sm-11 col-md-11 hidden-xs text-right"><img src="{{asset('front/images/ads/468-60-ad.gif')}}" width="468" height="60" alt=""/></div>
      </div>
    </div>
    <!-- header end --> 
    <!-- nav and search start -->
    <div class="nav-search-outer"> 
      <!-- nav start -->
      
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
          <div class="row">
            <div class="col-sm-16"> <a href="javascript:;" class="toggle-search pull-right"><span class="ion-ios7-search"></span></a>
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>
              <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav text-uppercase main-nav ">
                  <li class="active"><a href="index.html">home</a></li>
                  <li> <a href="javascript:void(0)">business</a></li>
                  <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">politics<span class="ion-ios7-arrow-down nav-icn"></span></a>
                    <ul class="dropdown-menu text-capitalize" role="menu">
                      <li><a href="javascript:void(0)"><span class="ion-ios7-arrow-right nav-sub-icn"></span>World News</a></li>
                      <li><a href="javascript:void(0)"><span class="ion-ios7-arrow-right nav-sub-icn"></span>U.S.</a></li>
                      <li><a href="javascript:void(0)"><span class="ion-ios7-arrow-right nav-sub-icn"></span>AFRICA</a></li>
                      <li><a href="javascript:void(0)"><span class="ion-ios7-arrow-right nav-sub-icn"></span>Arabian Gulf</a></li>
                      <li><a href="javascript:void(0)"><span class="ion-ios7-arrow-right nav-sub-icn"></span>Topics and Issues</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- nav end --> 
        <!-- search start -->
        
        <div class="search-container ">
          <div class="container">
            <form action="" method="" role="search">
              <input id="search-bar" placeholder="Type & Hit Enter.." autocomplete="off">
            </form>
          </div>
        </div>
        <!-- search end --> 
      </nav>
      <!--nav end--> 
    </div>
    <!-- nav and search end--> 
  </div>
  <!-- sticky header end --> 
  <!-- top sec start -->
  
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
                  <div class="main-title">science</div>
                  <div class="span-outer"><span class="pull-right text-danger last-update"><span class="ion-android-data icon"></span>Last update: 2 days ago</span> </div>
                </div>
                <div class="row">
                  <div class="topic col-sm-16"> <a href="#"><img class=" img-thumbnail" src="{{asset('front/images/science/sci-main.jpg')}}" width="600" height="227" alt=""/>
                    <h3> Curabitur ullamcorper ultricies nisi nam eget dui</h3>
                    <div class="text-danger sub-info-bordered ">
                      <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                      <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                      <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
                              <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
                              <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
                  <div class="main-title">travel</div>
                  <div class="span-outer"><span class="pull-right text-danger last-update"><span class="ion-android-data icon"></span>Last update: 2 days ago</span> </div>
                </div>
                <div class="row left-bordered">
                  <div class="topic col-sm-16"> <a href="#"> <img  class="img-thumbnail" src="{{asset('front/images/science/sci-main.jpg')}}" width="600" height="227" alt=""/>
                    <h3>Feds open formal probe into tesla
                      electric ship</h3>
                    <div class="text-danger sub-info-bordered">
                      <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                      <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                      <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
                              <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
                              <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
                <li class="active"><a href="#popular" role="tab" data-toggle="tab">popular</a></li>
                <li><a href="#recent" role="tab" data-toggle="tab">recent</a></li>
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
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
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
  
  <!-- Footer start -->
  <footer>
    <div class="top-sec">
      <div class="container ">
        <div class="row match-height-container">
          <div class="col-sm-6 subscribe-info wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
            <div class="row">
              <div class="col-sm-16">
                <div class="f-title">globalnews theme</div>
                <p>Lorem Ipsum has been the standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
              </div>
              <div class="col-sm-16">
                <div class="f-title">subscribe to news letter</div>
                <form class="form-inline">
                  <input type="email" class="form-control" id="input-email" placeholder="Type your e-mail adress">
                  <button type="submit" class="btn"> <span class="ion-paper-airplane text-danger"></span> </button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-sm-5 popular-tags  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
            <div class="f-title">popular tags</div>
            <ul class="tags list-unstyled pull-left">
              <li><a href="#">Business</a></li>
              <li><a href="#">Science</a></li>
              <li><a href="#">video conferece</a></li>
              <li><a href="#">conferece</a></li>
              <li><a href="#">Photo</a></li>
              <li><a href="#">education</a></li>
              <li><a href="#">Smart phones</a></li>
              <li><a href="#">Samsung mobile</a></li>
              <li><a href="#">AI</a></li>
              <li><a href="#">video conferece</a></li>
              <li><a href="#">conferece</a></li>
              <li><a href="#">education</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">computer</a></li>
            </ul>
          </div>
          <div class="col-sm-5 recent-posts  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
            <div class="f-title">recent posts</div>
            <ul class="list-unstyled">
              <li> <a href="#">
                <div class="row">
                  <div class="col-sm-4"><img class="img-thumbnail pull-left" src="images/footer-recent/f-recent-1.jpg" width="70" height="70" alt=""/> </div>
                  <div class="col-sm-12">
                    <h4>The evolution of the apple ..</h4>
                    <div class="f-sub-info">
                      <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                      <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                      <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                    </div>
                  </div>
                </div>
                </a> </li>
              <li> <a href="#">
                <div class="row">
                  <div class="col-sm-4 "><img class="img-thumbnail pull-left" src="images/footer-recent/f-recent-2.jpg" width="70" height="70" alt=""/> </div>
                  <div class="col-sm-12">
                    <h4>The evolution of the apple ..</h4>
                    <div class="f-sub-info">
                      <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                      <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                      <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                    </div>
                  </div>
                </div>
                </a> </li>
              <li> <a href="#">
                <div class="row">
                  <div class="col-sm-4"><img class="img-thumbnail pull-left" src="images/footer-recent/f-recent-3.jpg" width="70" height="70" alt=""/> </div>
                  <div class="col-sm-12">
                    <h4>The evolution of the apple ..</h4>
                    <div class="f-sub-info">
                      <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                      <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                      <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                    </div>
                  </div>
                </div>
                </a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="btm-sec">
      <div class="container">
        <div class="row">
          <div class="col-sm-16">
            <div class="row">
              <div class="col-sm-10 col-xs-16 f-nav wow fadeInDown animated" data-wow-delay="0.5s" data-wow-offset="10">
                <ul class="list-inline ">
                  <li> <a href="#"> Home </a> </li>
                  <li> <a href="#"> Business </a> </li>
                  <li> <a href="#"> Science </a> </li>
                  <li> <a href="#"> Lifestyle </a> </li>
                  <li> <a href="#"> Politics </a> </li>
                  <li> <a href="#"> Sport </a> </li>
                  <li> <a href="#">short codes</a> </li>
                  <li> <a href="#"> Contact </a> </li>
                </ul>
              </div>
              <div class="col-sm-6 col-xs-16 copyrights text-right wow fadeInDown animated" data-wow-delay="0.5s" data-wow-offset="10">© 2014 GLOBALNEWS THEME - ALL RIGHTS RESERVED</div>
            </div>
          </div>
          <div class="col-sm-16 f-social  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="10">
            <ul class="list-inline">
              <li> <a href="#"><span class="ion-social-twitter"></span></a> </li>
              <li> <a href="#"><span class="ion-social-facebook"></span></a> </li>
              <li> <a href="#"><span class="ion-social-instagram"></span></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer end -->
  <div id="create-account" class="white-popup mfp-with-anim mfp-hide">
    <form role="form">
      <h3>Create Account</h3>
      <hr>
      <div class="row">
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" tabindex="1">
          </div>
        </div>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" tabindex="2">
          </div>
        </div>
      </div>
      <div class="form-group">
        <input type="text" name="display_name" id="display_name" class="form-control" placeholder="Display Name" tabindex="3">
      </div>
      <div class="form-group">
        <input type="email" name="email" id="email" class="form-control " placeholder="Email Address" tabindex="4">
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="5">
          </div>
        </div>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" tabindex="6">
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-16">
          <input type="submit" value="Register" class="btn btn-danger btn-block btn-lg" tabindex="7">
        </div>
      </div>
    </form>
  </div>
  <div id="log-in" class="white-popup mfp-with-anim mfp-hide">
    <form role="form">
      <h3>Log In Your Account</h3>
      <hr>
      <div class="form-group">
        <input type="text" name="access_name" id="access_name" class="form-control" placeholder="Name" tabindex="3">
      </div>
      <div class="form-group">
        <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="4">
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-16">
          <input type="submit" value="Log In" class="btn btn-danger btn-block btn-lg" tabindex="7">
        </div>
      </div>
    </form>
  </div>
</div>
<!-- wrapper end --> 

<!-- jQuery --> 
<script src="{{asset('front/js/jquery.min.js')}}"></script> 
<!--jQuery easing--> 
<script src="{{asset('front/js/jquery.easing.1.3.js')}}"></script> 
<!-- bootstrab js --> 
<script src="{{asset('front/js/bootstrap.js')}}"></script> 
<!--style switcher--> 
<script src="{{asset('front/js/style-switcher.js')}}"></script> <!--wow animation--> 
<script src="{{asset('front/js/wow.min.js')}}"></script> 
<!-- time and date --> 
<script src="{{asset('front/js/moment.min.js')}}"></script> 
<!--news ticker--> 
<script src="{{asset('front/js/jquery.ticker.js')}}"></script> 
<!-- owl carousel --> 
<script src="{{asset('front/js/owl.carousel.js')}}"></script> 
<!-- magnific popup --> 
<script src="{{asset('front/js/jquery.magnific-popup.js')}}"></script> 
<!-- weather --> 
<script src="{{asset('front/js/jquery.simpleWeather.min.js')}}"></script> 
<!-- calendar--> 
<script src="{{asset('front/js/jquery.pickmeup.js')}}"></script> 
<!-- go to top --> 
<script src="{{asset('front/js/jquery.scrollUp.js')}}"></script> 
<!-- scroll bar --> 
<script src="{{asset('front/js/jquery.nicescroll.js')}}"></script> 
<script src="{{asset('front/js/jquery.nicescroll.plus.js')}}"></script> 
<!--masonry--> 
<script src="{{asset('front/js/masonry.pkgd.js')}}"></script> 
<!--media queries to js--> 
<script src="{{asset('front/js/enquire.js')}}"></script> 
<!--custom functions--> 
<script src="{{asset('front/js/custom-fun.js')}}"></script>
</body>
</html>