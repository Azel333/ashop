</div><!-- container // -->
</section>
<!-- ========================= FOOTER ========================= -->
<footer class="section-footer bg-6">
    <div class="container">
        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Subscription
            </h4>

            <form action="<?=base_url('home')?>" method="post">
                <div class="effect1 w-size9">
                    <input class="input s-text7 bg6 w-full p-b-5" type="email" name="email" placeholder="email@example.com" value="<?= set_value('email') ?>">
                    <span class="effect1-line"></span>
                </div>
                    <?= form_error('email', '<small class="text-danger pl-2"><i>', '</i></small>'); ?>

                <div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        Subscribe
                    </button>
                </div>

            </form>
        </div>
        <section class="footer-bottom text-center">
            <p class="s-text8"> Made with &#10084; <br> </p>
            <p class="text-md-center s-text8">
                Copyright &copy <?= date('Y') ?> <br>
                <a href="#" class="s-text8">Hokunine</a>
            </p>

        </section> <!-- //footer-top -->
    </div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->
<script src="<?= base_url('assets/')?>js/myjs.js" type="text/javascript"></script>
<!-- Datatable   -->
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#tabel-order').DataTable();
});
</script> -->

</body>

</html>