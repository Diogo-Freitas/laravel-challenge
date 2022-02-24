        <!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('site.home') }}">
        <div class="sidebar-brand-icon">
            <i class="fab fa-laravel"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LARAVEL</div>
    </a>

    <!-- Divider -->
    <li><hr class="sidebar-divider my-0"></li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('panel.tips') }}">
            <i class="fa-regular fa-lightbulb"></i>
            <span>Dicas</span>
        </a>
    </li>
    
    <!-- Nav Item - User -->
    
    <!-- Divider -->
    <li><hr class="sidebar-divider"></li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->