<!-- BEGIN:: Dashboard Sidebar Content Wrapper -->
    <ul id="accordionSidebar" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
        <!-- brand or logo block -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">TheFastLane</div>
        </a>
        <!-- divider ( sidebar white horizontal line ) -->
        <hr class="sidebar-divider my-0">
        <!-- dashboard navbar item -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- divider ( sidebar white horizontal line ) -->
        <hr class="sidebar-divider">
        <!-- interface heading navbar item -->
        <div class="sidebar-heading"> Cinema </div>
        <!-- send message -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('cinemas') }}">
                <i class="fas fa-fw fa-list"></i>
                List
            </a>
        </li>

        <!-- sidebar toggler ( show | hide ) btn -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
<!-- END::   Dashboard Sidebar Content Wrapper -->