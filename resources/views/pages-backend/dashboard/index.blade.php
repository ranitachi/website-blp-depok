@extends('layouts.master-backend')

@section('title')
    <title>Dashboard - Simanda 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Dashboard</h1>
            <p>Selamat datang di Dashboard anda.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li class="active">Dashboard</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0 margin-top-0">
                    <li>                                        
                        <!-- START WIDGET -->
                        <div class="app-widget-tile app-widget-highlight">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon icon-lg">
                                        <span class="icon-briefcase"></span>
                                    </div>
                                </div>
                                <div class="col-sm-8">                                                    
                                    <div class="line">
                                        <div class="title">Data Berita</div>
                                        <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> Ok</div>
                                    </div>                                        
                                    <div class="intval text-left">22</div>
                                    <div class="line">
                                        <div class="subtitle"><a href="22">Dalam Jumlah Total</a></div>
                                    </div>
                                </div>
                            </div>                                            
                        </div>
                        <!-- END WIDGET -->                                        
                    </li>
                </ul>
            
            </div>
                
            <div class="col-md-3">
                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0 margin-top-0">
                    <li>                                        
                        <!-- START WIDGET -->
                        <div class="app-widget-tile app-widget-highlight">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon icon-lg">
                                        <span class="fa fa-image"></span>
                                    </div>
                                </div>
                                <div class="col-sm-8">                                                    
                                    <div class="line">
                                        <div class="title text-primary">Dokumentasi Foto</div>         
                                        <div class="title pull-right">
                                            
                                               <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> Ok</div>
                                           
                                        </div>
                                    </div>                                        
                                    <div class="intval text-left">22</div>                                        
                                    <div class="line">
                                        <div class="subtitle"><a href="#">Dalam Jumlah Total</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END WIDGET -->                                        
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0 margin-top-0">
                    <li>                                        
                        <!-- START WIDGET -->
                        <div class="app-widget-tile app-widget-highlight">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon icon-lg">
                                        <span class="fa fa-youtube-play"></span>
                                    </div>
                                </div>
                                <div class="col-sm-8">                                                    
                                    <div class="line">
                                        <div class="title">Dokumentasi Video </div>
                                        <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> Ok</div>
                                    </div>                                        
                                    <div class="intval text-left">33</div>
                                    <div class="line">
                                        <div class="subtitle"><a href="#">Dalam Jumlah Total</a></div>
                                    </div>
                                </div>
                            </div>                                            
                        </div>
                        <!-- END WIDGET -->                                        
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0 margin-top-0">
                    <li>                                        
                        <!-- START WIDGET -->
                        <div class="app-widget-tile app-widget-highlight">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon icon-lg">
                                        <span class="icon-users"></span>
                                    </div>
                                </div>
                                <div class="col-sm-8">                                                    
                                    <div class="line">
                                        <div class="title">User</div>
                                        <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> Ok</div>
                                    </div>                                        
                                    <div class="intval text-left">44</div>
                                    <div class="line">
                                        <div class="subtitle"><a href="#">Dalam Jumlah Total</a></div>
                                    </div>
                                </div>
                            </div>                                            
                        </div>
                        <!-- END WIDGET -->                                        
                    </li>
                </ul>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <!-- HEADING -->
                    <div class="app-heading app-heading-small">                                        
                        <div class="title">
                            <h2>Statistik Pengunjung Web</h2>
                        </div>                 
                    </div>
                    <div id="canvas-holder" style="width:100%">
                        <!--<canvas id="chart-area" />-->
                        <div class="block-content">
                                        <div class="app-chart-wrapper app-chart-with-axis">
                                            <div id="yaxis" class="app-chart-yaxis"></div>
                                            <div class="app-chart-holder" id="dashboard-chart-line" style="height: 325px;"></div>
                                            <div id="xaxis" class="app-chart-xaxis"></div>
                                        </div>
                                    </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="block">
                    <!-- HEADING -->
                    <div class="app-heading app-heading-small">                                        
                        <div class="title">
                            <h2>Data Berita Terbaru</h2>
                           
                        </div>                 
                    </div>
                    <table class="table table-striped" style="font-size:11px;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Kategori</th>
                                <th>Jlh View</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($berita as $k => $v)
                            <tr>
                                <th>{{($k+1)}}</th>
                                <th><a href="{{URL::to('berita/'.$v->id)}}">{{$v->title}}</a></th>
                                <th>
                                    {{date('d/m/Y', strtotime($v->created_at))}}<br>
                                    {{date('H:i:s', strtotime($v->created_at))}}
                                </th>
                                <th><span class="label label-success label-bordered">{{$kat[$v->id_kategori]->nama_kategori}}</span></th>
                                <th><span class="label label-primary label-bordered">{{$v->view}}</span></th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pull-right"><a href="{{URL::to('berita')}}" class="btn btn-xs btn-shadowed btn-primary">Selengkapnya</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTAINER -->
@endsection

@section('pagescripts')    
    <script src="{{asset('/chartjs/Chart.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/js/vendor/rickshaw/d3.v3.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/js/vendor/rickshaw/rickshaw.min.js')}}"></script>
    <script>
          
    </script>
@endsection