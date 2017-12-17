<div class="app-header app-header-design-default">
    <ul class="app-header-buttons">
        <li class="visible-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-toggle=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
        <li class="hidden-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-minimize=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
    </ul>
    <form class="app-header-search" action="" method="post">        
        <input type="text" name="keyword" placeholder="Search">
    </form>    

    <ul class="app-header-buttons pull-right">
        <li>
            <div class="contact contact-rounded contact-bordered contact-lg contact-ps-controls">
                <img src="{{ asset('/theme/img/user/no-image.png') }}" alt="John Doe">
                <div class="contact-container">
                    <a href="#">Nama</a>
                    <span>
                        Akun
                    </span>
                </div>
                <div class="contact-controls">
                    <div class="dropdown">
                        <button type="button" class="btn btn-default btn-icon" data-toggle="dropdown"><span class="icon-cog"></span></button>                        
                        <ul class="dropdown-menu dropdown-left">
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span class="icon-exit"></span> Log Out
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li> 
                        </ul>
                    </div>                    
                </div>
            </div>
        </li>        
    </ul>
</div>