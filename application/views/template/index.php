<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="<?=base_url('assets/images/favicon.png')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>{title}</title>
    <?php $this->load->view('template/css') ?>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
</head>
<body>

<?php (is_null(!$content) || $content !== '') ? $this->load->view($content) : show_404() ?>

<?php $this->load->view('template/javascript') ?>

</body>
</html>