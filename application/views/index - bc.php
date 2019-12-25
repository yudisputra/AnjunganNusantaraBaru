<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anjungan Nusantara</title>
    <!--Core CSS-->
    <link rel="stylesheet" id="bulma" href="<?php echo base_url()?>assets/css/bulma.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/core_green.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/js/slick-carousel/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/js/slick-carousel/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/js/ggpopover/ggtooltip.css">
    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/icons.min.css">
    <!-- Core JS -->
    <script src="<?php echo base_url()?>assets/js/core/jquery.min.js"></script>
    
</head>
<body>

    <!--Page Loader-->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    <!-- Hero and nav-->
    <div class="hero is-theme-primary">
        <div class="navbar-wrapper navbar-fade navbar-light">
            <div class="hero-head">

                <!-- Nav -->
                <div class="container">
                    <nav class="nav">
                        <div class="container big">
                            <div class="nav-left">
                                <a class="nav-item" href="#" style="color: #fff">
                                    Anjungan Nusantara
                                </a>
                                <a href="#" class="nav-item is-tab nav-inner is-not-mobile">
                                    Keranjang
                                </a>
                                <a href="#" class="nav-item is-tab nav-inner is-not-mobile">
                                    Kategori
                                </a>
                            </div>
                            <!-- Responsive toggle -->
                            <span class="nav-toggle">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <div class="nav-right nav-menu">
                                <a href="#" class="nav-item is-tab nav-inner is-menu-mobile">
                                    Keranjang
                                </a>
                                <a href="#" class="nav-item is-tab nav-inner is-menu-mobile">
                                    Kategori
                                </a>
                                <span class="nav-item">
                                    <a id="signup-btn" href="#" class="button button-signup btn-outlined is-bold btn-align light-btn">
                                        Masuk
                                    </a>
                                    <a id="signup-btn" href="#" class="button button-signup is-bold btn-align light-btn">
                                        Daftar
                                    </a>
                                </span>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- /Nav -->

            </div>
        </div>

        <!-- Hero image -->
        <div id="main-hero" class="hero-body is-clean">
            <div class="container has-text-centered">
                <div class="columns is-vcentered">
                    <div class="column is-5 caption-column has-text-left">
                        <h1 class="clean-title light-text">
                            Anjungan <br>Nusantara.
                        </h1>
                        <div class="subtitle is-5 no-margin">
                            Belanja souvenir murah dan banyak diskon hanya di Anjungan Nusantara.
                        </div>
                        <div class="cta-wrapper has-text-left">
                            <a href="#product" class="button button-cta btn-align btn-outlined is-bold light-btn">
                                Get Started
                            </a>
                        </div>
                    </div>
                    <div class="column is-9 is-offset-1">
                        <figure class="image is-3by2">
                            <img class="clean-hero-mockup mt-80 z-index-2" src="assets/images/illustrations/mockups/landing1/macbook-app.png" alt="">
                        </figure>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Hero image -->
    </div>
    <!-- /Hero and nav -->

    <!-- Search Product -->
    <section id="search" class="section is-medium">
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

    <!-- Product -->
    <section id="product" class="section is-medium is-skewed-sm">
        <div class="container is-reverse-skewed-sm">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered">
                <div class="clean-bg-symbol"><i class="fa fa-gg"></i></div>
                <div>
                    <h2 class="clean-section-title">Kategori Produk.</h2>
                    <h3 class="subtitle is-5 pt-10 pb-10">
                        Kategori Produk yang ada pada Anjungan Nusantara sebagai berikut.
                    </h3>
                </div>
            </div>

            <div class="content-wrapper">
                <!-- Icon boxes -->
                <div class="columns is-vcentered">
                    <div class="column is-5 is-offset-1 has-text-centered">
                        <div class="columns is-vcentered has-text-centered is-multiline">
                            <!-- Icon box -->
                            <div class="column is-6">
                                <div class="flex-card icon-card light-bordered hover-inset padding-20">
                                    <img src="assets/images/logo/frame-with-photo.svg" alt="">
                                    <div class="icon-card-text is-clean mt-10">
                                        Souvenir
                                    </div>
                                </div>
                            </div>
                            <!-- Icon box -->
                            <div class="column is-6">
                                <div class="flex-card icon-card light-bordered hover-inset padding-20">
                                    <img src="assets/images/logo/fast-food.svg" alt="">
                                    <div class="icon-card-text is-clean mt-10">
                                        Makanan & Oleh-oleh
                                    </div>
                                </div>
                            </div>
                            <!-- Icon box -->
                            <div class="column is-6">
                                <div class="flex-card icon-card light-bordered hover-inset padding-20">
                                    <img src="assets/images/logo/shirt.svg" alt="">
                                    <div class="icon-card-text is-clean mt-10">
                                        Pakaian
                                    </div>
                                </div>
                            </div>
                            <!-- Icon box -->
                            <div class="column is-6">
                                <div class="flex-card icon-card light-bordered hover-inset padding-20">
                                    <img src="assets/images/logo/electronics.svg" alt="">
                                    <div class="icon-card-text is-clean mt-10">
                                        Furniture
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature text -->
                    <div class="column is-5 is-offset-1">
                        <div class="content padding-20">
                            <h2 class="feature-headline is-clean">Satu Aplikasi untuk semua kebutuhanmu</h2>
                            <p class="no-margin-bottom pt-5 pb-5">Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire incorrupte. </p>
                            <p class="no-margin-bottom pt-5 pb-5">Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire incorrupte. Vis mutat altera percipit ad, ipsum prompta ius eu. Sanctus appellantur vim ea. Dolorem delicata vis te, aperiam nostrum ut per.</p>
                            <div class="pt-10 pb-10">
                                <a href="#" class="button button-cta btn-align raised primary-btn">
                                    Lebih Lengkap
                                </a>
                            </div> 
                        </div>
                    </div>
                </div>
                <!-- Icon boxes -->
            </div>
        </div>
    </section>
    <!-- /Product -->

    <!-- Paling Banyak Dicari -->
    <section id="banyak" class="section is-medium">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper">
                <div>
                    <h3 class="clean-title" style="font-size: 40px;">Paling Banyak Dicari</h3>
                    <h3 class="subtitle is-5 pt-10 pb-10">
                        Produk yang paling banyak dicari.
                    </h3>
                </div>
            </div>
        <!-- Demo section -->
        <div class="columns is-vcentered">
            <!-- Card -->
            <div class="column is-4">
                <div class="card ressource-card">
                    <div class="card-image">
                        <figure class="image is-4by3 zoomIn">
                            <img src="https://place-hold.it/400x300" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                <p class="subtitle is-6">10 rb produk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Card -->

            <!-- Card -->
            <div class="column is-4">
                <div class="card ressource-card">
                    <div class="card-image">
                        <figure class="image is-4by3 zoomIn">
                            <img src="https://place-hold.it/400x300" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <a href="#" class="color-primary">Telenan Kayu</a>
                                <p class="subtitle is-6">5rb produk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Card -->

            <!-- Card -->
            <div class="column is-4">
                <div class="card ressource-card">
                    <div class="card-image">

                        <figure class="image is-4by3 zoomIn">
                            <img src="https://place-hold.it/400x300" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <a href="#" class="color-primary">Kopi Khas Malang</a>
                                <p class="subtitle is-6">3rb Produk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Card -->

        </div>
    </div>
    </section>
    <!--Paling Banyak Dicari-->

    <!-- Product -->
    <section id="product" class="section is-medium">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper">
                <div>
                    <h3 class="clean-title" style="font-size: 40px;">Product Terbaru.</h3>
                    <h3 class="subtitle is-5 pt-10 pb-10">
                        Product yang kami tawarkan.
                    </h3>
                </div>
            </div>
            <div class="navigation-tabs animated-tabs simple-tabs">
                <div class="tabs">
                    <ul>
                        <li class="is-active" data-tab="tab-e1"><a>Rekomendasi</a></li>
                        <li data-tab="tab-e2"><a>Souvenir</a></li>
                        <li data-tab="tab-e3"><a>Makanan</a></li>
                        <li data-tab="tab-e4"><a>Pakaian</a></li>
                        <li data-tab="tab-e5"><a>Furniture</a></li>
                    </ul>
                </div>
                <div id="tab-e1" class="navtab-content is-active">
                    <!-- Card -->
                    <div class="columns">
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Card -->
                    <!-- Card -->
                    <div class="columns">
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Card -->
                </div>
                <div id="tab-e2" class="navtab-content">
                <!-- Card -->
                    <div class="columns">
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Card -->
                </div>
                <div id="tab-e3" class="navtab-content">
                <!-- Card -->
                    <div class="columns">
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="card ressource-card">
                                <div class="card-image">
                                    <figure class="image is-4by3 zoomIn">
                                        <img src="https://place-hold.it/400x300" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                            <p class="subtitle is-6">Rp. 60.000</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Card -->
                </div>
                <div id="tab-e4" class="navtab-content">
                    <!-- Card -->
                        <div class="columns">
                            <div class="column is-3">
                                <div class="card ressource-card">
                                    <div class="card-image">
                                        <figure class="image is-4by3 zoomIn">
                                            <img src="https://place-hold.it/400x300" alt="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="media-content">
                                                <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                                <p class="subtitle is-6">Rp. 60.000</p>
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-3">
                                <div class="card ressource-card">
                                    <div class="card-image">
                                        <figure class="image is-4by3 zoomIn">
                                            <img src="https://place-hold.it/400x300" alt="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="media-content">
                                                <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                                <p class="subtitle is-6">Rp. 60.000</p>
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-3">
                                <div class="card ressource-card">
                                    <div class="card-image">
                                        <figure class="image is-4by3 zoomIn">
                                            <img src="https://place-hold.it/400x300" alt="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="media-content">
                                                <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                                <p class="subtitle is-6">Rp. 60.000</p>
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-3">
                                <div class="card ressource-card">
                                    <div class="card-image">
                                        <figure class="image is-4by3 zoomIn">
                                            <img src="https://place-hold.it/400x300" alt="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="media-content">
                                                <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                                <p class="subtitle is-6">Rp. 60.000</p>
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Card -->
                </div>
                <div id="tab-e5" class="navtab-content">
                    <!-- Card -->
                        <div class="columns">
                            <div class="column is-3">
                                <div class="card ressource-card">
                                    <div class="card-image">
                                        <figure class="image is-4by3 zoomIn">
                                            <img src="https://place-hold.it/400x300" alt="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="media-content">
                                                <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                                <p class="subtitle is-6">Rp. 60.000</p>
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-3">
                                <div class="card ressource-card">
                                    <div class="card-image">
                                        <figure class="image is-4by3 zoomIn">
                                            <img src="https://place-hold.it/400x300" alt="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="media-content">
                                                <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                                <p class="subtitle is-6">Rp. 60.000</p>
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-3">
                                <div class="card ressource-card">
                                    <div class="card-image">
                                        <figure class="image is-4by3 zoomIn">
                                            <img src="https://place-hold.it/400x300" alt="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="media-content">
                                                <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                                <p class="subtitle is-6">Rp. 60.000</p>
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-3">
                                <div class="card ressource-card">
                                    <div class="card-image">
                                        <figure class="image is-4by3 zoomIn">
                                            <img src="https://place-hold.it/400x300" alt="">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="media-content">
                                                <a href="#" class="color-primary">Kripik Tempe Asli Malang</a>
                                                <p class="subtitle is-6">Rp. 60.000</p>
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Card -->
                </div>
            </div>
    </div>
    </section>
    <!--Product-->

    <!-- Kategori Sub -->
    <section id="product" class="section is-medium">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper">
                <div>
                    <h3 class="clean-title" style="font-size: 30px;">Kategori.</h3>
                    <h3 class="subtitle is-5 pt-10 pb-10">
                        Sub Kategori untuk mempermudahkan kalian mencari produk
                    </h3>
                </div>
            </div>

            <div class="columns is-vcentered pt-30">
                <!-- Demo section -->
                <div class="column is-12">
                    <table class="table is-bordered">
                        <tbody>
                            <tr>
                                <td>Souvenir Kayu</td>
                                <td>Gelas / Mug</td>
                                <td>Kipas</td>
                                <td>Camilan</td>
                                <td>Camilan Kripik</td>
                            </tr>
                            <tr>
                                <td>Minuman Kopi</td>
                                <td>Minuman Herbal</td>
                                <td>Minuman Segar</td>
                                <td>Oleh-oleh Khas Malang</td>
                                <td>Peralatan Makanan</td>
                            </tr>
                            <tr>
                                <td>Peralatan Dapur</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /Striped table -->

    </div>
    </section>
    <!-- Kategori Sub -->

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
                            <img src="assets/images/logos/bulkit-logo.png" alt="">
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
    <script src="assets/js/core/modernizr.min.js"></script>
    <!-- Plugins js -->
    <script src="assets/js/slick-carousel/slick.min.js"></script>
    <script src="assets/js/ggpopover/ggtooltip.js"></script>
    <script src="assets/js/scrollreveal/scrollreveal.min.js"></script>
    <!-- Bulkit js -->
    <script src="assets/js/main.js"></script>
    <!-- Page specific JS -->
    <script src="assets/js/pages/landingv1.js"></script>
</body>
</html>