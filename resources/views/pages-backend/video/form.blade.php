@extends('layouts.master-backend')

@section('title')
    <title>Form Dokumentasi Video - BLP Official Website 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Form Dokumentasi Video</h1>
            <p>Berikut Adalah Halaman untuk manajemen Dokumentasi Video.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Form Dokumentasi Video</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Form Dokumentasi Video</h2>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ URL::to('video') }}" class="btn btn-primary btn-shadowed btn-xs">
                        <span class="fa fa-angle-double-left"></span>&nbsp;&nbsp;
                        Kembali Ke Dokumentasi Video
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                    <form class="form-horizontal" id="form-perusahaan" method="POST" action="{{$id==-1 ? URL::to('video') : URL::to('video/'.$id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
									@if ($id!=-1)
										{{ method_field('PATCH') }}
									@endif
                                
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Nama Video</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control"  data-validation="required" placeholder="Nama Video" name="title" id="title" autocomplete="off" value="{{($id!=-1 ? $det->title : '')}}">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="control-label col-lg-4">URL</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control"  data-validation="required" placeholder="URL" name="url" id="url" autocomplete="off" value="{{($id!=-1 ? $det->url : '')}}">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label col-lg-4">Flag</label>
                                    <div class="col-lg-2">
                                        <select class="select2 form-control" name="flag" data-validation="required" >
                                            <option value="">-Pilih-</option>
                                            <option value="1" {{$id!=-1 ? ($det->flag=='1' ? 'selected="selected"' : '') : ''}}>Active</option>
                                            <option value="0" {{$id!=-1 ? ($det->flag=='0' ? 'selected="selected"' : '') : ''}}>DeActive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="text-right">
  									<button type="submit" id="simpanperusahaan" class="btn btn-primary btn-xs btn-shadowed">Simpan <i class="icon-arrow-right14 position-right"></i></button>
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