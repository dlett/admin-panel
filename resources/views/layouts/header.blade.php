<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>LS</b>C</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>LS</b>CG</span>
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
                @include('layouts.header-components.messages')

                @include('layouts.header-components.notifications')

                @include('layouts.header-components.tasks')

                @include('layouts.header-components.user-account')

                @include('layouts.header-components.right-side-bar-toggle')
            </ul>
        </div>
    </nav>
</header>