<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('admin/images/icon/logo.png') }}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="home">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href=" {{ route ('contact.index')}} ">
                        <i class="fas fa-chart-bar"></i>Data Contact Us</a>
                </li>
                <li>
                    <a href=" /skill ">
                        <i class="fas fa-chart-bar"></i>Data AboutSkill</a>
                </li>
                <li>
                    <a href="/skill/create ">
                        <i class="fas fa-chart-bar"></i>Add Data AboutSkill</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->