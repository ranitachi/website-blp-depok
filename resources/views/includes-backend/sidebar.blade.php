<div class="app-sidebar app-navigation app-navigation-fixed scroll app-navigation-style-blue app-navigation-open-hover dir-left" data-type="close-other">
    <a href="#" class="app-navigation-logo">
        Simanda - BLP Kota Depok
        <button class="app-navigation-logo-button mobile-hidden" data-sidepanel-toggle=".app-sidepanel">
            <span class="icon-alarm"></span> 
            
            
                    <span class="app-navigation-logo-button-alert">77</span>        
    
        </button>
    </a>
    @php
        $path=Request::path();
    @endphp
    <nav>
        <ul>
            <li class="title">MAIN</li>
            <li><a href="{{route('dashboard-admin.index')}}" class="{{(strpos($path,'dashboard')!==false ? 'active' : '')}}"><span class="nav-icon-circle">DS</span> Dashboard</a></li>
            <li><a href="{{ URL::to('profil') }}" class="{{(strpos($path,'profil')!==false ? 'active' : '')}}" class=""><span class="nav-icon-circle">PL</span> Profil Lembaga</a></li>
            <li><a href="{{ URL::to('visi-misi') }}" class="{{(strpos($path,'visi-misi')!==false ? 'active' : '')}}" class=""><span class="nav-icon-circle">VM</span> Visi Misi Lembaga</a></li>
            <li><a href="{{ URL::to('struktur-organisasi') }}" class="{{(strpos($path,'struktur-organisasi')!==false ? 'active' : '')}}" class=""><span class="nav-icon-circle">SO</span> Struktur Organisasi</a></li>
            
            <li class="{{($path=='berita' ? 'open' : (strpos($path,'berita-form')!==false ? 'open' : (strpos($path,'kategori')!==false ? 'open' : '')))}}">
                <a href="#"><span class="nav-icon-circle">BL</span> Berita Lembaga</a>
                <ul>
                    <li><a href="{{ URL::to('kategori') }}" class="{{($path=='kategori' ? 'active' : '')}}"><span class="nav-icon-circle">KT</span> Data kategori</a></li>
                    <li><a href="{{ URL::to('berita') }}" class="{{($path=='berita' ? 'active' : '')}}"><span class="nav-icon-circle">DB</span> Data Berita</a></li>
                </ul>            
            </li>
            
            <li class="{{($path=='dokumentasi' ? 'open' : (strpos($path,'foto')!==false ? 'open' : (strpos($path,'video')!==false ? 'open' : '')))}}">
                <a href="#"><span class="nav-icon-circle">BL</span> Dokumentasi Lembaga</a>
                <ul>
                    <li><a href="{{URL::to('foto')}}" class="{{($path=='foto' ? 'active' : '')}}"><span class="nav-icon-circle">DF</span> Dokumentasi Foto</a></li>
                    <li><a href="{{URL::to('video')}}" class="{{($path=='video' ? 'active' : '')}}"><span class="nav-icon-circle">DV</span> Dokumentasi Video</a></li>
                </ul>            
            </li>

            <li><a href="{{ URL::to('kontak') }}" class="{{(strpos($path,'kontak')!==false ? 'active' : '')}}" class=""><span class="nav-icon-circle">KL</span> Kontak Lembaga</a></li>
            
            <li><a href="{{ URL::to('slider') }}" class="{{(strpos($path,'slider')!==false ? 'active' : '')}}" class=""><span class="nav-icon-circle">SL</span> Slider</a></li>

            <li><a href="{{ URL::to('stat') }}" class="{{(strpos($path,'stat')!==false ? 'active' : '')}}" class=""><span class="nav-icon-circle">SK</span> Stat Kunjungan</a></li>

            <li class="title">Simanda &nbsp;//&nbsp; Copyrights &reg; Pemkot Depok, 2017</li>
        </ul>
    </nav>
</div>