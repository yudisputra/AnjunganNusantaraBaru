<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anjungan Nusantara</title>
    <!--Core CSS-->
    <link rel="stylesheet" id="bulma" href="<?php echo base_url()?>assets/assetsbulma/css/bulma.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assetsbulma/css/core_green.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assetsbulma/js/slick-carousel/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assetsbulma/js/slick-carousel/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assetsbulma/js/ggpopover/ggtooltip.css">
    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assetsbulma/css/icons.min.css">
    <!-- Core JS -->
    <script src="<?php echo base_url()?>assets/assetsbulma/js/core/jquery.min.js"></script>
    
</head>
<body>
<!--Page Loader-->
<div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    <!-- Hero and nav -->
            <div class="navbar-wrapper navbar-sticky">
                <div class="hero-head">

            <!-- Nav -->
            <div class="container">
                <nav class="nav">
                    <div class="container big">
                        <div class="nav-left" style="overflow: visible;">
                            <a class="nav-item" href="#" target="_blank">
                                <img src="<?php echo base_url() ?>#" alt="Anjungan Nusantara">
                            </a>
                            <a href="<?=base_url('Landing')?>" class="nav-item is-tab nav-inner is-not-mobile">Keranjang</a>
                            <a href="" class="nav-item is-tab nav-inner is-not-mobile">Kategori</a>
                        </div>
                        <!-- Responsive toggle -->
                        <span class="nav-toggle">
                                <span></span>
                                <span></span>
                                <span></span>
                        </span>
                        <div class="nav-right nav-menu">
                            <a href="#" class="nav-item is-tab nav-inner is-menu-mobile">Keranjang</a>
                            <a href="#" class="nav-item is-tab nav-inner is-menu-mobile">Kategori</a>
                            <span class="nav-item">
                                <a href="<?php base_url() ?>Login/" class="button button-signup is-bold btn-align light-btn">Masuk</a>
                                <a href="<?php base_url() ?>Daftar/" class="button button-signup is-bold btn-align light-btn">Daftar</a>
                            </span>
                        </div>
                    </div>
                </nav>
            </div>
            <!--/Nav-->

                </div>
            </div>

    <br><br><br>
    <!-- Search Product -->
    <section id="search" class="section is-small">
        <div class="container">            
            <div class="content-wrapper">
                <div class="field">
                    <form>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input is-primary-focus is-large" type="text" placeholder="Cari apa bor...">
                            <span class="icon is-medium is-left">
                                   <i class="sl sl-icon-magnifier"></i>
                            </span>
                       </div>
                    </form>
                  </div>
            </div>
        </div>
    </section>
    <!-- Search Product -->

    <!-- Breadcrumb -->
    

    <!-- Detail section -->
    <section class="section is-small">
        <div class="container">
            <div class="content-wrapper">
                <div class="columns">
                    <!-- Image -->
                    <div class="column is-6">
                        <img class="is-block" src="https://place-hold.it/1600x1064" alt="">
                    </div>
                    <!-- Content -->
                    <div class="column is-6 pt-20 pb-20 mobile-padding-20">
                        <h2 class="title section-subtitle dark-text text-bold is-2">
                            Keripik Tempe Khas Malang
                        </h2>
                        <span class="section-feature-description">
                            <p style="line-height:30px;">Keripik Tempe Khas Kota Malang buatan Anjungan Nusantara</p>       
                        </span>
                        <br>
                        <hr>
                        <table>
                            <tr>
                                <th style="width: 100px; font-size:14px; color:#bdbdbd">HARGA</th>
                                <th style="font-size:20px; color:#f44336">Rp.60.000</th>
                            </tr>
                        </table>
                        <hr>
                        <table>
                            <tr>
                                <th style="width: 100px; font-size:14px; color:#bdbdbd">JUMLAH</th>
                                <th>
                                <div class="control">
                                    <div class="select is-fullwidth">
                                        <select class="is-hovered" name="jumlah">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                </div>
                                </th>
                            </tr>
                        </table>
                        <hr>
                        <a class="button button-cta primary-btn"><i class="fa fa-shopping-cart"></i> Add to chart</a>
                        <a class="button button-cta btn-outlined primary-btn">Beli</a>
                        <hr>
                    </div>
                </div>
                
                <!--Gambar Detail-->

                <div class="columns">
                    <div class="column is-2">
                        <img class="is-block" src="https://place-hold.it/1600x1064" alt="">
                    </div>
                    <div class="column is-2">
                        <img class="is-block" src="https://place-hold.it/1600x1064" alt="">
                    </div>
                    <div class="column is-2">
                        <img class="is-block" src="https://place-hold.it/1600x1064" alt="">
                    </div>
                </div>

                <div class="columns is-vcentered pt-30">
                        <!-- Content -->
                        <div class="column is-12">
                            <div class="navigation-tabs simple-tabs">
                                <div class="tabs">
                                    <ul>
                                        <li class="tab-link is-active" data-tab="tab-1"><a>Deskripsi</a></li>
                                        <li class="tab-link" data-tab="tab-2"><a>Ulasan (0)</a></li>
                                    </ul>
                                </div>
                                <div id="tab-1" class="navtab-content is-active">
                                    <p style="text-align:justify;">
                                    Dari bahan kedelai terbaik, kripik tempe ini dibuat oleh Aneka Keripik Malang, mulai dari bahan dasar kedelai hingga bumbu rempah dipilih melalui Quality Control yang baik untuk mendapatkan kwalitas yang terbaik dari keripik tempe.
                                    Pengolahan keripik tempe dilakukan dengan semi tradisionil dimana dibantu dengan alat alat pendukung serta ditangani oleh para ahli dibidang kripik tempe. Sehat dan Higienis adalah komitmen dari produk Aneka Keripik Malang untuk selalu memberikan hasil yang terbaik bagi konsumen.
                                    </p>
                                    <br>
                                    <p style="text-align:justify">
                                    Keripik Tempe selain tersedia sudah dalam kemasan Plastik bening, juga disediakan keripik tempe dalam bentuk loss atau curah. Untuk memenuhi kebutuhan pasar terutama bagi reseller, grosir atau distributor yang telah memiliki merek atau brandnya sendiri apabila berminat melakukan repacking (kemas ulang) untuk semua produk Aneka Keripik Malang, kami menyediakan dalam bentuk curah. 
                                    Pembelian dalam bentuk loss atau curah telah ditentukan, lihat di “Daftar Harga Grosir Untuk Loss”.
                                    </p>
                                    <br><br>
                                    <p>Varian Rasa Keripik Tempe</p>
                                    <div class="content">
                                        <ul>
                                            <li>Ayam Bakar</li>
                                            <li>Ayam Bawang</li>
                                            <li>Ayam Bawang Pedas</li>
                                            <li>Balado</li>
                                            <li>Barbeque</li>
                                            <li>Jagung Bakar</li>
                                            <li>Jagung Manis</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="tab-2" class="navtab-content">
                                    <div class="control">
                                        <textarea class="textarea is-button" placeholder="Beri Ulasan Pada Produk ini . . . ."></textarea>
                                        <div class="textarea-button">
                                            <button class="button primary-btn btn-align raised">Kirim</button>
                                        </div>
                                    </div>

                                    <div class="mt-60"></div>
                                    <!-- Message -->
                                    <article class="message icon-msg secondary-msg">
                                        <i class="material-icons">person</i>
                                        <div class="message-body">
                                            <h4>Samsul Hadi</h4>
                                            Untuk Produk yang rasa jagung manis apakah masih ada kak ??
                                        </div>
                                    </article>

                                    <div class="mt-60"></div>
                                    <!-- Message -->
                                    <article class="message icon-msg secondary-msg">
                                        <i class="material-icons">person</i>
                                        <div class="message-body">
                                            <h4>Samsul Hadi</h4>
                                            Untuk Produk yang rasa jagung manis apakah masih ada kak ??
                                        </div>
                                    </article>

                                    <div class="mt-60"></div>
                                    <!-- Message -->
                                    <article class="message icon-msg secondary-msg">
                                        <i class="material-icons">person</i>
                                        <div class="message-body">
                                            <h4>Samsul Hadi</h4>
                                            Untuk Produk yang rasa jagung manis apakah masih ada kak ??
                                        </div>
                                    </article>
                                </div>
                                
                            </div>

                        </div>
                </div>
            
        </div>
    </section>
    <!-- /Detail section -->

    <!-- Light footer -->
    <footer class="footer footer-light">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="footer-column">
                        <div class="footer-header">
                            <h3>Product</h3>
                        </div>
                        <ul class="link-list">
                            <li><a href="#">Discover features</a></li>
                            <li><a href="#">CMS integration</a></li>
                            <li><a href="#">Customers</a></li>
                            <li><a href="#">Weekly sessions</a></li>
                            <li><a href="#">Free trials and demo</a></li>
                            <li><a href="#">What's next ?</a></li>
                        </ul>
                    </div>
                </div>
                <div class="column">
                    <div class="footer-column">
                        <div class="footer-header">
                            <h3>Company</h3>
                        </div>
                        <ul class="link-list">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">About security</a></li>
                            <li><a href="#">User guide</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Terms of website use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="column">
                    <div class="footer-column">
                        <div class="footer-header">
                            <h3>Learning</h3>
                        </div>
                        <ul class="link-list">
                            <li><a href="#">Resources</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">API documentation</a></li>
                            <li><a href="#">Admin guide</a></li>
                        </ul>
                    </div>
                </div>
                <div class="column">
                    <div class="footer-column">
                        <div class="footer-logo">
                            <img src="<?php echo base_url()?>assets/assetsbulma/images/logos/bulkit-logo.png" alt="">
                        </div>
                        <div class="footer-header">
                            <nav class="level is-mobile">
                                <div class="level-left level-social">
                                    <a href="#" class="level-item">
                                        <span class="icon"><i class="fa fa-facebook"></i></span>
                                    </a>
                                    <a href="#" class="level-item">
                                        <span class="icon"><i class="fa fa-twitter"></i></span>
                                    </a>
                                    <a href="#" class="level-item">
                                        <span class="icon"><i class="fa fa-linkedin"></i></span>
                                    </a>
                                    <a href="#" class="level-item">
                                        <span class="icon"><i class="fa fa-dribbble"></i></span>
                                    </a>
                                    <a href="#" class="level-item">
                                        <span class="icon"><i class="fa fa-github"></i></span>
                                    </a>
                                </div>
                            </nav>
                        </div>
                        <div class="copyright">
                            <span class="moto dark-text">Designed and coded with <i class="fa fa-heart color-red"></i> by CSS Ninja.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Light footer -->

    
    <!-- Core js -->
    <script src="<?php echo base_url()?>assets/assetsbulma/js/core/modernizr.min.js"></script>
    <!-- Plugins js -->
    <script src="<?php echo base_url()?>assets/assetsbulma/js/slick-carousel/slick.min.js"></script>
    <script src="<?php echo base_url()?>assets/assetsbulma/js/ggpopover/ggtooltip.js"></script>
    <script src="<?php echo base_url()?>assets/assetsbulma/js/scrollreveal/scrollreveal.min.js"></script>
    <!-- Bulkit js -->
    <script src="<?php echo base_url()?>assets/assetsbulma/js/main.js"></script>
    <!-- Page specific JS -->
    <script src="<?php echo base_url()?>assets/assetsbulma/js/pages/landingv1.js"></script>
</body>
</html>