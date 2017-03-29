<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Admin</b>LTE</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li>
                    <a href="#">Profile</a>
                </li>
                <li>
                    <a href="#"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="#" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>
