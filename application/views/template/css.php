<!-- Bootstrap core CSS     -->
<link href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet"/>
<!--  Fonts and icons  -->
<link href="<?= base_url('assets/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet"/>
<!--  Load custom CSS  -->
<?php if (isset($css) && $css != ''): ?>
    <link href="<?= base_url() ?>assets/css/_<?= $css ?>.css" rel="stylesheet"/>
<?php endif ?>