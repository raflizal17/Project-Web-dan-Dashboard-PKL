<!-- Main Sidebar Container -->
<aside class="main-sidebar">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <div class="brand d-flex align-items-center">
        <img src="/assets/dist/img/LogoPKL.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="ml-2 brand-text" style="font-size: 1.4em;">PKL 61</span>
      </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar mt-4">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <?php foreach($menu as $m) : ?>
                <li class="nav-item <?= $m['menu'] == $menuActive ? 'menu-open': '' ?>">
                    <a href="<?= $m['href'] ?>" class="nav-link <?= $m['menu'] == $menuActive ? 'active': '' ?>">
                        <i class="nav-icon <?= $m['icon'] ?>" style="font-size:22px;"></i>
                        <p style="margin-left:10px; font-size:16px; font-weight:bold;">
                            <?= $m['menu'] ?>
                            <?php if (isset($m['subMenu'])) : ?>
                                <i class="right fas fa-angle-left"></i>
                            <?php endif; ?>
                        </p>
                    </a>
                    <?php if (isset($m['subMenu'])) : ?>
                        <ul class="nav nav-treeview">
                            <?php foreach ($m['subMenu'] as $sm) : ?>
                                <li class="nav-item">
                                    <a href="<?= $sm['href'] ?>" class="nav-link <?= ($sm['subMenu'] == $subMenuActive && $m['menu'] == $menuActive) ? 'active': '' ?>">
                                    <p style="margin-left:25px;"><?= $sm['subMenu'] ?></p>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      <div class="position-absolute" style="left: 0; bottom:4rem;">
        <img src="/assets/dist/img/ornamen-sidebar.png" alt="ornamen" style="width: 1.0em; height: 12em;">
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>