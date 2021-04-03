<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- br-header-left -->
    <div class="br-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down">{{ Auth()->user()->name }}</span>
                    <img src="{{ auth()->user()->avatar }}" class="wd-32 rounded-circle" alt="">
                    <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href="#"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                        <li><a href="#"><i class="icon ion-ios-gear"></i> Settings</a></li>



                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
    </div><!-- br-header-right -->
</div><!-- br-header -->
