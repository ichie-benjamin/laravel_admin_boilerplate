<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>

        <div class="br-sideleft-menu">
            <a href="{{ route('admin.dashboard') }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <a href="{{ route('home') }}" target="_blank" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-home tx-22"></i>
                    <span class="menu-item-label">Home</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <a href="" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-list-outline tx-24"></i>
                    <span class="menu-item-label">Articles</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <a href="{{ route('admin.users') }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-person tx-24"></i>
                    <span class="menu-item-label">Users</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->


            {{--        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
            {{--                <i class="icon ion-power"></i> Sign Out</a>--}}
            {{--            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
            {{--                @csrf--}}
            {{--            </form>--}}
            {{--        </li>--}}


            <a href="{{ route('laravelroles::roles.index') }}"  class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                    <span class="menu-item-label">Roles Dashboard</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('laravelroles::roles.index') }}" class="nav-link">Roles & Permissions </a></li>
                <li class="nav-item"><a href="{{ route('laravelroles::roles.create') }}" class="nav-link">Create Role </a></li>
                <li class="nav-item"><a href="{{ route('laravelroles::permissions.create') }}" class="nav-link">Create Permission</a></li>
            </ul>

            <a href="{{ route('admin.crud.gui') }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-android-apps tx-24"></i>
                    <span class="menu-item-label">CRUD Generator</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <a href="#" class="br-menu-link {{ active(['admin.settings.*'], 'active show-sub') }}">
                <div class="br-menu-item">
                    <i class="menu-item-fa fa fa-cogs tx-18"></i>
                    <span class="menu-item-label"> Settings</span>
                    <i class="menu-item-arrow fa fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('admin.settings.index') }}" class="nav-link {{ active('admin.settings.index') }}">General Settings</a></li>
                {{--                <li class="nav-item"><a href="{{ route('admin.settings.mails') }}" class="nav-link {{ active('admin.settings.mails') }}">Mail Setting</a></li>--}}
            </ul>

            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-log-out tx-24"></i>
                    <span class="menu-item-label">Sign Out</span>
                </div><!-- menu-item -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </a><!-- br-menu-link -->

        </div><!-- br-sideleft-menu -->

</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->
