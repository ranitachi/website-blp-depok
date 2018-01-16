<!-- sticky header start -->
<div class="sticky-header"> 
    <!-- header start -->
    <div class="container header">
      <div class="row">
        <div class="col-sm-5 col-md-5"><a class="navbar-brand"></a></div>
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
                  <li class="active"><a href="{{route('front.homeindex')}}">beranda</a></li>
                  <li> <a href="{{route('front.profileindex')}}">profil</a></li>
                  <li> <a href="{{route('front.visimisi')}}">visi misi</a></li>
                  <li> <a href="{{route('front.strukturorg')}}">struktur organisasi</a></li>
                  <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">dokumentasi<span class="ion-ios7-arrow-down nav-icn"></span></a>
                    <ul class="dropdown-menu text-capitalize" role="menu">
                      <li><a href="{{route('front.foto')}}"><span class="ion-ios7-arrow-right nav-sub-icn"></span>foto</a></li>
                      <li><a href="{{route('front.video')}}"><span class="ion-ios7-arrow-right nav-sub-icn"></span>video</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">berita<span class="ion-ios7-arrow-down nav-icn"></span></a>
                    <ul class="dropdown-menu text-capitalize" role="menu">
                      @php
                        $kategori = \App\Model\Kategori::get();
                      @endphp
                      @foreach($kategori as $item)
                        <li><a href="{{route('front.newsbycat', $item->id)}}"><span class="ion-ios7-arrow-right nav-sub-icn"></span>{{$item->nama_kategori}}</a></li>
                      @endforeach
                    </ul>
                  </li>                 
                  <li> <a href="{{route('front.kontak')}}">kontak kami</a></li>
                  <li> <a href="{{route('front.regulasi')}}">data regulasi</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- nav end --> 
        <!-- search start -->
        
        <div class="search-container ">
          <div class="container">
            <form action="{{ route('search.result') }}" method="get" role="search">
              <input id="search-bar" placeholder="Ketik dan tekan Enter..." autocomplete="off" name="keyword">
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