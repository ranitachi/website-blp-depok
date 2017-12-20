@extends('layouts.master-backend')

@section('title')
    <title>Dokumentasi Foto - BLP Official Website 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Dokumentasi Foto</h1>
            <p>Berikut Adalah Halaman untuk manajemen Dokumentasi Foto.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Dokumentasi Foto</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
                        <div class="app-heading app-heading-small">
                            <div class="title">
                                <h2>Dokumentasi Foto</h2>
                            </div>
                            <div class="heading-elements">
                                <a href="{{ URL::to('/foto/-1') }}" class="btn btn-primary btn-shadowed btn-xs">
                                    <span class="fa fa-plus"></span>&nbsp;&nbsp;
                                    Tambah Dokumentasi Foto
                                </a>
                            </div>
                                        
                        </div>
                    </div>
                        <div class="row margin-bottom-30 margin-top-10">
                            <div class="col-md-6 col-md-offset-3 col-sm-12">                                
                                <div class="btn-group btn-group-justified" role="group">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-primary" data-filter="*">All</button>
                                    </div>
                                    @foreach($kat as $k => $v)
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-default" data-filter=".filter-{{$k}}">{{ucwords($k)}}</button>
                                        </div>    
                                    @endforeach
                                    
                                </div>                                                                
                            </div>
                        </div>                                                
                        
                        <div class="row grid">
                            @foreach($data as $k => $v)
                                @foreach($v as $kk => $vv)   
                                    @php
                                        $tgl=date('d/m/Y', strtotime($vv->created_at));
                                        $dd=explode('/',$vv->picture);
                                        $last=$dd[count($dd)-1];
                                        $thumb=str_replace($last,'thumbs/'.$last,$vv->picture);
                                    @endphp    
                                    <div class="col-md-3 col-ms-4 grid-element filter-{{$k}}">
                                        <div class="tile-basic">
                                                <div class="pull-right" style="margin:5px 2px 0 0;">
                                                    <a href="{{URL::to('foto/'.$vv->id)}}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-xs btn-danger" href="javascript:hapus({{$vv->id}})"><i class="fa fa-trash"></i></a>
                                                </div>
                                            <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="{{asset($vv->picture)}}" data-preview-size="modal-lg">
                                                <img src="{{asset($thumb)}}" alt="" style="height:180px;">
                                            </a>
                                            <div class="tile-content tile-content-condensed-bottom text-center">
                                                <span class="tile-subtitle">{{$tgl}}</span>
                                                <h5 class="tile-title">{{$vv->title}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                            
                        </div>
                        
                    </div>
    <style>
    table td
    {
        padding:5px !important;
    }
    </style>
     <!-- APP OVERLAY -->
            <div class="app-overlay"></div>
            <!-- END APP OVERLAY -->
            
            <!-- MODAL PREVIEW -->
            <div class="modal fade" id="preview" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>
                    
                    <div class="modal-content">
                        <div class="modal-body padding-5"></div>
                    </div>
                </div>            
            </div>
    <!-- END PAGE CONTAINER -->
@endsection

@section('pagescripts') 
    <script>
        $(document).ready(function(){
            loaddata();
            
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
        function loaddata()
        {
            $('#loader').show();
            $('#data').load(APP_URL+'/foto-data/-1',function(){
                $('#loader').hide();
                
                
            });
        }
        
        function edit(id)
        {
            location.href=APP_URL+'/foto/'+id;
        }

        function hapus(id)
        {
            $('#modal-primary-header').text('Peringatan');
            $('#modal-primary-body').html('<h2>Yakin ingin Menghapus Data Video Ini ?</h2>');
            $('div#modal-primary').modal('show');
            $('#ok').click(function(){
                $.ajax({
                    url: APP_URL+'/foto/'+id,
                    type : 'DELETE',
                    dataType: 'json',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data: {"_token": "{{ csrf_token() }}"}
                }).done(function(data){
                    var txt = "Data Foto Berhasil Di Hapus";
                    noty({
                        text: "<strong>Informasi</strong>"+txt,
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
                    $('div#modal-primary').modal('hide');
                    loaddata();

                }).fail(function(){
                    var txt = " Data Foto Gagal Di Hapus";
                    noty({
                        text: "<strong>Informasi</strong>"+txt,
                        type: 'error',
                        layout: 'topRight',
                        animation: {
                            open: 'animated bounceIn',
                            close: 'animated fadeOut',                    
                            speed: 400
                        },
                        progressBar:true,
                        timeout:3000
                    });
                    $('div#modal-primary').modal('hide');
                });
            });
        }
    </script>
@endsection
