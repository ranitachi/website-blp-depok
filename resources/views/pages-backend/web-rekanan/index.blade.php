@extends('layouts.master-backend')

@section('title')
    <title>Web Rekanan - BLP Official Website 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Web Rekanan</h1>
            <p>Berikut Adalah Halaman untuk manajemen Web Rekanan.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Web Rekanan</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Web Rekanan</h2>
                </div>
                <div class="heading-elements">
                    <a href="#" class="btn btn-primary btn-shadowed btn-xs">
                        <span class="fa fa-plus"></span>&nbsp;&nbsp;
                        Tambah Data Web Rekanan
                    </a>
                </div>
                              
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered datatable-extended table-head-custom">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Logo Web</th>
                            <th>Nama Web</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>    
                    <tbody>
                        
                    </tbody>
                </table>  
                </div>
            </div>
        </div>
    </div>
    <style>
    table td
    {
        padding:5px !important;
    }
    </style>
    <!-- END PAGE CONTAINER -->
@endsection

@section('pagescripts') 
    <script type="text/javascript" src="{{ asset('theme/js/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/vendor/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            var pesan='{{(session('pesan') ? session('pesan') : '' )}}';
            //var pesan='hi';
            if(pesan!='')
            {
                noty({
                    text: "<strong>Informasi</strong>"+pesan,
                    type: 'information',
                    layout: 'topRight',
                    animation: {
                        open: 'animated bounceIn',
                        close: 'animated fadeOut',                    
                        speed: 400
                    },
                    progressBar:true,
                    timeout:3000
                });
            }
        });
    </script>
@endsection
