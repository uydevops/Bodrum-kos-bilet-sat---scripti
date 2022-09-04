<body id="page-top">
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fab fa-digital-ocean"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo $site["site_adi"]; ?></div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <?php

            if ($oturum_ac["perm"] == "Admin") { ?>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Admin Ayarlari</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Sistem ve Profil:</h6>
                            <a class="collapse-item" href="setting.php">Site Ayarlari</a>
                            <a class="collapse-item" href="adres.php">Adres Bilgileri</a>
                            <a class="collapse-item" href="profile.php">Profile Ayarlari</a>
                            <a class="collapse-item" href="admin_add.php">Yönetici Ekle</a>
                            <a class="collapse-item" href="admin_list.php">Yönetici Listesi</a>


                        </div>
                    </div>
                </li>

            <?php } ?>
            <!-- Nav Item - Utilities Collapse Menu -->



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Sayfalar</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">İçerik Bilgileri</h6>
                        <a class="collapse-item" href="hakkimizda.php">Hakkımızda</a>
                        <a class="collapse-item" href="sss.php">S.S.S</a>
                        <a class="collapse-item" href="kvkk.php">Kvkk</a>
                        <a class="collapse-item" href="bilet_satis.php">Bilet Satış</a>
                        <a class="collapse-item" href="slider.php">Slider Ayarlari</a>
                          <a class="collapse-item" href="aaa.php">Footer Banner</a>
                        <a class="collapse-item" href="haberler.php">Haberler</a>
                        <a class="collapse-item" href="filo.php">Filo</a>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>