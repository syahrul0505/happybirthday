<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/images/home/vmond.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Vmond</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/images/home/vmond.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name ?? 'Guest'}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Home
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('homes.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('homes2.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('homes3.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home 3</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('homes4.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home 4</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
