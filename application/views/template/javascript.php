<!--  Load jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery-3.1.1.min.js') ?>" type="text/javascript"></script>
<!--  Load Bootstrap JS -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>

<!--  Load custom JS -->
<?php
if (isset($js) && $js != ''):?>
    <script type="text/javascript" src="<?= base_url('assets/js/_' . $js . '.js') ?>"></script>
<?php endif; ?>
<script>
    function go_back() {
        window.history.back();
    }
</script>
