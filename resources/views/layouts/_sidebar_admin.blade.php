<div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('assets/compiled/svg/logo.svg') }}" alt="Logo" srcset=""></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <!-- Toggle Dark Mode -->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                        <g transform="translate(-210 -1)">
                            <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                            <circle cx="220.5" cy="11.5" r="4"></circle>
                            <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                        </g>
                    </g>
                </svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                    <label class="form-check-label"></label>
                </div>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>

    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li class="sidebar-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard')}}" class="sidebar-link">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-title">Pendaftaran</li>
            
            <li class="sidebar-item {{ request()->routeIs('admin.pendaftaran') ? 'active' : '' }}">
                <a href="" class="sidebar-link">
                    <i class="fas fa-user-plus"></i>
                    <span>Pendaftaran Santri</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.data_santri') ? 'active' : '' }}">
                <a href="{{ route('admin.data_santri') }}" class="sidebar-link">
                    <i class="fas fa-users"></i>
                    <span>Data Santri</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.kouta_psb') ? 'active' : '' }}">
                <a href="" class="sidebar-link">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Kouta PSB</span>
                </a>
            </li>

            <li class="sidebar-title">Pembayaran</li>
            
            <li class="sidebar-item {{ request()->routeIs('admin.pembayaran') ? 'active' : '' }}">
                <a href="" class="sidebar-link">
                    <i class="fas fa-credit-card"></i>
                    <span>Pembayaran Santri</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.status_pembayaran') ? 'active' : '' }}">
                <a href="" class="sidebar-link">
                    <i class="fas fa-check-circle"></i>
                    <span>Status Pembayaran</span>
                </a>
            </li>

            <li class="sidebar-title">Setting</li>
            
            <li class="sidebar-item  has-sub">
                <a href="#" class="sidebar-link">
                    <i class="bi bi-gear"></i>
                    <span>Setting</span>
                </a>
                <ul class="submenu submenu-closed" style="--submenu-height: 258px;">
                    <li class="submenu-item  ">
                        <a href="form-element-input.html" class="submenu-link">Tahun Ajaran</a>
                    </li>         
                    <li class="submenu-item  ">
                        <a href="form-element-input.html" class="submenu-link">Sekolah</a>
                    </li>         
                </ul>
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.notifikasi') ? 'active' : '' }}">
                <a href="" class="sidebar-link">
                    <i class="fas fa-bell"></i>
                    <span>Notifikasi</span>
                </a>
            </li>
        </ul>
    </div>
</div>
