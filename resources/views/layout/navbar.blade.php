<!-- ======= navbar ======= -->
@section('navbar')
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <i class="bi bi-list pe-4 toggle-sidebar-btn"></i>
            <a href="index.php" class="logo d-flex align-items-center">
            <span class="d-none d-lg-block pe-4">Travian</span>
            </a>
        </div><!-- End Logo -->
        <nav class="header-nav me-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <span class="d-none d-md-block pe-3 ps-2">name</span>
                        <img src="{{ asset('images/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                    </a><!-- End Profile Iamge Icon -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('home') }}">
                                <i class="fas fa-solid fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="logout.php">
                                <i class="fas fa-solid fa-right-from-bracket fa-sm fa-fw mr-2 text-gray-900"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->
    </header>
@show
<!-- End navbar -->
