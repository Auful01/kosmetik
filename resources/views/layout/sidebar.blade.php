<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            @if (Auth::user()->role == 0)
            <li class="nav-item">
                <a href="{{route('user-home')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Home
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-medkit"></i>
                    <p>
                        Treatments
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="coba" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Acne</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="coba" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Body Treatment</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="coba" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pigmentation</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="coba" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Rejuvenating</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="coba" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Scar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./index3.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>White & Glow</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{route('doctor')}}" class="nav-link">
                    <i class="nav-icon fas fa-user-md"></i>
                    <p>
                        Doctor
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('transaction.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-money-bill-wave"></i>
                    <p>
                        Transaction
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-clipboard-list"></i>
                    <p>
                        Reservation
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-power-off"></i>
                    <p>
                        Logout
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            @elseif (Auth::user()->role ==1)
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Dashboard
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/customer" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        User
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/treatment" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Layanan Treatment
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('doctor-list.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Konsultasi Dokter
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/reservasi-ad" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Reservasi
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            @endif
        </ul>


    </nav>
    <!-- /.sidebar-menu -->
</div>
