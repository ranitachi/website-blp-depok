@extends('layouts.master-backend')

@section('title')
    <title>Form Kategori - BLP Official Website 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Form Kategori</h1>
            <p>Berikut Adalah Halaman untuk manajemen Kategori.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Form Kategori</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Form Kategori</h2>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ URL::to('kategori') }}" class="btn btn-primary btn-shadowed btn-xs">
                        <span class="fa fa-angle-double-left"></span>&nbsp;&nbsp;
                        Kembali Ke Data Kategori
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                    <form class="form-horizontal" id="form-kategori" method="POST" action="{{$id==-1 ? URL::to('kategori') : URL::to('kategori/'.$id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
									@if ($id!=-1)
										{{ method_field('PATCH') }}
									@endif
                                
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Nama Kategori</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" data-validation="required" placeholder="Nama Kategori" name="nama_kategori" id="nama_kategori" autocomplete="off" value="{{($id!=-1 ? $det->nama_kategori : '')}}">
                                    </div>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label class="control-label col-lg-2">Deskripsi</label>
                                    <div class="col-lg-10">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Deskripsi Kategori" name="desc" id="desc">{{($id!=-1 ? $det->desc : '')}}</textarea>
                                    </div>
                                    </div>
                                
                                <div class="text-right">
  									<button type="button" id="simpankategori" class="btn btn-primary btn-xs btn-shadowed">Simpan <i class="icon-arrow-right14 position-right"></i></button>
  								</div>
                </form>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTAINER -->
@endsection

@section('pagescripts')  
    <script src="{{asset('/vendor/laravel-filemanager/js/lfm.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('#lfm').filemanager('image', {prefix: APP_URL+'/laravel-filemanager'});
        
                var options = {
                    filebrowserImageBrowseUrl: APP_URL+'/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: APP_URL+'/laravel-filemanager/upload?type=Images&_token=',
                    filebrowserBrowseUrl: APP_URL+'/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: APP_URL+	'/laravel-filemanager/upload?type=Files&_token='
                };
                CKEDITOR.replace('desc', options);

                $('#simpankategori').click(function(){
                    var desc=$('#nama_kategori').val();
                    var content = CKEDITOR.instances['desc'].getData();
                    if(desc=='')
                    {
                        var txt = "Nama Kategori Masih Belum Diisi";
                        $('#modal-primary-ok').html('<h2>'+txt+'</h2>');
                        $('div#modal-ok').modal('show');
                    }
                    else if(content!='')
                    {
                        $('#form-kategori').submit();
                    }
                    else
                    {
                        var txt = "Keterangan Kategori Masih Belum Diisi";
                        $('#modal-primary-ok').html('<h2>'+txt+'</h2>');
                        $('div#modal-ok').modal('show');
                    }
                });
        });

        $.validate({
                modules : 'date,file,location',
                onValidate: function(){
                    
                    delayBeforeFire(function(){                                                
                        app.spy();
                    },100);
                                        
                }
            });

    </script>
@endsection