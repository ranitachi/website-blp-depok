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
                                        <div class="title">Paket Lelang</div>
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
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                </div>
                                <div class="col-sm-8">                                                    
                                    <div class="line">
                                        <div class="title text-success">Data Rapat</div>         
                                        <div class="title pull-right">
                                            
                                                <span class="label label-warning label-ghost label-bordered">33 Menunggu</span>
                                           
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
                                        <span class="icon-apartment"></span>
                                    </div>
                                </div>
                                <div class="col-sm-8">                                                    
                                    <div class="line">
                                        <div class="title">Jumlah Perusahaan</div>
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
                                        <div class="title">Tenaga Ahli</div>
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
                            <h2>Visualisasi Data</h2>
                        </div>                 
                    </div>
                    <div id="canvas-holder" style="width:100%">
                        <canvas id="chart-area" />
                    </div>
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="block">
                    <!-- HEADING -->
                    <div class="app-heading app-heading-small">                                        
                        <div class="title">
                            <h2>Informasi Paket Lelang Anda</h2>
                            <p>Berikut adalah tabel informasi paket lelang anda.</p>
                        </div>                 
                    </div>
                    <table class="table table-striped" style="font-size:11px;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Pekerjaan</th>
                                <th>Nilai Pagu</th>
                                <th>Nilai HPS</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTAINER -->
@endsection

@section('pagescripts')    
    <script src="{{asset('/chartjs/Chart.bundle.js')}}"></script>
    <script>
          
    </script>
@endsection