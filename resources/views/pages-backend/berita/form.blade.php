@extends('layouts.master-backend')

@section('title')
    <title>Form Kategori - Simanda 2017</title>
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
                    <a href="{{ URL::to('berita') }}" class="btn btn-primary btn-shadowed btn-xs">
                        <span class="fa fa-angle-double-left"></span>&nbsp;&nbsp;
                        Kembali Ke Data Berita
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                    <form class="form-horizontal" id="form-perusahaan" method="POST" action="{{$id==-1 ? URL::to('berita') : URL::to('berita/'.$id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
									@if ($id!=-1)
										{{ method_field('PATCH') }}
									@endif
                                
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Judul Berita</label>
                                    <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Judul" name="title" id="title" autocomplete="off" value="{{($id!=-1 ? $det->title : '')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Kategori</label>
                                    <div class="col-lg-4">
                                    <select class="select2 form-control" name="id_kategori">
                                        <option value="-1">-Pilih-</option>
                                        @foreach ($cat as $k => $v)
                                            @if ($id!=-1)
                                            @if ($det->id_kategori==$v->id)
                                                <option value="{{$det->id_kategori}}" selected="selected">{{$v->nama_kategori}}</option>
                                                                            @else
                                                                                <option value="{{$v->id}}">{{$v->nama_kategori}}</option>
                                            @endif
                                            @else
                                            <option value="{{$v->id}}">{{$v->nama_kategori}}</option>
                                            @endif
                                        @endforeach
                                        </optgroup>
                                    </select>
                                    </div>
                                </div>
                                <input type="hidden" name="id_user" value="">
                                                    <div class="form-group">
                                                <label class="control-label col-lg-2">Flag</label>
                                                <div class="col-lg-2">
                                                    <select class="select2 form-control" name="flag">
                                                        <option value="-1">-Pilih-</option>
                                                        <option value="1" {{$id!=-1 ? ($det->flag=='1' ? 'selected="selected"' : '') : ''}}>Active</option>
                                                        <option value="0" {{$id!=-1 ? ($det->flag=='0' ? 'selected="selected"' : '') : ''}}>DeActive</option>
                                                    </select>
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
                                                        <input id="thumbnail" readonly class="form-control" type="text" name="file" value="{{($id!=-1 ? $det->file : '')}}">
                                                        </div>
                                                        @if($id!=-1) 
                                                            <img id="holder" style="margin-top:15px;max-height:100px;" src="{{($id!=-1 ? asset($det->file): '')}}">
                                                        @else
                                                            <img id="holder" style="margin-top:15px;max-height:100px;">
                                                        @endif
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Isi Berita</label>
                                    <div class="col-lg-10">
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Isi Berita" name="desc" id="desc">{{($id!=-1 ? $det->desc : '')}}</textarea>
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