<!DOCTYPE html>
<html lang="en">
    <?= $this->include('dashboard/_partials/head') ?>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
    
    <div class="wrapper">
        <?= $this->include('dashboard/_partials/navbar') ?>
        <?= $this->include('dashboard/_partials/sidebar') ?>
        <?= $this->renderSection('content') ?>
        <?= $this->include('dashboard/_partials/footer') ?>
    </div>

    <?= $this->include('dashboard/_partials/script') ?>
    <?= $this->renderSection('js') ?>
</body>
</html>