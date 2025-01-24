<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}"> <img alt="BMS" src="{{ asset('assets/img/logo.png') }}"
                    class="header-logo" /> <span class="logo-name">{{ config('app.name') }}</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="dropdown {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }} ">
                <a href="{{ route('dashboard') }}" class="nav-link"><i
                        class="material-icons">dashboard</i><span>Dashboard</span></a>
            </li>
        </ul>
    </aside>
</div>
