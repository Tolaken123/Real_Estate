<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link text-decoration-none">
        <img src="{{ asset('vendors/dist/img/camrealestatelogo.png')}}" alt="camrealestate"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light ">CamRealEstate</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <div class="profileAdmin">
                <img src="{{ asset('images/'.Auth::user()->avatar) }}" style="height:100px; width:100px;" alt="25">
                </div>
                <div class="info">
                    <h4><a href="#" class="d-block text-decoration-none">{{ Auth::user()->name }}</a></h4>
    
                </div>
            </div>
            {{-- <div class="info">
                <a href="#" class="d-block text-decoration-none">{{ Auth::user()->name }}</a>

            </div> --}}
        </div>
        
     
        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-list-ul"></i>
                        <p>
                            Listing Type
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.properties.index',['listing_type' => 'Rent']) }}"
                               class="nav-link ">
                                <i class="fas fa-bed"></i>
                                <p>Rent</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.properties.index',['listing_type' => 'Sale']) }}"
                               class="nav-link ">
                                <i class="fas fa-hand-holding-usd"></i>
                                <p>Sale</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @admin

                <li class="nav-item menu-close">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-list-ul"></i>
                        <p>
                            User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    @admin
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.user.index') }}"
                               class="nav-link ">
                               <i class="nav-icon fas fa-bars"></i>
                                <p>List</p>
                            </a>
                        </li>
                    </ul>
                    @endadmin
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.user.create') }}"
                               class="nav-link ">
                               <i class="nav-icon fas fa-plus"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endadmin
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-cog"></i>
                        <p>
                            Setting
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/profile') }}" class="nav-link">
                                <i class="fas fa-user"></i>
                                <p>
                                    Edit Profile
                                </p>
                            </a>
                        </li>

                        @admin

                        {{-- <li class="nav-item">
                            <a href="{{ Route('admin.user.index') }}" class="nav-link">
                                <i class="fas fa-user"></i>
                                <p>
                                    Account
                                </p>
                            </a>
                        </li> --}}
                        @endadmin
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                        {{-- <i class="fas fa-sign-out-alt">logout</i> --}}
                        logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
