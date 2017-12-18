<!DOCTYPE html>
<html lang="en">
    <head>                        
        @yield('title')            
        
        @include('includes-backend.head')
    </head>
    <body>        
        
        <!-- APP WRAPPER -->
        <div class="app">           
            <!-- START APP CONTAINER -->
            <div class="app-container">
                <!-- START SIDEBAR -->
                @include('includes-backend.sidebar')
                <!-- END SIDEBAR -->
                
                <!-- START APP CONTENT -->
                <div class="app-content app-sidebar-left">
                    <!-- START APP HEADER -->
                    @include('includes-backend.navbar')
                    <!-- END APP HEADER  -->
                    
                    @yield('content')
                    
                </div>
                <!-- END APP CONTENT -->
                                
            </div>
            <!-- END APP CONTAINER -->                                    

            <!-- START APP SIDEPANEL -->
           
            @include('includes-backend.notification')
            <!-- END APP SIDEPANEL -->
        </div>        
        <!-- END APP WRAPPER -->                
        
        <!-- IMPORTANT SCRIPTS -->
        @include('includes-backend.scripts')
        <!-- END IMPORTANT SCRIPTS -->

        <!-- THIS PAGE SCRIPTS -->
        @yield('pagescripts')
        <!-- END THIS PAGE SCRIPTS -->

        <!-- APP SCRIPTS -->
        @include('includes-backend.appscripts')
        <!-- END APP SCRIPTS -->
    </body>
</html>
@include('includes-backend.modal')
<script type="text/javascript">
  var APP_URL = {!! json_encode(url('/')) !!}
  $.ajaxSetup({
			headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
	});
</script>