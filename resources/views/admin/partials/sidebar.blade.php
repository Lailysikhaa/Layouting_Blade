{{-- Menubar kiri (sidebar). Link ke 6 halaman yang ada memakai route(); menu template lain = placeholder --}}
<div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->
                    <div class="user-profile text-center mt-3">
                        <div class="">
                            <img src="{{ asset('assets/admin/images/users/avatar-1.jpg') }}" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="mt-3">
                            <h4 class="font-size-16 mb-1">Julia Hudda</h4>
                            <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
                        </div>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.calendar') }}" class=" waves-effect">
                                    <i class="ri-calendar-2-line"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Email</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="javascript: void(0);">Inbox</a></li>
                                    <li><a href="javascript: void(0);">Read Email</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Layouts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">Dark Sidebar</a></li>
                                            <li><a href="javascript: void(0);">Compact Sidebar</a></li>
                                            <li><a href="javascript: void(0);">Icon Sidebar</a></li>
                                            <li><a href="javascript: void(0);">Boxed Layout</a></li>
                                            <li><a href="javascript: void(0);">Preloader</a></li>
                                            <li><a href="javascript: void(0);">Colored Sidebar</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">Horizontal</a></li>
                                            <li><a href="javascript: void(0);">Topbar light</a></li>
                                            <li><a href="javascript: void(0);">Boxed width</a></li>
                                            <li><a href="javascript: void(0);">Preloader</a></li>
                                            <li><a href="javascript: void(0);">Colored Header</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-title">Pages</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-account-circle-line"></i>
                                    <span>Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                                    <li><a href="javascript: void(0);">Register</a></li>
                                    <li><a href="javascript: void(0);">Recover Password</a></li>
                                    <li><a href="javascript: void(0);">Lock Screen</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>Utility</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="javascript: void(0);">Starter Page</a></li>
                                    <li><a href="javascript: void(0);">Timeline</a></li>
                                    <li><a href="javascript: void(0);">Directory</a></li>
                                    <li><a href="javascript: void(0);">Invoice</a></li>
                                    <li><a href="javascript: void(0);">Error 404</a></li>
                                    <li><a href="javascript: void(0);">Error 500</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Components</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-pencil-ruler-2-line"></i>
                                    <span>UI Elements</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="javascript: void(0);">Alerts</a></li>
                                    <li><a href="javascript: void(0);">Buttons</a></li>
                                    <li><a href="javascript: void(0);">Cards</a></li>
                                    <li><a href="javascript: void(0);">Carousel</a></li>
                                    <li><a href="javascript: void(0);">Dropdowns</a></li>
                                    <li><a href="javascript: void(0);">Grid</a></li>
                                    <li><a href="javascript: void(0);">Images</a></li>
                                    <li><a href="javascript: void(0);">Lightbox</a></li>
                                    <li><a href="javascript: void(0);">Modals</a></li>
                                    <li><a href="javascript: void(0);">Offcavas</a></li>
                                    <li><a href="javascript: void(0);">Progress Bars</a></li>
                                    <li><a href="javascript: void(0);">Tabs & Accordions</a></li>
                                    <li><a href="javascript: void(0);">Typography</a></li>
                                    <li><a href="javascript: void(0);">Video</a></li>
                                    <li><a href="javascript: void(0);">General</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-vip-crown-2-line"></i>
                                    <span>Advanced UI</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="javascript: void(0);">Range Slider</a></li>
                                    <li><a href="javascript: void(0);">Round Slider</a></li>
                                    <li><a href="javascript: void(0);">Session Timeout</a></li>
                                    <li><a href="{{ route('admin.sweet-alert') }}">Sweetalert 2</a></li>
                                    <li><a href="javascript: void(0);">Rating</a></li>
                                    <li><a href="javascript: void(0);">Notifications</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ri-eraser-fill"></i>
                                    <span class="badge rounded-pill bg-danger float-end">8</span>
                                    <span>Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('admin.form-elements') }}">Form Elements</a></li>
                                    <li><a href="javascript: void(0);">Form Validation</a></li>
                                    <li><a href="javascript: void(0);">Form Advanced Plugins</a></li>
                                    <li><a href="javascript: void(0);">Form Editors</a></li>
                                    <li><a href="javascript: void(0);">Form File Upload</a></li>
                                    <li><a href="javascript: void(0);">Form Wizard</a></li>
                                    <li><a href="javascript: void(0);">Form Mask</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-table-2"></i>
                                    <span>Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="javascript: void(0);">Basic Tables</a></li>
                                    <li><a href="{{ route('admin.tables-datatable') }}">Data Tables</a></li>
                                    <li><a href="javascript: void(0);">Responsive Table</a></li>
                                    <li><a href="javascript: void(0);">Editable Table</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-bar-chart-line"></i>
                                    <span>Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="javascript: void(0);">Apex Charts</a></li>
                                    <li><a href="javascript: void(0);">Chartjs Charts</a></li>
                                    <li><a href="javascript: void(0);">Flot Charts</a></li>
                                    <li><a href="javascript: void(0);">Jquery Knob Charts</a></li>
                                    <li><a href="javascript: void(0);">Sparkline Charts</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-brush-line"></i>
                                    <span>Icons</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="javascript: void(0);">Remix Icons</a></li>
                                    <li><a href="javascript: void(0);">Material Design</a></li>
                                    <li><a href="javascript: void(0);">Dripicons</a></li>
                                    <li><a href="javascript: void(0);">Font awesome 5</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-map-pin-line"></i>
                                    <span>Maps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="javascript: void(0);">Google Maps</a></li>
                                    <li><a href="javascript: void(0);">Vector Maps</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-share-line"></i>
                                    <span>Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
