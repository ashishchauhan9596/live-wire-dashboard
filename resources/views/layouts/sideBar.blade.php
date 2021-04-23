<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">WRITE WAY</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if (\Request::is('home')) {{ 'active' }} @else {{ '' }} @endif">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>DASHBOARD</span>
        </a>
    </li>
    @hasanyrole('SuperAdmin|Admin')
    <li class="nav-item @if (\Request::is('users')) {{ 'active' }} @else {{ '' }} @endif">
        <a class="nav-link" href="/users">
            <i class="fas fa-fw fa-users"></i>
            <span>SYSTEM USERS</span>
        </a>
    </li>
    <li class="nav-item @if (\Request::is('authors')) {{ 'active' }} @else {{ '' }} @endif">
        <a class="nav-link" href="/authors">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>AUTHORS</span>
        </a>
    </li>
    @endhasanyrole
    @role('Author')
    <li class="nav-item @if (\Request::is('books')) {{ 'active' }} @else {{ '' }} @endif">
        <a class="nav-link" href="/books">
            <i class="fas fa-fw fa-book"></i>
            <span>My Books</span>
        </a>
    </li>
    @endrole




    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
