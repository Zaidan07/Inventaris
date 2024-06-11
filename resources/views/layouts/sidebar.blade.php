<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        
      </div>
      <div class="sidebar-brand-text mx-3">
        <img src="{{ asset('admin_assets/img/cr.png') }}" width="100" alt="">
      </div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    {{-- <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}"> 
        
        <i class="fas fa-fw fa-home"></i>
        <span>Dashboard</span></a>
    </li> --}}
    <li class="nav-item">
      <a class="nav-link" href="{{ route('products') }}"> 
        
        <i class="fas fa-fw fa-box"></i>
        <span>Product</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    
  </ul>