<!DOCTYPE html>
<html lang="en">
    <head>                        
        <title>Halaman Login - BLP Official Website 2017</title>            
        
        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="{{ asset('theme/img/logo-depok.png') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('theme/img/logo-depok.png') }}" type="image/x-icon">
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" href="{{ asset('theme/css/styles.css') }}">
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>        
        
        <!-- APP WRAPPER -->
        <div class="app app-fh">

            <!-- START APP CONTAINER -->
            <div class="app-container">
                
                <div class="app-login-box">                                        
                    <div class="text-center" style="margin:30px auto;">
                        <img style="height:100px;float:none;" src="{{ asset('theme/img/logo-depok.png') }}">
                        
                    </div>
                    <div class="app-login-box-title">
                        <div class="title">Official Website BLP</div>
                        <div class="subtitle">Silahkan lakukan login</div>                        
                    </div>
                    <div class="app-login-box-container">
                        <form action="{{ route('login') }}" method="post">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="nip" placeholder="NIP">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <button class="btn btn-success btn-block">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="app-login-box-footer">
                        &copy; BLP Kota Depok 2017. All rights reserved.
                        {{$errors}}
                    </div>
                </div>
                                
            </div>
            <!-- END APP CONTAINER -->
           
        </div>        
        <!-- END APP WRAPPER -->                

        <!-- IMPORTANT SCRIPTS -->
        <script type="text/javascript" src="{{ asset('theme/js/vendor/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('theme/js/vendor/jquery/jquery-migrate.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('theme/js/vendor/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('theme/js/vendor/bootstrap/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('theme/js/vendor/moment/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('theme/js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        <!-- END IMPORTANT SCRIPTS -->
       
        <!-- APP SCRIPTS -->
        <script type="text/javascript" src="{{ asset('theme/js/app.js')}}"></script>
        <script type="text/javascript" src="{{ asset('theme/js/app_plugins.js')}}"></script>
        <!-- END APP SCRIPTS -->
    </body>
</html>
<style>
.app-container
{
    float: left;
    width: 100%;
    position: relative;
    background: #EDEFF0;
}
.app-container:before
{
    content: ' ';
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 0.4;
    background:blue url('theme/img/bg-simanda.jpg');
    background-repeat: no-repeat;
    background-position: 50% 0;
    -ms-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    background-size: cover;
}
.app-login-box
{
    z-index: 2;
    position: relative;
}
</style>