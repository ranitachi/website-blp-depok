@extends('layouts.master-backend')

@section('title')
    <title>Web Rekanan - BLP Official Website 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Form Input Web Rekanan</h1>
            <p>Berikut Adalah Halaman Form Input Web Rekanan.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="">Web Rekanan</a></li>
            <li class="active">Form Input Web Rekanan</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Form Input Rekanan</h2>
                </div>
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                <form class="form-horizontal" method="POST" action="{{ route('webrekanan.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-lg-2">Nama Web</label>
                        <div class="col-lg-9">
                        <input type="text" class="form-control" data-validation="required" placeholder="Nama Web" name="nama_web" id="nama_web" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">URL</label>
                        <div class="col-lg-9">
                        <input type="text" class="form-control" data-validation="required" placeholder="URL" name="url" id="url" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Logo Web</label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                </span>
                                <input id="thumbnail" readonly class="form-control" type="text" name="image">
                            </div>
                            <img id="holder" style="margin-top:15px;max-height:100px;">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" id="simpanberita" class="btn btn-primary btn-xs btn-shadowed">Simpan <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </form>
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
    <script src="{{asset('/vendor/laravel-filemanager/js/lfm.js')}}"></script>
    <script>
        $(document).ready(function(){
           // alert(APP_URL);
            $('#lfm').filemanager('image', {prefix: APP_URL+'/laravel-filemanager'});
            var options = {
                filebrowserImageBrowseUrl: APP_URL+'/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: APP_URL+'/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: APP_URL+'/laravel-filemanager?type=Files',
                filebrowserUploadUrl: APP_URL+	'/laravel-filemanager/upload?type=Files&_token='
            };
        });

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
