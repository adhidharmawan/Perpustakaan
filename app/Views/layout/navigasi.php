<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="<?php echo base_url('/'); ?>" class="list-group-item list-group-item-action py-2 ripple <?php echo ($menu === "halDashboard") ? "active" : "" ?>" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
                </a>
                <a href="<?php echo base_url('/buku'); ?>" class="list-group-item list-group-item-action py-2 ripple <?php echo ($menu === "halBuku") ? "active" : "" ?>">
                    <i class="fas fa-chart-area fa-fw me-3"></i><span>Buku</span>
                </a>
                <a href="<?php echo base_url('/user'); ?>" class="list-group-item list-group-item-action py-2 ripple <?php echo ($menu === "halUser") ? "active" : "" ?>">
                    <i class="fas fa-users fa-fw me-3"></i><span>Users</span>
                </a>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url('img/logoptik.png'); ?>" height="25" alt="" loading="lazy" />
            </a>
            <!-- Search form -->
            <form class="d-none d-md-flex input-group w-auto my-auto">
                <input autocomplete="off" type="search" class="form-control rounded" placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px" />
                <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
            </form>

            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">


                <!-- Icon dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link me-3 me-lg-0"><?php $datetime = (new \CodeIgniter\I18n\Time("now", "Asia/Jakarta", "de_DE"));
                                                        echo $datetime->format('D, d F Y || H:i:s') ?> WIB</a>
                </li>

                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo base_url('/'); ?>" class="rounded-circle" height="22" alt="" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">My profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>