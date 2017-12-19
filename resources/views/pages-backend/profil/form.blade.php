@extends('layouts.master-backend')

@section('title')
    <title>Form {{ucwords($cat)}} - BLP Official Website 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Form {{ucwords($cat)}}</h1>
            <p>Berikut Adalah Halaman untuk manajemen {{ucwords($cat)}}.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Form {{ucwords($cat)}}</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Form {{ucwords($cat)}}</h2>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ URL::to('/'.$cat) }}" class="btn btn-primary btn-shadowed btn-xs">
                        <span class="fa fa-angle-double-left"></span>&nbsp;&nbsp;
                        Kembali Ke {{ucwords($cat)}}
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                    <form class="form-horizontal" id="form-profil" method="POST" action="{{$id==-1 ? URL::to($cat) : URL::to($cat.'/'.$id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
									@if ($id!=-1)
										{{ method_field('PATCH') }}
									@endif
                                
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Judul {{ucwords($cat)}}</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" data-validation="required" readonly placeholder="Judul {{ucwords($cat)}}" name="title" id="title" autocomplete="off" value="{{($id!=-1 ? ucwords($det->title) : ucwords($cat))}}">
                                    </div>
                                </div>
                                <input type="hidden" name="category" value="{{$cat}}">
                                <div class="form-group">
                                    <label class="control-label col-lg-12">Isi {{ucwords($cat)}}</label>
                                    <div class="col-lg-12">
                                    <textarea rows="5" cols="5" class="form-control" data-validation="required" placeholder="Isi {{ucwords($cat)}}" name="desc" id="desc">{{($id!=-1 ? $det->desc : '')}}</textarea>
                                    </div>
                                </div>
                                
                                <div class="text-right">
  									<button type="button" id="simpanprofil" class="btn btn-primary btn-xs btn-shadowed">Simpan <i class="icon-arrow-right14 position-right"></i></button>
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

            $('#simpanprofil').click(function(){
                //var desc=$('#desc').val();
                var content = CKEDITOR.instances['desc'].getData();
                if(content!='')
                {
                    $('#form-profil').submit();
                }
                else
                {
                    var txt = "Keterangan Masih Belum Diisi";
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