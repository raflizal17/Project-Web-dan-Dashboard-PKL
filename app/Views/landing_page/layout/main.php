<!DOCTYPE html>
<html lang="en">
    <?= $this->include('landing_page/_partials/head') ?>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
    <div class="wrapper">
        <?= $this->include('landing_page/_partials/navbar') ?>
        <?= $this->include('landing_page/_partials/title') ?>
        <?= $this->renderSection('content') ?>
        <?= $this->include('landing_page/_partials/footer') ?>
    </div>

    <?= $this->include('landing_page/_partials/script') ?>
    <?= $this->renderSection('js') ?>
</body>
</html>