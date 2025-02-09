<div class="collapse navbar-collapse px-4  w-auto " id="sidenav-collapse-main">

    @if (Auth::user()->role === 'admin')
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">

                    <div
                        class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <i class="fas fa-tachometer-alt fa-2x text-white"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('surat-masuk') ? 'active' : '' }}" href="/surat-masuk">

                    <div
                        class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <i class="fas fa-inbox fa-2x text-white"></i>
                    </div>
                    <span class="nav-link-text ms-1">Surat Masuk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('recipient') ? 'active' : '' }}" href="/recipient">

                    <div
                        class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <i class="fas fa-user fa-2x text-white"></i>
                    </div>
                    <span class="nav-link-text ms-1">Recipient</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('agenda') ? 'active' : '' }}" href="/agenda">

                    <div
                        class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <i class="fas fa-calendar-alt fa-2x text-white"></i>
                    </div>
                    <span class="nav-link-text ms-1">Agenda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}" href="/galeri">

                    <div
                        class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <i class="fas fa-images fa-2x text-white"></i>
                    </div>
                    <span class="nav-link-text ms-1">Galeri</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('logout') ? 'active' : '' }}" href="/logout">

                    <div
                        class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <i class="fas fa-sign-out-alt fa-2x text-white"></i>
                    </div>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
            </li>
        </ul>
    @else
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">

                    <div
                        class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <i class="fas fa-tachometer-alt fa-2x text-white"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link {{ Request::is('recipient') ? 'active' : '' }}" href="/recipient">

                    <div
                        class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <i class="fas fa-user fa-2x text-white"></i>
                    </div>
                    <span class="nav-link-text ms-1">Recipient</span>
                </a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}" href="/galeri">

                    <div
                        class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <i class="fas fa-images fa-2x text-white"></i>
                    </div>
                    <span class="nav-link-text ms-1">Galeri</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('logout') ? 'active' : '' }}" href="/logout">

                    <div
                        class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <i class="fas fa-sign-out-alt fa-2x text-white"></i>
                    </div>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
            </li>
        </ul>
    @endif


</div>
{{-- <div class="sidenav-footer mx-4 ">
    <div class="card border-radius-md" id="sidenavCard">
        <div class="card-body  text-start  p-3 w-100">
            <div class="mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="text-primary"
                    viewBox="0 0 24 24" fill="currentColor" id="sidenavCardIcon">
                    <path
                        d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625z" />
                    <path
                        d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
                </svg>
            </div>
            <div class="docs-info">
                <h6 class="font-weight-bold up mb-2">Need help?</h6>
                <p class="text-sm font-weight-normal">Please check our docs.</p>
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/corporate-ui-dashboard"
                    target="_blank" class="font-weight-bold text-sm mb-0 icon-move-right mt-auto w-100 mb-0">
                    Documentation
                    <i class="fas fa-arrow-right-long text-sm ms-1" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</div> --}}
