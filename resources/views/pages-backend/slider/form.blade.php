@extends('layouts.master-backend')

@section('title')
    <title>Form Slider - BLP Official Website 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Form Slider</h1>
            <p>Berikut Adalah Halaman untuk manajemen Kategori.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Form Slider</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Form Slider</h2>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ URL::to('foto') }}" class="btn btn-primary btn-shadowed btn-xs">
                        <span class="fa fa-angle-double-left"></span>&nbsp;&nbsp;
                        Kembali Ke Data SLider
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                    <form class="form-horizontal" id="form-slider" method="POST" action="{{$id==-1 ? URL::to('slider') : URL::to('slider/'.$id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
									@if ($id!=-1)
										{{ method_field('PATCH') }}
									@endif
                                
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Title</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Title" name="title" id="title" autocomplete="off" value="{{($id!=-1 ? $det->title : '')}}">
                                    </div>
                                    </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Image</label>
                                            <div class="col-lg-9">
                                                <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                </span>
                                                <input id="thumbnail" readonly class="form-control" type="text" name="picture" value="{{($id!=-1 ? $det->picture : '')}}">
                                            </div>
                                            @if($id==-1)
                                                <img id="holder" style="margin-top:15px;max-height:100px;">
                                            @else
                                                <img id="holder" style="margin-top:15px;max-height:100px;" src="{{($id!=-1 ? asset($det->picture): '')}}">
                                            @endif
                                            </div>
                                        </div>
                                    <div class="form-group">
                                    <label class="control-label col-lg-3">Flag</label>
                                    <div class="col-lg-4">
                                        <select class="select2 form-control" name="flag">
                                            <option value="-1">-Pilih-</option>
                                            <option value="1" {{$id!=-1 ? ($det->flag=='1' ? 'selected="selected"' : '') : ''}}>Active</option>
                                            <option value="0" {{$id!=-1 ? ($det->flag=='0' ? 'selected="selected"' : '') : ''}}>DeActive</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label col-lg-3">Keterangan</label>

                                    <div class="col-lg-9">
                                        <textarea rows="3" cols="5" class="form-control" placeholder="Keterangan" name="desc" id="desc">{{($id!=-1 ? $det->desc : '')}}</textarea>
                                    </div>
                                    </div>
                                <div class="text-right">
  									<button type="button" id="simpanslider" class="btn btn-primary btn-xs btn-shadowed">Simpan <i class="icon-arrow-right14 position-right"></i></button>
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

                $('#simpanslider').click(function(){
                    var title=$('#title').val();
                    var flag=$('#flag').val();
                    var thumbnail=$('#thumbnail').val();
                    var content = CKEDITOR.instances['desc'].getData();
                    if(title=='')
                    {
                        var txt = "Judul Slider Belum Diisi";
                        $('#modal-primary-ok').html('<h2>'+txt+'</h2>');
                        $('div#modal-ok').modal('show');
                    }
                    else if(thumbnail=='')
                    {
                        var txt = "Data Slider Belum Dipilih";
                        $('#modal-primary-ok').html('<h2>'+txt+'</h2>');
                        $('div#modal-ok').modal('show');
                    }
                    else if(flag=='-1')
                    {
                        var txt = "Status Slider Belum Dipilih";
                        $('#modal-primary-ok').html('<h2>'+txt+'</h2>');
                        $('div#modal-ok').modal('show');
                    }
                    else if(content!='')
                    {
                        $('#form-slider').submit();
                    }
                    else
                    {
                        var txt = "Keterangan Slider Masih Belum Diisi";
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