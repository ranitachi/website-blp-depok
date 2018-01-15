@extends('layouts.master-backend')

@section('title')
    <title>Dashboard - BLP Official Website 2017</title>
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
                                    <div class="intval text-left">{{count($berita)}}</div>
                                    <div class="line">
                                        <div class="subtitle"><a href="{{URL::to('berita')}}">Dalam Jumlah Total</a></div>
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
                                        <span class="fa fa-camera-retro"></span>
                                    </div>
                                </div>
                                <div class="col-sm-8">                                                    
                                    <div class="line">
                                        <div class="title text-primary">Dokumentasi Foto</div>         
                                        <div class="title pull-right">
                                            
                                               <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> Ok</div>
                                           
                                        </div>
                                    </div>                                        
                                    <div class="intval text-left">{{count($foto)}}</div>                                        
                                    <div class="line">
                                        <div class="subtitle"><a href="{{URL::to('foto')}}">Dalam Jumlah Total</a></div>
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
                                    <div class="intval text-left">{{count($video)}}</div>
                                    <div class="line">
                                        <div class="subtitle"><a href="{{URL::to('video')}}">Dalam Jumlah Total</a></div>
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
                                        <span class="icon-picture"></span>
                                    </div>
                                </div>
                                <div class="col-sm-8">                                                    
                                    <div class="line">
                                        <div class="title">Slider</div>
                                        <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> Ok</div>
                                    </div>                                        
                                    <div class="intval text-left">{{count($slider)}}</div>
                                    <div class="line">
                                        <div class="subtitle"><a href="{{URL::to('slider')}}">Dalam Jumlah Total</a></div>
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
                            <canvas id="myChart" width="400" height="300"></canvas>               
                        </div>
                    </div>
                </div>
                
@php
    $tgl=$data='';
    for($i=1;$i<=$jlhhari;$i++)
    {
        $wkt=date('Y-m-d',strtotime($tahun.'-'.$bulan.'-'.$i));
        $tgl.="$i,";
        if(isset($vis[$wkt]))
        {
                $data.=count($vis[$wkt]).',';
        }
        else
            $data.='0,';
    }
    $tgl=substr($tgl,0,-1);
    $data=substr($data,0,-1);
    //dd($vis);    
@endphp

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
                            @php
                                if($k==5)
                                    break;
                            @endphp
                            <tr>
                                <th>{{($k+1)}}</th>
                                <th><a href="{{URL::to('berita/'.$v->id)}}">{{substr($v->title,0,60)}}</a></th>
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
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [{{$tgl}}],
            datasets: [{
                label: '# Jumlah Pengunjung {{bulan($bulan)}} - {{$tahun}} ',
                data: [{{$data}}],
                backgroundColor: [
                              'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    
</script>
@endsection