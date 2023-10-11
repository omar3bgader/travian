<!-- ======= Sidebar ======= -->
@section('Sidebar')
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('home') }}">
            <i class="bi bi-grid"></i>
            <span class="pe-3">الصفحة الرئيسية</span>
        </a>
        </li><!-- End Dashboard Nav -->
        <li>
            <hr class="dropdown-divider">
        </li>
        <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('server.index') }}">
            <i class="bi bi-journal-text"></i>
            <span class="pe-3">السيرفرات</span>
        </a>
        </li><!-- End Forms Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('buyer.index') }}">
                <i class="bi bi-layout-text-window-reverse"></i>
                <span class="pe-3">الزباين</span>
            </a>
        </li><!-- End Tables Nav -->
        <li>
            <hr class="dropdown-divider">
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('player.index') }}">
                <i class="bi bi-layout-text-window-reverse"></i>
                <span class="pe-3">اللاعبين</span>
            </a>
        </li><!-- End Tables Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('payment.index') }}">
                <i class="bi bi-layout-text-window-reverse"></i>
                <span class="pe-3">الحوالات</span>
            </a>
        </li><!-- End Tables Nav -->
    </ul>
</aside><!-- End Sidebar-->
@show
