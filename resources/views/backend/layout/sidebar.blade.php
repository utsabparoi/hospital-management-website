<div id="sidebar" class="sidebar                  responsive                    ace-save-state" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

{{--    <div class="sidebar-shortcuts" id="sidebar-shortcuts">--}}
{{--        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">--}}
{{--            <button class="btn btn-success">--}}
{{--                <i class="ace-icon fa fa-signal"></i>--}}
{{--            </button>--}}

{{--            <button class="btn btn-info">--}}
{{--                <i class="ace-icon fa fa-pencil"></i>--}}
{{--            </button>--}}

{{--            <button class="btn btn-warning">--}}
{{--                <i class="ace-icon fa fa-users"></i>--}}
{{--            </button>--}}

{{--            <button class="btn btn-danger">--}}
{{--                <i class="ace-icon fa fa-cogs"></i>--}}
{{--            </button>--}}
{{--        </div>--}}

{{--        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">--}}
{{--            <span class="btn btn-success"></span>--}}

{{--            <span class="btn btn-info"></span>--}}

{{--            <span class="btn btn-warning"></span>--}}

{{--            <span class="btn btn-danger"></span>--}}
{{--        </div>--}}
{{--    </div><!-- /.sidebar-shortcuts -->--}}

    <ul class="nav nav-list" style="top: 0px;">
        <li class="active">
            <a href="{{ route('dashboard') }}">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="http://{{$WebsiteInformation->website}}" target="_blank">
                <i class="menu-icon fa fa-link"></i>
                <span class="menu-text"> {{$WebsiteInformation->website}} </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="{{ route('websiteInformation') }}">
                <i class="menu-icon fa fa-info-circle"></i>
                <span class="menu-text"> Slider List </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="{{ route('websiteInformation') }}">
                <i class="menu-icon fa fa-info-circle"></i>
                <span class="menu-text"> Site Information </span>
            </a>

            <b class="arrow"></b>
        </li>


        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list-alt" aria-hidden="true"></i>
                <span class="menu-text"> Department </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{ route('departmentCreate') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Create Department
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('allDepartment') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Department List
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-stethoscope" aria-hidden="true"></i>
                <span class="menu-text"> Doctor </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{ route('doctor') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Insert Doctor Information
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('allDoctor') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Doctor List
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>
