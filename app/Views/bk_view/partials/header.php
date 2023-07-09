<div class="header">

    <div class="header-left">
        <a href="<?php echo base_url('home/index_bk'); ?>" class="logo">
            <img src="<?php echo base_url('theme'); ?>/assets/img/img_real/logo_skansa.PNG" alt="Logo">
        </a>
        <a href="index.html" class="logo logo-small">
            <img src="<?php echo base_url('theme'); ?>/assets/img/img_real/logo.png" alt="Logo" width="30" height="30">
        </a>
    </div>
    <div class="menu-toggle">
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>

    <ul class="nav user-menu">

        <li class="nav-item dropdown has-arrow new-user-menus">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img">
                    <img class="rounded-circle" src="<?php echo base_url('theme'); ?>/assets/img/profiles/avatar-01.jpg" width="31" alt="Jassa Rich">
                    <div class="user-text">
                        <h6><?= session()->get('nama'); ?></h6>
                        <p class="text-muted mb-0"> Guru </p>
                    </div>
                </span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="<?php echo base_url('theme'); ?>/assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6><?= session()->get('nama'); ?></h6>
                        <p class="text-muted mb-0">Guru</p>
                    </div>
                </div>

                <a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Logout</a>
            </div>
        </li>
    </ul>
</div>