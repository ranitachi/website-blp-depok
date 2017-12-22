@extends('layouts.master-backend')

@section('title')
    <title>Form User - BLP Official Website 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Form User</h1>
            <p>Berikut Adalah Halaman untuk manajemen Data User.</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Form User</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="block block-condensed">
            <!-- START HEADING -->
            <div class="app-heading app-heading-small">
                <div class="title">
                    <h2>Form User</h2>
                </div>
                
                <div class="heading-elements">
                    <a href="{{ URL::to('user') }}" class="btn btn-primary btn-shadowed btn-xs">
                        <span class="fa fUsera-angle-double-left"></span>&nbsp;&nbsp;
                        Kembali Ke Data Berita
                    </a>
                </div>                
            </div>
            <!-- END HEADING -->
            
            <div class="block-content">
                    <form class="form-horizontal" id="form-berita" method="POST" action="{{$id==-1 ? URL::to('user') : URL::to('user/'.$id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
									@if ($id!=-1)
										{{ method_field('PATCH') }}
									@endif
                                
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Nama User</label>
                                    <div class="col-lg-6">
                                    <input type="text" class="form-control" data-validation="required" placeholder="Nama User" name="name" id="name" autocomplete="off" value="{{($id!=-1 ? $det->name : '')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">NIP</label>
                                    <div class="col-lg-6">
                                    <input type="text" class="form-control"  data-validation="required"placeholder="NIP" name="nip" id="nip" autocomplete="off" value="{{($id!=-1 ? $det->nip : '')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Email</label>
                                    <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" autocomplete="off" value="{{($id!=-1 ? $det->email : '')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Level</label>
                                    <div class="col-lg-4">
                                        <select class="select2 form-control" name="level" id="level" data-validation="required">
                                                        <option value="-1">-Pilih-</option>
                                                        <option value="1" {{$id!=-1 ? ($det->level=='1' ? 'selected="selected"' : '') : ''}}>Kontributor</option>
                                                        <option value="0" {{$id!=-1 ? ($det->level=='0' ? 'selected="selected"' : '') : ''}}>Administrator</option>
                                        </select>
                                    </div>
                                </div>
                                
                                
                                <div class="text-right">
  									<button type="submit" id="simpanberita" class="btn btn-primary btn-xs btn-shadowed">Simpan <i class="icon-arrow-right14 position-right"></i></button>
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