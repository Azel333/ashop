<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url('assets/')?>css/bootstrap.css" rel="stylesheet" type="text/css" />
<!-- Custom Theme files -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('include/assets/css/signup.css') ?>">
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>DAFTAR</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="" method="post">
                    <input type="text" name="nama" id="nama" class="text" placeholder="Nama Lengkap" true=""
                                    required="" value="<?= set_value('nama') ?>">
                                <?= form_error('name', '<small class="text-danger pl-2"><i>', '</i></small>'); ?>
                    <input type="email" name="email" class="text email" placeholder="Masukan Email" true=""
                                    value="<?= set_value('email') ?>" required>
                                <?= form_error('email', '<small class="text-danger pl-2"><i>', '</i></small>'); ?>
                    <input type="password" name="password" class="text" placeholder="Masukan Password" true=""
                                        required="">
                                    <?= form_error('password', '<small class="text-danger pl-2"><i>', '</i></small>'); ?>
                    <input type="password" name="passwordc" class="text w3lpass" placeholder="Konfirmasi Password" true=""
                                        required="">
                                    <?= form_error('passwordc', '<small class="text-danger pl-2"><i>', '</i></small>'); ?>
                                    <div class="form-group wthree-text">

                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="male">
                                    <span class="form-check-label"> Laki-Laki </span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="female">
                                    <span class="form-check-label "> Perempuan</span>
                                </label>
                                <div><?= form_error('gender', '<small class="text-danger pl-2"><i>', '</i></small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Masukan Alamat" class="form-control" id="alamat" name="alamat" rows="3" ture></textarea>
                            </div>
                    <input type="submit" value="DAFTAR">
                </form>
                <p>Sudah punya akun? <a href="<?php echo base_url() ?>"> Masuk!</a></p>
            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>Copyright &copy <?= date('Y') ?> | Hokunine</p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
</body>
<!-- General JS Scripts -->
    <script src="<?= base_url('include/')?>node_modules/jquery.min.js"></script>
    <script src="<?= base_url('include/')?>node_modules/popper.min.js"></script>
    <script src="<?= base_url('include/')?>node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap4 files-->
    <script src="<?= base_url('assets/')?>js/script.js" type="text/javascript"></script>
</html>