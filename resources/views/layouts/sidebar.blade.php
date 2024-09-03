<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="main-dropdown">Main Dropdown</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="#" key="sub-dropdown">Sub Dropdown</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                key="t-sub-dropdown1">Sub Dropdown 1</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="#" key="sub-dropdown-1.1">Sub Dropdown 1.1</a>
                                </li>
                                <li>
                                    <a href="#" key="sub-dropdown-1.2">Sub Dropdown 1.2</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                key="t-sub-dropdown1">Sub Dropdown 2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="#" key="sub-dropdown-2.1">Sub Dropdown 2.1</a>
                                </li>
                                <li>
                                    <a href="#" key="sub-dropdown-2.2">Sub Dropdown 2.2</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge rounded-pill bg-success float-end"
                            key="t-new">@lang('translation.New')</span>
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication">Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login" key="t-login">Login</a></li>
                        <li><a href="auth-register" key="t-register">Register</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect has-arrow">
                        <i class="bx bx-user-circle"></i>
                        <span key="h-users">Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('pages.users') }}" key="p-users_pages">User Account</a></li>
                        <li><a href="auth-register" key="p-users_permission">User Permission</a></li>
                    </ul>
                </li>


                {{-- Icons Used
                Box Icons
                Materail Icons
                Drip Icons
                Font Awesome --}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
