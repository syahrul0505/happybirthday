<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="./index.html" class="text-nowrap logo-img">
        {{-- <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" /> --}}
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Navigation</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        {{-- @can('absen')
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('absens.index') }}" aria-expanded="false">
            <span>
              <i class="fas fa-address-card"></i> <!-- Ikon lingkaran centang -->
            </span>
            <span class="hide-menu">Absens</span>
          </a>
        </li>
        @endcan --}}
        @can('inventory')
        <li class="sidebar-item">
          <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <span class="d-flex">
              <i class="ti ti-list-details"></i>
            </span>
            <span class="hide-menu">Inventory</span>
          </a>
          <ul aria-expanded="false" class="collapse first-level">
            @can('list-stock')
            <li class="sidebar-item">
              <a href="{{ route('inventory.list-stock.index') }}" class="sidebar-link">
                <div class="round-16 d-flex align-items-center justify-content-center">
                  <i class="ti ti-circle"></i>
                </div>
                <span class="hide-menu">List Stock</span>
              </a>
            </li>
            @endcan
            @can('stock-in-list')
            <li class="sidebar-item">
              <a href="{{ route('stock-ins.index') }}"
                class="sidebar-link">
                <div class="round-16 d-flex align-items-center justify-content-center">
                  <i class="ti ti-circle"></i>
                </div>
                <span class="hide-menu">Stock In</span>
              </a>
            </li>
            @endcan
            @can('stock-out-list')
            <li class="sidebar-item">
              <a href="{{ route('stock-outs.index') }}" class="sidebar-link">
                <div class="round-16 d-flex align-items-center justify-content-center">
                  <i class="ti ti-circle"></i>
                </div>
                <span class="hide-menu">Stock Out</span>
              </a>
            </li>
            @endcan
          </ul>
        </li>
        @endcan
        @can('master-data')
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('master-data.index') }}" aria-expanded="false">
            <span>
              <i class="ti ti-folder"></i>
            </span>
            <span class="hide-menu">Master Data</span>
          </a>
        </li>
        @endcan

        @can('restaurant-list')
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('restaurants.index') }}" aria-expanded="false">
            <span>
              <i class="ti ti-basket"></i>
            </span>
            <span class="hide-menu">Management Toko Online</span>
          </a>
        </li>
        @endcan
        @can('report-penjualan')
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('report-penjualan') }}" aria-expanded="false">
            <span>
              <i class="ti ti-file-text"></i>
            </span>
            <span class="hide-menu">Report Penjualan</span>
          </a>
        </li>
        @endcan
        {{-- @can('report-absen')
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('report-absensi') }}" aria-expanded="false">
            <span>
              <i class="ti ti-file-analytics"></i>
            </span>
            <span class="hide-menu">Report Absensi</span>
          </a>
        </li>
        @endcan --}}
        @can('shop')
        <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('shop.index') }}" aria-expanded="false">
            <span>
              <i class="ti ti-basket"></i>
            </span>
            <span class="hide-menu">Shop</span>
          </a>
        </li>
        @endcan
      </ul>
    </nav>
  </div>
</aside>