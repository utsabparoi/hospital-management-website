<div id="sidebar" class="sidebar                  responsive                    ace-save-state" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

    {{-- Dashboard --}}
    <ul class="nav nav-list" style="top: 0px;">
        <li class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" >
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>

        {{-- WebsiteInformation --}}
        <li class="nav-item">
            <a href="http://{{$WebsiteInformation->website}}" target="_blank">
                <i class="menu-icon fa fa-link"></i>
                <span class="menu-text"> {{$WebsiteInformation->website}} </span>
            </a>

            <b class="arrow"></b>
        </li>

        {{-- Slider List --}}
        <li class="nav-link {{ request()->is('sliders*') ? 'active' : '' }}">
            <a href="{{ route('sliders.index') }}" >
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text"> Slider List </span>
            </a>

            <b class="arrow"></b>
        </li>

        {{-- Site Information --}}
        <li class="nav-link {{ request()->is('websiteInformation*') ? 'active' : '' }}">
            <a href="{{ route('websiteInformation') }}">
                <i class="menu-icon fa fa-info-circle"></i>
                <span class="menu-text"> Site Information </span>
            </a>

            <b class="arrow"></b>
        </li>

        {{-- Doctor Department --}}
        <li class="nav-link {{ request()->is('department*') ? 'active' : '' }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list-alt" aria-hidden="true"></i>
                <span class="menu-text"> Doctor Department </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="nav-link {{ request()->is('departmentCreate*') ? 'active' : '' }}">
                    <a href="{{ route('departmentCreate') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Create Department
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="nav-link {{ request()->is('allDepartment*') ? 'active' : '' }}">
                    <a href="{{ route('allDepartment') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Department List
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        {{-- Doctor Information --}}
        <li class="nav-link {{ request()->is('doctors*') ? 'active' : '' }}">
            <a href="{{ route('doctors.index') }}">
                <i class="menu-icon fa fa-user-md"></i>
                <span class="menu-text">Doctor Information</span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Diagonstic Test --}}
        <li class="nav-link {{ request()->is('diagnosticTest*') ? 'active' : '' }}">
            <a href="{{ route('diagnosticTest') }}">
                <i class="menu-icon fa fa-stethoscope"></i>
                <span class="menu-text">Diagonstic Test</span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Health Package --}}
        <li class="nav-link {{ request()->is('healthPackage*') ? 'active' : '' }}">
            <a href="{{ route('healthPackage') }}">
                <i class="menu-icon fa fa-archive"></i>
                <span class="menu-text">Health Package</span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Facilities --}}
        <li class="nav-link {{ request()->is('facilities*') ? 'active' : '' }}">
            <a href="{{ route('facilities.index') }}">
                <i class="menu-icon fa fa-building"></i>
                <span class="menu-text"> Facilities </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Articles & News --}}
        <li class="nav-link {{ request()->is('articles_and_news*') ? 'active' : '' }}">
            <a href="{{ route('articles_and_news.index') }}">
                <i class="menu-icon fa fa-newspaper-o"></i>
                <span class="menu-text"> Articles & News </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Parterns --}}
        <li class="nav-link {{ request()->is('partners*') ? 'active' : '' }}">
            <a href="{{ route('partners.index') }}">
                <i class="menu-icon fa fa-group"></i>
                <span class="menu-text"> Parterns </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- AboutUs --}}
        <li class="nav-link {{ request()->is('about_us*') ? 'active' : '' }}">
            <a href="{{ route('about_us.index') }}">
                <i class="menu-icon fa fa-group"></i>
                <span class="menu-text"> About Us </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- User --}}
        <li class="nav-link {{ request()->is('user*') ? 'active' : '' }}">
            <a href="{{ route('user') }}">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text"> User </span>
            </a>

            <b class="arrow"></b>
        </li>

    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>
