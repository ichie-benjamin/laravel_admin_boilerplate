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

            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-log-out tx-24"></i>
                    <span class="menu-item-label">Sign Out</span>
                </div><!-- menu-item -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </a><!-- br-menu-link -->

            <a href="#" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                    <span class="menu-item-label">UI Elements</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"><a href="accordion.html" class="nav-link">Accordion</a></li>
                <li class="nav-item"><a href="alerts.html" class="nav-link">Alerts</a></li>
                <li class="nav-item"><a href="buttons.html" class="nav-link">Buttons</a></li>
                <li class="nav-item"><a href="cards.html" class="nav-link">Cards</a></li>
                <li class="nav-item"><a href="icons.html" class="nav-link">Icons</a></li>
                <li class="nav-item"><a href="modal.html" class="nav-link">Modal</a></li>
                <li class="nav-item"><a href="pagination.html" class="nav-link">Pagination</a></li>
                <li class="nav-item"><a href="popups.html" class="nav-link">Tooltip &amp; Popover</a></li>
                <li class="nav-item"><a href="progress.html" class="nav-link">Progress</a></li>
                <li class="nav-item"><a href="spinners.html" class="nav-link">Spinners</a></li>
                <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
            </ul>

        @section('hide')
                <a href="card-dashboard.html" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                        <span class="menu-item-label">Cards &amp; Widgets</span>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <a href="#" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                        <span class="menu-item-label">UI Elements</span>
                        <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub nav flex-column">
                    <li class="nav-item"><a href="accordion.html" class="nav-link">Accordion</a></li>
                    <li class="nav-item"><a href="alerts.html" class="nav-link">Alerts</a></li>
                    <li class="nav-item"><a href="buttons.html" class="nav-link">Buttons</a></li>
                    <li class="nav-item"><a href="cards.html" class="nav-link">Cards</a></li>
                    <li class="nav-item"><a href="icons.html" class="nav-link">Icons</a></li>
                    <li class="nav-item"><a href="modal.html" class="nav-link">Modal</a></li>
                    <li class="nav-item"><a href="pagination.html" class="nav-link">Pagination</a></li>
                    <li class="nav-item"><a href="popups.html" class="nav-link">Tooltip &amp; Popover</a></li>
                    <li class="nav-item"><a href="progress.html" class="nav-link">Progress</a></li>
                    <li class="nav-item"><a href="spinners.html" class="nav-link">Spinners</a></li>
                    <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
                </ul>
                <a href="#" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
                        <span class="menu-item-label">Navigation</span>
                        <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub nav flex-column">
                    <li class="nav-item"><a href="navigation.html" class="nav-link">Basic Nav</a></li>
                    <li class="nav-item"><a href="navigation-layouts.html" class="nav-link">Nav Layouts</a></li>
                </ul>
                <a href="#" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                        <span class="menu-item-label">Charts</span>
                        <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub nav flex-column">
                    <li class="nav-item"><a href="chart-morris.html" class="nav-link">Morris Charts</a></li>
                    <li class="nav-item"><a href="chart-flot.html" class="nav-link">Flot Charts</a></li>
                    <li class="nav-item"><a href="chart-chartjs.html" class="nav-link">Chart JS</a></li>
                    <li class="nav-item"><a href="chart-rickshaw.html" class="nav-link">Rickshaw</a></li>
                    <li class="nav-item"><a href="chart-chartist.html" class="nav-link">Chartist</a></li>
                    <li class="nav-item"><a href="chart-sparkline.html" class="nav-link">Sparkline</a></li>
                    <li class="nav-item"><a href="chart-peity.html" class="nav-link">Peity</a></li>
                </ul>
                <a href="#" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
                        <span class="menu-item-label">Forms</span>
                        <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub nav flex-column">
                    <li class="nav-item"><a href="form-elements.html" class="nav-link">Form Elements</a></li>
                    <li class="nav-item"><a href="form-layouts.html" class="nav-link">Form Layouts</a></li>
                    <li class="nav-item"><a href="form-validation.html" class="nav-link">Form Validation</a></li>
                    <li class="nav-item"><a href="form-wizards.html" class="nav-link">Form Wizards</a></li>
                    <li class="nav-item"><a href="form-editor-code.html" class="nav-link">Code Editor</a></li>
                    <li class="nav-item"><a href="form-editor-text.html" class="nav-link">Text Editor</a></li>
                </ul>
                <a href="#" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
                        <span class="menu-item-label">Tables</span>
                        <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub nav flex-column">
                    <li class="nav-item"><a href="table-basic.html" class="nav-link">Basic Table</a></li>
                    <li class="nav-item"><a href="table-datatable.html" class="nav-link">Data Table</a></li>
                </ul>
                <a href="#" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
                        <span class="menu-item-label">Maps</span>
                        <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub nav flex-column">
                    <li class="nav-item"><a href="map-google.html" class="nav-link">Google Maps</a></li>
                    <li class="nav-item"><a href="map-leaflet.html" class="nav-link">Leaflet Maps</a></li>
                    <li class="nav-item"><a href="map-vector.html" class="nav-link">Vector Maps</a></li>
                </ul>
                <a href="#" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
                        <span class="menu-item-label">Utilities</span>
                        <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub nav flex-column">
                    <li class="nav-item"><a href="background.html" class="nav-link">Background</a></li>
                    <li class="nav-item"><a href="border.html" class="nav-link">Border</a></li>
                    <li class="nav-item"><a href="height.html" class="nav-link">Height</a></li>
                    <li class="nav-item"><a href="margin.html" class="nav-link">Margin</a></li>
                    <li class="nav-item"><a href="padding.html" class="nav-link">Padding</a></li>
                    <li class="nav-item"><a href="position.html" class="nav-link">Position</a></li>
                    <li class="nav-item"><a href="typography-util.html" class="nav-link">Typography</a></li>
                    <li class="nav-item"><a href="width.html" class="nav-link">Width</a></li>
                </ul>
                <a href="pages.html" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
                        <span class="menu-item-label">Apps &amp; Pages</span>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <a href="layouts.html" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon icon ion-ios-book-outline tx-22"></i>
                        <span class="menu-item-label">Layouts</span>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <a href="sitemap.html" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon icon ion-ios-list-outline tx-22"></i>
                        <span class="menu-item-label">Sitemap</span>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
            @endsection
        </div><!-- br-sideleft-menu -->

</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->
