<!-- ========== App Menu ========== -->
@php
    $isMasterActive = request()->is('role') || request()->is('permission') || request()->is('user');
    $isRolesPermissionActive = request()->is('role') || request()->is('permission');
    $roleActive = request()->is('role') ? 'active' : '';
    $permissionActive = request()->is('permission') ? 'active' : '';
    $userActive = request()->is('user') ? 'active' : '';
@endphp
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="/home" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{URL::to('/')}}/assets/images/logo-sm.png" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{URL::to('/')}}/assets/images/logo-dark.png" alt="" height="17">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="/home" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{URL::to('/')}}/assets/images/logo-sm.png" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{URL::to('/')}}/assets/images/logo-light.png" alt="" height="17">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-master">Master</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->is('home') ? 'active' : '' }}" href="/home"> <i
                                class="ri-home-4-line"></i><span data-key="t-dashboard">Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMaster" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarMaster">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-master">Master</span>
                    </a>

                    <div class="collapse menu-dropdown {{ $isMasterActive ? 'show' : '' }}" id="sidebarMaster">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarRolesPermission"
                                   class="nav-link {{ $isRolesPermissionActive ? 'active' : '' }}"
                                   data-bs-toggle="collapse"
                                   role="button" aria-expanded="{{ $isRolesPermissionActive ? 'true' : 'false' }}"
                                   aria-controls="sidebarRolesPermission">
                                    Roles & Permissions
                                </a>
                                <div class="menu-dropdown collapse {{ $isRolesPermissionActive ? 'show' : '' }}"
                                     id="sidebarRolesPermission" style="">
                                    <ul class="nav nav-sm flex-column">
                                        @foreach(['Roles' => 'role.index', 'Permissions' => 'permission.index'] as $label => $route)
                                            @php
                                                $isActive = Route::currentRouteName() === $route; // Check if current route matches the specified route
                                            @endphp
                                            <li class="nav-item">
                                                <a href="{{ route($route) }}"
                                                   class="nav-link {{ $isActive ? 'active' : '' }}">
                                                    {{ $label }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('user.index')}}" class="nav-link {{ $userActive }}">User</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>


        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->