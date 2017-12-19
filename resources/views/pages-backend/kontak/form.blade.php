@extends('layouts.master-backend')

@section('title')
    <title>Form Kontak Lembaga - BLP Official Website 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Form Kontak Lembaga</h1>
            <p>Berikut Adalah Halaman untuk manajemen Kontak Lembaga.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Form Kontak Lembaga</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Form Kontak Lembaga</h2>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ URL::to('kontak') }}" class="btn btn-primary btn-shadowed btn-xs">
                        <span class="fa fa-angle-double-left"></span>&nbsp;&nbsp;
                        Kembali Ke Data Kontak Lembaga
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                    <form class="form-horizontal" id="form-perusahaan" method="POST" action="{{$id==-1 ? URL::to('kontak') : URL::to('kontak/'.$id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
									@if ($id!=-1)
										{{ method_field('PATCH') }}
									@endif
                                
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Nama Contact</label>
                                    <div class="col-lg-8">
                                        <input type="text" data-validation="required" class="form-control" placeholder="Nama Contact" name="title" id="title" autocomplete="off" value="{{($id!=-1 ? $det->title : '')}}">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label col-lg-4">Telepon</label>
                                    <div class="col-lg-8">
                                        <input type="text" data-validation="required" class="form-control" placeholder="Telepon" name="telepon" id="telepon" autocomplete="off" value="{{($id!=-1 ? $det->telepon : '')}}">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label col-lg-4">Email</label>
                                    <div class="col-lg-8">
                                        <input type="text" data-validation="required" class="form-control" placeholder="Email" name="email" id="email" autocomplete="off" value="{{($id!=-1 ? $det->email : '')}}">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label col-lg-4">Facebook</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" placeholder="Facebook" name="facebook" id="facebook" autocomplete="off" value="{{($id!=-1 ? $det->facebook : '')}}">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label col-lg-4">Twitter</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" placeholder="Twitter" name="twitter" id="twitter" autocomplete="off" value="{{($id!=-1 ? $det->twitter : '')}}">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label col-lg-4">Instagram</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" placeholder="Instagram" name="instagram" id="instagram" autocomplete="off" value="{{($id!=-1 ? $det->instagram : '')}}">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label col-lg-4">Koordinat Peta</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="latitude;longitude" name="maps" id="maps" autocomplete="off" value="{{($id!=-1 ? $det->maps : '')}}">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="control-label col-lg-4">Alamat</label>
                                    <div class="col-lg-8">
                                        <textarea rows="5" cols="5" data-validation="required" class="form-control" placeholder="alamat" name="alamat" id="alamat">{{($id!=-1 ? $det->alamat : '')}}</textarea>
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