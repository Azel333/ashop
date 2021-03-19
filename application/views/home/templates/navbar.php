<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message')?>"></div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('include/assets/css/header.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('include/assets/css/util.min.css') ?>">
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">

        <div class="wrap_header">
            <!-- Logo -->
            <a href="<?php echo base_url() ?>" class="logo">
                <img src="<?php echo base_url('assets/images/logos/logo.png')?>" alt="CI_Shop">
            </a>

            <div class="col-lg-3-24 col-sm-3">
                <div class="category-wrap dropdown py-1">
                    <button type="button" class="btn btn-light bg-white dropdown-toggle" data-toggle="dropdown"> Kategori</button>
                    <div class="dropdown-menu">
                        <?php foreach ($category as $cat): ?>
                        <a class="dropdown-item" href="<?= $cat['id_categories'] ?>"><?= $cat['name_categories'] ?></a>
                        <?php endforeach ?>


                    </div>
                </div>
            </div>

            <form action="<?=base_url('s')?>" method="post" class="py-1">
                <div class="search-product pos-relative bo4 of-hidden">
                    <input class="input s-text7 size6 p-l-23 p-r-50" type="text" name="cari" value="<?php echo $this->input->get('search_str'); ?>" id="search-product" placeholder="Search Products...">

                    <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4 filter_button">
                        <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </form>

            <div class="header-icons">
                <div class="widgets-wrap float-right row no-gutters py-1">
                    <?php if ( $user !== NULL){?>
                    <div class="col-auto">
                        <div class="widget-header dropdown">
                            <a href="#" data-toggle="dropdown" data-offset="20,10">
                                <div class="icontext">
                                    <div class="icon-wrap"><img src="<?php echo base_url() ?>assets/images/icons/icon-header-01.png" class="header-icon1" alt="ICON"></div>
                                    <div class="text-wrap text-dark">
                                        Akun
                                        <i class="fa fa-caret-down"></i>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <div class="pl-1">
                                    <a class="dropdown-item" href="<?=base_url('profil')?>">
                                        <div class="text-danger font-weight-light">Profil</div>
                                    </a>
                                    <a class="dropdown-item" href="<?=base_url('history_order')?>">
                                        <div class="text-danger font-weight-light">Riwayat Belanja</div>
                                    </a>
                                </div>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="<?=base_url('logout')?>"><span class="text-danger">
                                        Keluar
                                    </span></a>
                            </div>
                            <!--  dropdown-menu .// -->
                        </div>
                        <!-- widget-header .// -->
                    </div>
                    <?php } else{?>
                    <div class="col-auto">
                        <div class="widget-header dropdown">
                            <a href="#" data-toggle="dropdown" data-offset="20,10">
                                <div class="icontext">
                                    <div class="icon-wrap"><img src="<?php echo base_url() ?>assets/images/icons/icon-header-01.png" class="header-icon1" alt="ICON"></div>
                                    <div class="text-wrap text-dark">
                                        Masuk <i class="fa fa-caret-down"></i>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <form class="px-4 py-3" method="POST" action="<?= base_url('home/login')?>">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Masuk</button>
                                </form>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="<?=base_url('signup')?>"><span class="text-danger">Tidak
                                        punya akun?
                                        Daftar</span></a>
                            </div>
                            <!--  dropdown-menu .// -->
                        </div>
                        <!-- widget-header .// -->
                    </div>
                    <!-- col.// -->
                    <?php } ?>
                </div>

                <a href="<?= base_url('keranjang');?>">
                            <div class="icontext">
                                <div class="icon-wrap"><img src="<?php echo base_url() ?>assets/images/icons/icon-header-02.png" class="header-icon1" alt="ICON">
                                </div>
                                <!-- <div class="text-wrap badge text-dark"> -->
                                    <span class="header-icons-noti">
                                    <?php
                                    if ($user !== NULL) {
                                        # code...
                                        $this->db->where('id_user',$user['id_user']);
                                        $this->db->from('cart');
                                        $cart = $this->db->count_all_results();

                                        if ( $user['email']==true){?>
                                            <span id="cart1" class="small round badge">
                                            <?= $cart; ?></span>
                                        <?php }
                                    } ?>


                                <!-- </div> -->
                            </span>
                            </div>
                        </a>
            </div>
        </div>
    </div>
<!-- header-main .// -->
</header>
<!-- section-header.// -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y-sm" style="min-height:430px">
    <div class="container">
