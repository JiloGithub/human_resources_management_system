<nav class="navbar navbar-header navbar-expand navbar-light bg-white shadow-sm">
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">

            <li class="dropdown">
                <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <div class="avatar me-1">
                        <img src="./uploads/<?php echo $_SESSION['image']; ?>" alt="" srcset="">
                    </div>
                    <div class="d-none d-md-block d-lg-inline-block">Hi, <?php echo $_SESSION['fullname']; ?></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="manage-account.php"><i data-feather="user"></i>Manage Account</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" onclick="return window.confirm('Are you want to logout?')" href="logout.php"><i data-feather="log-out"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>