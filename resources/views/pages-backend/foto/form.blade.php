@extends('layouts.master-backend')

@section('title')
    <title>Form Dokumentasi Foto - BLP Official Website 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Form Dokumentasi Foto</h1>
            <p>Berikut Adalah Halaman untuk manajemen Dokumentasi Foto.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Form Dokumentasi Foto</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Form Dokumentasi Foto</h2>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ URL::to('foto') }}" class="btn btn-primary btn-shadowed btn-xs">
                        <span class="fa fa-angle-double-left"></span>&nbsp;&nbsp;
                        Kembali Ke Dokumentasi Foto
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                    <form class="form-horizontal" id="form-foto" method="POST" action="{{$id==-1 ? URL::to('foto') : URL::to('foto/'.$id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
									@if ($id!=-1)
										{{ method_field('PATCH') }}
									@endif
                                
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Nama Foto</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" placeholder="Nama Foto" name="title" id="title" autocomplete="off" value="{{($id!=-1 ? $det->title : '')}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Gambar</label>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                            </span>
                                            <input id="thumbnail" readonly class="form-control" type="text" name="picture" value="{{($id!=-1 ? $det->picture : '')}}">
                                        </div>
                                        @if($id!=-1)

                                            <img id="holder" style="margin-top:15px;max-height:100px;" src="{{($id!=-1 ? asset($det->picture): '')}}">
                                        @else
                                            <img id="holder" style="margin-top:15px;max-height:100px;">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Kategori</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Kategori" name="category" id="category" autocomplete="off" value="{{($id!=-1 ? $det->category : '')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Flag</label>
                                    <div class="col-lg-2">
                                        <select class="select2 form-control" name="flag" id="flag">
                                            <option value="-1">-Pilih-</option>
                                            <option value="1" {{$id!=-1 ? ($det->flag=='1' ? 'selected="selected"' : '') : ''}}>Active</option>
                                            <option value="0" {{$id!=-1 ? ($det->flag=='0' ? 'selected="selected"' : '') : ''}}>DeActive</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">Keterangan</label>
                                    <div class="col-lg-10">
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Keterangan" name="desc" id="desc">{{($id!=-1 ? $det->desc : '')}}</textarea>
                                    </div>
                                </div>
                                <div class="text-right">
  									<button type="button" id="simpanfoto" class="btn btn-primary btn-xs btn-shadowed">Simpan <i class="icon-arrow-right14 position-right"></i></button>
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

                $('#simpanfoto').click(function(){
                    var title=$('#title').val();
                    var flag=$('#flag').val();
                    var thumbnail=$('#thumbnail').val();
                    var id_kategori=$('#category').val();
                    var content = CKEDITOR.instances['desc'].getData();
                    if(title=='')
                    {
                        var txt = "Judul Foto Belum Diisi";
                        $('#modal-primary-ok').html('<h2>'+txt+'</h2>');
                        $('div#modal-ok').modal('show');
                    }
                    else if(thumbnail=='')
                    {
                        var txt = "Foto Belum Dipilih";
                        $('#modal-primary-ok').html('<h2>'+txt+'</h2>');
                        $('div#modal-ok').modal('show');
                    }
                    else if(id_kategori=='')
                    {
                        var txt = "Kategori Foto Belum Dipilih";
                        $('#modal-primary-ok').html('<h2>'+txt+'</h2>');
                        $('div#modal-ok').modal('show');
                    }
                    else if(flag=='-1')
                    {
                        var txt = "Status Foto Belum Dipilih";
                        $('#modal-primary-ok').html('<h2>'+txt+'</h2>');
                        $('div#modal-ok').modal('show');
                    }
                    else if(content!='')
                    {
                        $('#form-foto').submit();
                    }
                    else
                    {
                        var txt = "Keterangan Foto Masih Belum Diisi";
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