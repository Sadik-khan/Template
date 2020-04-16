<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
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

    </div>
</nav>
