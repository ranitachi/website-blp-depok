@extends('layouts.master-backend')

@section('title')
    <title>Dokumentasi Foto - Simanda 2017</title>
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
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default" data-filter=".filter-life">Life</button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default" data-filter=".filter-business">Business</button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default" data-filter=".filter-education">Education</button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default" data-filter=".filter-nature">Nature</button>
                                    </div>
                                </div>                                                                
                            </div>
                        </div>                                                
                        
                        <div class="row grid">
                            <div class="col-md-3 col-ms-4 grid-element filter-business">
                                <div class="tile-basic">
                                        <div class="pull-right" style="margin:5px 2px 0 0;">
                                            <a href="{{URL::to('foto/1')}}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="{{asset('theme/assets/images/large/img-1.jpg')}}" data-preview-size="modal-lg">
                                        <img src="{{asset('theme/assets/images/preview/img-1.jpg')}}" alt="">
                                    </a>
                                    <div class="tile-content tile-content-condensed-bottom text-center">
                                        <span class="tile-subtitle">22/05/2016 - 12 comments - John Doe</span>
                                        <h5 class="tile-title">Quamquam haec quidem praeposita</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-life">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="{{asset('theme/assets/images/large/img-2.jpg')}}" data-preview-size="modal-lg">
                                        <img src="{{asset('theme/assets/images/preview/img-2.jpg')}}" alt="">
                                    </a>
                                    <div class="tile-content tile-content-condensed-bottom text-center">
                                        <span class="tile-subtitle">22/05/2016 - 12 comments - John Doe</span>
                                        <h5 class="tile-title">Expressa vero in iis aetatibus</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-business">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="{{asset('theme/assets/images/large/img-3.jpg')}}" data-preview-size="modal-lg">
                                        <img src="{{asset('theme/assets/images/preview/img-3.jpg')}}" alt="">
                                    </a>
                                    <div class="tile-content tile-content-condensed-bottom text-center">
                                        <span class="tile-subtitle">22/05/2016 - 12 comments - John Doe</span>
                                        <h5 class="tile-title">Nunc omni virtuti vitium</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-life">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="{{asset('theme/assets/images/large/img-4.jpg')}}" data-preview-size="modal-lg">
                                        <img src="{{asset('theme/assets/images/preview/img-4.jpg')}}" alt="">
                                    </a>
                                    <div class="tile-content tile-content-condensed-bottom text-center">
                                        <span class="tile-subtitle">22/05/2016 - 12 comments - John Doe</span>
                                        <h5 class="tile-title">Unum est sine dolore esse</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-business filter-education">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="{{asset('theme/assets/images/large/img-5.jpg')}}" data-preview-size="modal-lg">
                                        <img src="{{asset('theme/assets/images/preview/img-5.jpg')}}" alt="">
                                    </a>
                                    <div class="tile-content tile-content-condensed-bottom text-center">
                                        <span class="tile-subtitle">22/05/2016 - 12 comments - John Doe</span>
                                        <h5 class="tile-title">Ratio enim nostra consentit</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-life">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="{{asset('theme/assets/images/large/img-6.jpg')}}" data-preview-size="modal-lg">
                                        <img src="{{asset('theme/assets/images/preview/img-6.jpg')}}" alt="">
                                    </a>
                                    <div class="tile-content tile-content-condensed-bottom text-center">
                                        <span class="tile-subtitle">22/05/2016 - 12 comments - John Doe</span>
                                        <h5 class="tile-title">Sed quid sentiat, non videtis</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-business filter-education">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="{{asset('theme/assets/images/large/img-7.jpg')}}" data-preview-size="modal-lg">
                                        <img src="{{asset('theme/assets/images/preview/img-7.jpg')}}" alt="">
                                    </a>
                                    <div class="tile-content tile-content-condensed-bottom text-center">
                                        <span class="tile-subtitle">22/05/2016 - 12 comments - John Doe</span>
                                        <h5 class="tile-title">Unum est sine dolore esse</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-education">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="{{asset('theme/assets/images/large/img-8.jpg')}}" data-preview-size="modal-lg">
                                        <img src="{{asset('theme/assets/images/preview/img-8.jpg')}}" alt="">
                                    </a>
                                    <div class="tile-content tile-content-condensed-bottom text-center">
                                        <span class="tile-subtitle">22/05/2016 - 12 comments - John Doe</span>
                                        <h5 class="tile-title">Non est ista, inquam</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-nature">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="{{asset('theme/assets/images/large/img-9.jpg')}}" data-preview-size="modal-lg">
                                        <img src="{{asset('theme/assets/images/preview/img-9.jpg')}}" alt="">
                                    </a>
                                    <div class="tile-content tile-content-condensed-bottom text-center">
                                        <span class="tile-subtitle">22/05/2016 - 12 comments - John Doe</span>
                                        <h5 class="tile-title">Expressa vero in iis aetatibus</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-nature">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="{{asset('theme/assets/images/large/img-10.jpg')}}" data-preview-size="modal-lg">
                                        <img src="{{asset('theme/assets/images/preview/img-10.jpg')}}" alt="">
                                    </a>
                                    <div class="tile-content tile-content-condensed-bottom text-center">
                                        <span class="tile-subtitle">22/05/2016 - 12 comments - John Doe</span>
                                        <h5 class="tile-title">Sed quid sentiat, non videtis</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-life">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="{{asset('theme/assets/images/large/img-11.jpg')}}" data-preview-size="modal-lg">
                                        <img src="{{asset('theme/assets/images/preview/img-11.jpg')}}" alt="">
                                    </a>
                                    <div class="tile-content tile-content-condensed-bottom text-center">
                                        <span class="tile-subtitle">22/05/2016 - 12 comments - John Doe</span>
                                        <h5 class="tile-title">Unum est sine dolore esse</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-ms-4 grid-element filter-life">
                                <div class="tile-basic">
                                    <a href="#" class="tile-image tile-image-padding tile-image-hover-grayscale preview" data-preview-image="{{asset('theme/assets/images/large/img-12.jpg')}}" data-preview-size="modal-lg">
                                        <img src="{{asset('theme/assets/images/preview/img-12.jpg')}}" alt="">
                                    </a>
                                    <div class="tile-content tile-content-condensed-bottom text-center">
                                        <span class="tile-subtitle">22/05/2016 - 12 comments - John Doe</span>
                                        <h5 class="tile-title">Non est ista, inquam</h5>
                                    </div>
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
                    var txt = "Data Video Berhasil Di Hapus";
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
                    var txt = " Data Video Gagal Di Hapus";
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
