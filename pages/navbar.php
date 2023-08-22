<?php session_start(); ?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

        <li class="nav-item d-none d-sm-inline-block">
            <a href="../pages/index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block " id="321">
            <a href="../login/login.php" class="nav-link">Giriş</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="../login/logout.php" class="nav-link">Çıkış</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- Message Start -->
            <div class="media">
                <div class="media-body">
                </div>
            </div>
            <!-- Message End -->

            <div class="dropdown-divider"></div>

            <!-- Message Start -->
            <div class="media">

                <div class="media-body">


                </div>
            </div>
            <!-- Message End -->

            <div class="dropdown-divider"></div>

            <!-- Message Start -->
            <div class="media">

                <div class="media-body">


                </div>
            </div>
            <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>

        </div>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

            <div class="dropdown-divider"></div>

            <div class="dropdown-divider"></div>

            <div class="dropdown-divider"></div>

        </div>

</nav>

<!-- /.navbar -->


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">

        <span class="brand-text font-weight-light ml-3 p-2"><?php echo $_SESSION['user_role']; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">
                <a href="profile.php" class="d-block"><?php echo $_SESSION['user_name']; ?></a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <li class="nav nav-pills nav-sidebar flex-column  btn-secondary">
                <a href="aidatlar.php" class="nav-link">

                    <p>Aidatlar</p>
                </a>
            </li>
            <li class="nav nav-pills nav-sidebar flex-column  btn-secondary">
                <a href="giderler.php" class="nav-link">

                    <p>Giderler</p>
                </a>
            </li>
            <li class="nav nav-pills nav-sidebar flex-column btn-secondary  ">
                <a href="uyeler.php" class="nav-link">

                    <p>Üyeler</p>
                </a>
            </li>
            <li class="nav nav-pills nav-sidebar flex-column btn-secondary  ">
                <a href="kasa.php" class="nav-link">

                    <p>Kasa</p>
                </a>
            </li>
            <li class="nav nav-pills nav-sidebar flex-column  btn-secondary">
                <a href="daireler.php" class="nav-link">

                    <p>Daireler ###########</p>
                </a>
            </li>
            </li>
            <li class="nav nav-pills nav-sidebar flex-column  btn-secondary">
                <a href="site_duzeni.php" class="nav-link">

                    <p>Site Blok Düzeni </p>
                </a>
            </li>

            </ul>
            </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>