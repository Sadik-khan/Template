<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">

        {{-- Dashboard --}}
        <div class="pcoded-navigatio-lavel">{{__('Dashborad')}}</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class=" {{Request::is('admin/home') ? 'active':''}} ">
                <a href="{{ route('admin.home') }}">
                    <span class="pcoded-micon"><i class="fa fa-home"></i></span>
                    <span class="pcoded-mtext">{{__("Dashobard")}}</span>
                </a>
            </li>
        </ul>

        {{-- Roles & Permission --}}        
        <div class="pcoded-navigatio-lavel">Roles & Permission</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class=" {{Request::is('admin/role*') ? 'active':''}} ">
                <a href="{{ route('admin.roles') }}">
                    <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
                    <span class="pcoded-mtext">Role</span>
                </a>
            </li>
        </ul>

        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="index-1.htm">
                            <span class="pcoded-mtext">Default</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="dashboard-crm.htm">
                            <span class="pcoded-mtext">CRM</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dashboard-analytics.htm">
                            <span class="pcoded-mtext">Analytics</span>
                            <span class="pcoded-badge label label-info ">NEW</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                    <span class="pcoded-mtext">Page layouts</span>
                    <span class="pcoded-badge label label-warning">NEW</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Vertical</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="menu-static.htm">
                                    <span class="pcoded-mtext">Static Layout</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="menu-header-fixed.htm">
                                    <span class="pcoded-mtext">Header Fixed</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="menu-compact.htm">
                                    <span class="pcoded-mtext">Compact</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="menu-sidebar.htm">
                                    <span class="pcoded-mtext">Sidebar Fixed</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Horizontal</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="menu-horizontal-static.htm" target="_blank">
                                    <span class="pcoded-mtext">Static Layout</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="menu-horizontal-fixed.htm" target="_blank">
                                    <span class="pcoded-mtext">Fixed layout</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="menu-horizontal-icon.htm" target="_blank">
                                    <span class="pcoded-mtext">Static With Icon</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="menu-horizontal-icon-fixed.htm" target="_blank">
                                    <span class="pcoded-mtext">Fixed With Icon</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="menu-bottom.htm">
                            <span class="pcoded-mtext">Bottom Menu</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="box-layout.htm" target="_blank">
                            <span class="pcoded-mtext">Box Layout</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-rtl.htm" target="_blank">
                            <span class="pcoded-mtext">RTL</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="navbar-light.htm">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">Navigation</span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                    <span class="pcoded-mtext">Widget</span>
                    <span class="pcoded-badge label label-danger">100+</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="widget-statistic.htm">
                            <span class="pcoded-mtext">Statistic</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="widget-data.htm">
                            <span class="pcoded-mtext">Data</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="widget-chart.htm">
                            <span class="pcoded-mtext">Chart Widget</span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>

    </div>
</nav>
