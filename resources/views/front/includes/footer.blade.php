<footer>
    <div class="top-sec">
      <div class="container ">
        <div class="row match-height-container">
          <div class="col-sm-6 subscribe-info wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
            <div class="row">
              <div class="col-sm-16">
                <div class="f-title">Unit Layanan Pengadaan</div>
                <p>
                ULP adalah unit lembaga pemerintahan yang berfungsi melaksanakan pengadaan barang/jasa yang bersifat permanen, dapat berdiri sendiri atau melekat pada unit yang sudah ada.
                </p>
              </div>
              <div class="col-sm-16">
                <div class="f-title">Pemerintah Kota Depok</div>
              </div>
            </div>
          </div>
          <div class="col-sm-5 recent-posts  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
            <div class="f-title">berita populer</div>
            <ul class="list-unstyled">
              @foreach($popularnews as $i => $item)
                @if($i<3)
                  <li> <a href="{{route('front.berita', $item->id)}}">
                  <div class="row">
                    <div class="col-sm-4"><img class="img-thumbnail pull-left" src="{{url('/')}}{{$item->file}}" width="70" height="70" alt=""/> </div>
                    <div class="col-sm-12">
                      <h4>{{$item->title}}</h4>
                      <div class="f-sub-info">
                        <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                        <div class="comments"><span class="ion-chatbubbles icon"></span>{{$item->view}}</div>
                      </div>
                    </div>
                  </div>
                  </a> </li>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="col-sm-5 recent-posts  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
            <div class="f-title">berita terbaru</div>
            <ul class="list-unstyled">
              @foreach($latestnews as $i => $item)
                @if($i<3)
                  <li> <a href="{{route('front.berita', $item->id)}}">
                  <div class="row">
                    <div class="col-sm-4"><img class="img-thumbnail pull-left" src="{{url('/')}}{{$item->file}}" width="70" height="70" alt=""/> </div>
                    <div class="col-sm-12">
                      <h4>{{$item->title}}</h4>
                      <div class="f-sub-info">
                        <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                        <div class="comments"><span class="ion-chatbubbles icon"></span>{{$item->view}}</div>
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
    </div>
    <div class="btm-sec">
      <div class="container">
        <div class="row">
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