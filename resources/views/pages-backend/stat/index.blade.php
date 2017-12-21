@extends('layouts.master-backend')

@section('title')
    <title>Statistik Pengunjung - BLP Official Website 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Statistik Pengunjung</h1>
            <p>Selamat datang di Statistik Pengunjung anda.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li class="active">Statistik Pengunjung</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->
    
    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-1 text-right" style="padding-top:10px;">Bulan</div>
                            
                            <div class="col-md-2">
                                <select name="bulan" id="bulan" class="select2 form-control" data-placeholder="-Bulan-" onchange="stat()">
                                    <option>- Bulan -</option>
                                    @for($i = 1; $i <= 12; $i++)
                                        @if($i==date('n'))
                                            <option value="{{$i}}" selected>{{bulan($i)}}</option>
                                        @else    
                                            <option value="{{$i}}">{{bulan($i)}}</option>
                                        @endif
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-1 text-right" style="padding-top:10px;">Tahun</div>
                            
                            <div class="col-md-2">
                                <select name="tahun" id="tahun" class="select2 form-control" data-placeholder="-tahun-" onchange="stat()">
                                    <option>- Tahun -</option>
                                    @for($i = (date('Y')-5); $i <= date('Y'); $i++)
                                        @if(date('Y')==$i)
                                            <option value="{{$i}}" selected>{{($i)}}</option>
                                        @else
                                            <option value="{{$i}}">{{($i)}}</option>
                                        @endif
                                    @endfor
                                </select>
                            </div>
                        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-12">

                <div class="block">
                    <!-- HEADING -->
                    <div class="app-heading app-heading-small">                                        
                        <div class="title">
                            <h2>Statistik Pengunjung Web</h2>
                        </div>                 
                    </div>
                    <div id="data"></div>
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
        $(document).ready(function(){
            var tahun=$('#tahun').val();
            var bulan=$('#bulan').val();
            loaddata(bulan,tahun);
        });

        function loaddata(bulan,tahun)
        { 
            $('#data').load(APP_URL+'/stat-data/'+bulan+'/'+tahun,function(){

            });
        }
        function stat()
        {
            var tahun=$('#tahun').val();
            var bulan=$('#bulan').val();
            loaddata(bulan,tahun);
        }
    </script>
@endsection