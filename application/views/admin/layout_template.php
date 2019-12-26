<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bulkit - Dashboard</title>
        <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/assetsbulma/images/favicon.png" />
        <!-- Core css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assetsbulma/css/bulma.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assetsbulma/css/dashboard.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/assetsbulma/css/is-awesome.css">
        <!-- Icons -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assetsbulma/css/icons.min.css">
        <!-- Plugins css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assetsbulma/js/ggpopover/ggtooltip.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assetsbulma/js/iziToast/iziToast.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assetsbulma/js/datepicker/datepicker.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assetsbulma/js/wickedpicker/wickedpicker.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assetsbulma/js/chosen/chosen.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assetsbulma/js/jqvmap/jqvmap.min.css">

        

        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    </head>

    <body>
        <!-- Pageloader -->
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>

        <!-- Main sidebar menu -->
        <nav class="main-menu is-dark">
            <div class="main-menu-inner">
                <!-- Side icon menu -->
                <ul>
                    <li class="main-logo">
                        <a href="<?php echo base_url()?>admin"><img src="<?php echo base_url()?>assets/assetsbulma/images/logos/square-green.svg" alt=""></a>
                    </li>
                    <li class="side-icon is-active" data-child-menu="dashboard-menu">
                        <i class="sl sl-icon-speedometer"><a href="dashboard.html"></a></i>
                    </li>
                    <li class="side-icon" data-child-menu="manajemen-akun-menu">
                        <i class="sl sl-icon-people"></i>
                    </li>
                    <li class="side-icon" data-child-menu="manajemen-produk-menu">
                        <i class="sl sl-icon-briefcase"></i>
                    </li>
                    <li class="side-icon" data-child-menu="manajemen-penjualan-menu">
                        <i class="sl sl-icon-graph"></i>
                    </li>
                    <li class="side-icon" data-child-menu="settings-menu">
                        <i class="sl sl-icon-settings"></i>
                    </li>
                </ul>
                <!-- /Side icon menu -->

                <!-- Profile wrapper -->
                <ul class="profile">
                    <li>
                        <!-- Profile avatar -->
                        <a class="profile-trigger" href="javascript:void(0);">
                            <img class="main-menu-avatar" src="https://place-hold.it/250x250" alt="">
                            <span class="dot"></span>
                        </a>
                        <!-- /Profile avatar -->

                        <!-- Profile avatar -->
                        <div class="fab js-hamburger">
                            <!-- Profile page wrapper -->
                            <div class="profile-container">
                                <div class="inner">
                                    <div class="container is-fluid">
                                        <!-- Profile with cover -->
                                        <div id="profile-cover" class="columns">
                                            <div class="cover-overlay"></div>
                                            <div class="column is-10 is-offset-1 heading-wrapper">
                                                <div class="profile-heading">
                                                    <div class="columns">
                                                        <div class="column is-2 has-text-centered">
                                                            <div class="image is-128x128 avatar">
                                                                <div class="avatar-overlay">
                                                                    <i class="fa fa-camera fa-2x"></i>
                                                                </div>
                                                                <img src="https://place-hold.it/250x250" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="column is-4 name">
                                                            <p>
                                                                <span class="title light-text is-bold">Helen Miller</span>
                                                            </p>
                                                            <p class="tagline light-text">Sales Manager @ Acme Inc.</p>
                                                            <div>
                                                                <button class="button dash-btn ripple primary-btn btn-outlined follow rounded width-100">
                                                                    <i class="fa fa-check"></i>Follow
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="column is-2 followers has-text-centered is-hidden-mobile">
                                                            <p class="stat-val">74</p>
                                                            <p class="stat-key">Projects</p>
                                                        </div>
                                                        <div class="column is-2 following has-text-centered is-hidden-mobile">
                                                            <p class="stat-val">179</p>
                                                            <p class="stat-key">Deals</p>
                                                        </div>
                                                        <div class="column is-2 likes has-text-centered is-hidden-mobile">
                                                            <p class="stat-val">963</p>
                                                            <p class="stat-key">Leads</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Profile menu FAB -->
                                            <div class="profile-fab">
                                                <div class="fab-wrapper">
                                                    <button id="show-notifications" class="notifications fab-btn mini ripple" data-toggle="tooltip" data-placement="left" data-title="Notifications">
                                                        <i class="material-icons">notifications</i>
                                                    </button>
                                                    <button id="show-team" class="team fab-btn mini ripple" data-toggle="tooltip" data-placement="top" data-title="Team">
                                                        <i class="material-icons">group</i>
                                                    </button>
                                                    <button id="show-details" class="details fab-btn mini ripple" data-toggle="tooltip" data-placement="top" data-title="Profile">
                                                        <i class="material-icons">subject</i>
                                                    </button>
                                                    <button id="profile-fab-trigger" class="fab-btn pop-fab">
                                                        <span class="profile-menu-wrapper">
                                                            <span class="icon-box-toggle"> 	
                                                                <span class="rotate">
                                                                    <i class="icon-line-top"></i>
                                                                    <i class="icon-line-center"></i>
                                                                    <i class="icon-line-bottom"></i> 
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /Profile menu FAB -->
                                        </div>
                                        <!-- /Profile with cover -->

                                        <!-- Profile Sections -->
                                        <div class="container">
                                            <div class="columns">
                                                <div class="column is-10 is-offset-1">
                                                    <div class="profile-sections-wrapper">
                                                        <!-- Profile details -->
                                                        <div id="profile-details">
                                                            <div class="columns">
                                                                <!-- Details sub view -->
                                                                <div id="profile-view" class="column is-10 is-offset-1">
                                                                    <div class="flex-card is-top light-bordered raised animated preFadeInUp fadeInUp">
                                                                        <div class="edit-button edit-trigger has-text-left">
                                                                            <button class="button btn-dash secondary-btn raised ripple no-lh rounded">Edit profile</button>
                                                                        </div>
                                                                        <!--Profile card -->
                                                                        <div class="card-body">
                                                                            <div class="columns">
                                                                                <div class="column is-6">
                                                                                    <div class="info-section">
                                                                                        <h1 class="info-heading">Personal info</h1>
                                                                                        <div class="info-divider"><span></span></div>
                                                                                        <div class="info-item">
                                                                                            <div class="columns is-gapless">
                                                                                                <div class="column is-5">
                                                                                                    <div class="info-title">
                                                                                                        Full name :
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="column is-7">
                                                                                                    <div class="info-description highlighted">
                                                                                                        Helen Miller
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="info-item">
                                                                                            <div class="columns is-gapless">
                                                                                                <div class="column is-5">
                                                                                                    <div class="info-title">
                                                                                                        Age :
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="column is-7">
                                                                                                    <div class="info-description">
                                                                                                        27 years    
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="info-item">
                                                                                            <div class="columns is-gapless">
                                                                                                <div class="column is-5">
                                                                                                    <div class="info-title">
                                                                                                        Country :
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="column is-7">
                                                                                                    <div class="info-description">
                                                                                                        United States
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="info-section">
                                                                                        <h1 class="info-heading">Contact info</h1>
                                                                                        <div class="info-divider"><span></span></div>
                                                                                        <div class="info-item">
                                                                                            <div class="columns is-gapless">
                                                                                                <div class="column is-5">
                                                                                                    <div class="info-title">
                                                                                                        Email :
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="column is-7">
                                                                                                    <div class="info-description highlighted">
                                                                                                        hmiller@acme.io
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="info-item">
                                                                                            <div class="columns is-gapless">
                                                                                                <div class="column is-5">
                                                                                                    <div class="info-title">
                                                                                                        Mobile :
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="column is-7">
                                                                                                    <div class="info-description">
                                                                                                        +1 556 548 55
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="info-item">
                                                                                            <div class="columns is-gapless">
                                                                                                <div class="column is-5">
                                                                                                    <div class="info-title">
                                                                                                        Office :
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="column is-7">
                                                                                                    <div class="info-description">
                                                                                                        +1 589 654 32
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="column is-6">
                                                                                    <div class="info-section">
                                                                                        <h1 class="info-heading">Company info</h1>
                                                                                        <div class="info-divider"><span></span></div>
                                                                                        <div class="info-item">
                                                                                            <div class="columns is-gapless">
                                                                                                <div class="column is-5">
                                                                                                    <div class="info-title">
                                                                                                        Company :
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="column is-7">
                                                                                                    <div class="info-description highlighted">
                                                                                                        Acme Inc.
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="info-item">
                                                                                            <div class="columns is-gapless">
                                                                                                <div class="column is-5">
                                                                                                    <div class="info-title">
                                                                                                        Department :
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="column is-7">
                                                                                                    <div class="info-description">
                                                                                                        Sales & Marketing
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="info-item">
                                                                                            <div class="columns is-gapless">
                                                                                                <div class="column is-5">
                                                                                                    <div class="info-title">
                                                                                                        Position :
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="column is-7">
                                                                                                    <div class="info-description highlighted">
                                                                                                        Sales Manager
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="info-section">
                                                                                        <h1 class="info-heading">Social</h1>
                                                                                        <div class="info-divider"><span></span></div>
                                                                                        <div class="info-item">
                                                                                            <div class="columns is-gapless">
                                                                                                <div class="column is-5">
                                                                                                    <div class="info-title">
                                                                                                        <i class="fa fa-twitter"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="column is-7">
                                                                                                    <div class="info-description">
                                                                                                        twitter/helenMiller
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="info-item">
                                                                                            <div class="columns is-gapless">
                                                                                                <div class="column is-5">
                                                                                                    <div class="info-title">
                                                                                                        <i class="fa fa-linkedin"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="column is-7">
                                                                                                    <div class="info-description">
                                                                                                        linkedin/helenMiller
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="info-item">
                                                                                            <div class="taglist mt-30">
                                                                                                <span class="tag squared is-outlined is-primary">Sales</span>
                                                                                                <span class="tag squared is-outlined is-info">Marketing</span>
                                                                                                <span class="tag squared is-outlined is-primary">Customers</span>
                                                                                                <span class="tag squared is-outlined is-secondary">Cart</span>
                                                                                                <span class="tag squared is-outlined is-secondary">Checkout</span>
                                                                                                <span class="tag squared is-outlined is-secondary">Automation</span>
                                                                                                <span class="tag squared is-outlined is-info">Emailing</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--Profile card -->
                                                                    </div>
                                                                </div>
                                                                <!-- /Details sub view -->

                                                                <!-- Edit sub view -->
                                                                <div id="edit-view" class="column is-10 is-offset-1 is-hidden">
                                                                    <div class="flex-card is-top light-bordered raised animated preFadeInUp fadeInUp">
                                                                        <div class="edit-button has-text-centered">
                                                                            <h3 class="title">Edit Profile</h3>
                                                                            <div class="cross-container edit-trigger">
                                                                                <span class="top"></span>
                                                                                <span class="bottom"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <!-- Edit form -->
                                                                            <form>
                                                                                <div class="columns">
                                                                                    <div class="column is-6">
                                                                                        <div class="control-material is-secondary has-icon">    
                                                                                            <input class="material-input" type="text" required>
                                                                                            <i class="material-icons">person_outline</i>
                                                                                            <span class="material-highlight"></span>
                                                                                            <span class="bar"></span>
                                                                                            <label>First name</label>
                                                                                        </div>

                                                                                        <div class="control-material is-secondary has-icon">    
                                                                                            <input class="material-input" type="text" required>
                                                                                            <i class="material-icons">mail_outline</i>
                                                                                            <span class="material-highlight"></span>
                                                                                            <span class="bar"></span>
                                                                                            <label>Email</label>
                                                                                        </div>
                                                                                        <div class="control-material is-secondary has-icon">    
                                                                                            <input class="material-input" type="text" required>
                                                                                            <i class="material-icons">smartphone</i>
                                                                                            <span class="material-highlight"></span>
                                                                                            <span class="bar"></span>
                                                                                            <label>Mobile</label>
                                                                                        </div>


                                                                                        <div class="control-material is-secondary has-icon">    
                                                                                            <input class="material-input" type="text" required>
                                                                                            <i class="material-icons">settings</i>
                                                                                            <span class="material-highlight"></span>
                                                                                            <span class="bar"></span>
                                                                                            <label>Department</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="column is-6">
                                                                                        <div class="control-material is-secondary has-icon">    
                                                                                            <input class="material-input" type="text" required>
                                                                                            <i class="material-icons">person</i>
                                                                                            <span class="material-highlight"></span>
                                                                                            <span class="bar"></span>
                                                                                            <label>Last name</label>
                                                                                        </div>
                                                                                        <div class="control-material is-secondary has-icon">    
                                                                                            <input class="material-input" type="text" required>
                                                                                            <i class="material-icons">domain</i>
                                                                                            <span class="material-highlight"></span>
                                                                                            <span class="bar"></span>
                                                                                            <label>Company</label>
                                                                                        </div>
                                                                                        <div class="control-material is-secondary has-icon">    
                                                                                            <input class="material-input" type="text" required>
                                                                                            <i class="material-icons">phone</i>
                                                                                            <span class="material-highlight"></span>
                                                                                            <span class="bar"></span>
                                                                                            <label>Office</label>
                                                                                        </div>
                                                                                        <div class="control-material is-secondary has-icon">    
                                                                                            <input class="material-input" type="text" required>
                                                                                            <i class="material-icons">room</i>
                                                                                            <span class="material-highlight"></span>
                                                                                            <span class="bar"></span>
                                                                                            <label>Position</label>
                                                                                        </div>

                                                                                        <div class="has-text-centered mt-30">
                                                                                            <button class="button btn-dash secondary-btn is-raised is-fullwidth rounded ripple no-lh" data-ripple-color="">Save changes</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                            <!-- /Edit form -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /Edit sub view -->
                                                            </div>
                                                        </div>
                                                        <!-- /Profile details -->

                                                        <!-- Profile team -->
                                                        <div id="profile-team" class="is-hidden">
                                                            <!-- Team header -->
                                                            <div class="columns">
                                                                <div class="column is-10 is-offset-1">
                                                                    <div class="flex-card is-top light-bordered raised animated preFadeInUp fadeInUp">
                                                                        <div class="card-body">
                                                                            <div class="columns is-vcentered">
                                                                                <div class="column is-6">
                                                                                    <div class="team-logo">
                                                                                        <img src="<?php echo base_url()?>assets/assetsbulma/images/logos/partners/acme.svg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="column is-6">
                                                                                    <div class="team-info">
                                                                                        <div class="team-number">
                                                                                            <span>15</span> Team members
                                                                                        </div>
                                                                                        <div class="team-avatars">
                                                                                            <img src="https://place-hold.it/250x250" alt="">
                                                                                            <img src="https://place-hold.it/250x250" alt="">
                                                                                            <img src="https://place-hold.it/250x250" alt="">
                                                                                            <img src="https://place-hold.it/250x250" alt="">
                                                                                            <img src="https://place-hold.it/250x250" alt="">
                                                                                            <img src="https://place-hold.it/250x250" alt="">
                                                                                            <span>+9</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /Team header -->

                                                            <!-- Team List -->
                                                            <div class="columns is-vcentered is-multiline animated preFadeInUp fadeInUp">
                                                                <!-- Team member -->
                                                                <div class="column is-4">
                                                                    <div class="flex-card team-card light-bordered light-raised">
                                                                        <div class="card-heading padding-10">
                                                                            <span class="tag is-success">Online</span>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="avatar">
                                                                                <img src="https://place-hold.it/250x250" alt="">
                                                                            </div>
                                                                            <div class="user-id">
                                                                                <div class="name">Anthony Briggs</div>
                                                                                <div class="position">Sales Manager</div>
                                                                                <div class="location"><i class="sl sl-icon-globe"></i> Stockholm</div>
                                                                            </div>
                                                                            <div class="user-description">
                                                                                Anthony is a specialist of online sales and abandoned cart recovery process
                                                                            </div>
                                                                            <div class="card-action has-text-centered">
                                                                                <button class="button btn-dash rounded accent-btn is-raised is-fullwidth ripple no-lh">Profile</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Team member -->
                                                                <div class="column is-4">
                                                                    <div class="flex-card team-card light-bordered light-raised">
                                                                        <div class="card-heading padding-10">
                                                                            <span class="tag">Offline</span>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="avatar">
                                                                                <img src="https://place-hold.it/250x250" alt="">
                                                                            </div>
                                                                            <div class="user-id">
                                                                                <div class="name">Arthur Baxter</div>
                                                                                <div class="position">Head of Sales </div>
                                                                                <div class="location"><i class="sl sl-icon-globe"></i> London</div>
                                                                            </div>
                                                                            <div class="user-description">
                                                                                Arthur is the big boss of Europe Sales at Acme and an Online sales specialist
                                                                            </div>
                                                                            <div class="card-action has-text-centered">
                                                                                <button class="button btn-dash rounded accent-btn is-raised is-fullwidth ripple no-lh">Profile</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Team member -->
                                                                <div class="column is-4">
                                                                    <div class="flex-card team-card light-bordered light-raised">
                                                                        <div class="card-heading padding-10">
                                                                            <span class="tag is-success">Online</span>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="avatar">
                                                                                <img src="https://place-hold.it/250x250" alt="">
                                                                            </div>
                                                                            <div class="user-id">
                                                                                <div class="name">Marjory Cambell</div>
                                                                                <div class="position">Emailing Manager</div>
                                                                                <div class="location"><i class="sl sl-icon-globe"></i> New York</div>
                                                                            </div>
                                                                            <div class="user-description">
                                                                                Marjory handles the thousands of emails we send to our subscribers
                                                                            </div>
                                                                            <div class="card-action has-text-centered">
                                                                                <button class="button btn-dash rounded accent-btn is-raised is-fullwidth ripple no-lh">Profile</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Team member -->
                                                                <div class="column is-4">
                                                                    <div class="flex-card team-card light-bordered light-raised">
                                                                        <div class="card-heading padding-10">
                                                                            <span class="tag is-success">Online</span>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="avatar">
                                                                                <img src="https://place-hold.it/250x250" alt="">
                                                                            </div>
                                                                            <div class="user-id">
                                                                                <div class="name">Elisabeth Lopez</div>
                                                                                <div class="position">Sales Manager</div>
                                                                                <div class="location"><i class="sl sl-icon-globe"></i> Mexico</div>
                                                                            </div>
                                                                            <div class="user-description">
                                                                                Elisabeth is a specialist of online sales and abandoned cart recovery process
                                                                            </div>
                                                                            <div class="card-action has-text-centered">
                                                                                <button class="button btn-dash rounded accent-btn is-raised is-fullwidth ripple no-lh">Profile</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Team member -->
                                                                <div class="column is-4">
                                                                    <div class="flex-card team-card light-bordered light-raised">
                                                                        <div class="card-heading padding-10">
                                                                            <span class="tag is-warning">Busy</span>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="avatar">
                                                                                <img src="https://place-hold.it/250x250" alt="">
                                                                            </div>
                                                                            <div class="user-id">
                                                                                <div class="name">Kevin Smith</div>
                                                                                <div class="position">Shipping Manager</div>
                                                                                <div class="location"><i class="sl sl-icon-globe"></i> Chicago</div>
                                                                            </div>
                                                                            <div class="user-description">
                                                                                Kevin handles all the shipping process from the warehouse to the customers
                                                                            </div>
                                                                            <div class="card-action has-text-centered">
                                                                                <button class="button btn-dash rounded accent-btn is-raised is-fullwidth ripple no-lh">Profile</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Team member -->
                                                                <div class="column is-4">
                                                                    <div class="flex-card team-card light-bordered light-raised">
                                                                        <div class="card-heading padding-10">
                                                                            <span class="tag">Offline</span>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="avatar">
                                                                                <img src="https://place-hold.it/250x250" alt="">
                                                                            </div>
                                                                            <div class="user-id">
                                                                                <div class="name">Marc Walters</div>
                                                                                <div class="position">Product Designer</div>
                                                                                <div class="location"><i class="sl sl-icon-globe"></i> New York</div>
                                                                            </div>
                                                                            <div class="user-description">
                                                                                Marc is from the product design team with solid project management skills
                                                                            </div>
                                                                            <div class="card-action has-text-centered">
                                                                                <button class="button btn-dash rounded accent-btn is-raised is-fullwidth ripple no-lh">Profile</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /Team List -->
                                                        </div>
                                                        <!-- /Profile team -->

                                                        <!-- Profile notifications -->
                                                        <div id="profile-notifications" class="is-hidden">
                                                            <div class="columns">
                                                                <div class="column is-10 is-offset-1">
                                                                    <div class="flex-card is-top light-bordered raised animated preFadeInUp fadeInUp">
                                                                        <div class="title is-3 padding-20">Notifications <span class="b-badge is-accent">6 New</span></div>
                                                                        <div class="card-body">
                                                                            <ol class="notifications-center">
                                                                                <!-- Notification item -->
                                                                                <li>
                                                                                    <div class="icon is-hidden-mobile">
                                                                                        <i class="im im-icon-Heart-2"></i>
                                                                                    </div>
                                                                                    <div class="description">
                                                                                        <div class="timestamp">30 minutes ago</div>
                                                                                        <b>5 users</b> liked your <b>publication</b> on the company's public blog
                                                                                    </div>
                                                                                    <div class="controls is-hidden-mobile">
                                                                                        <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                                <!-- Notification item -->
                                                                                <li>
                                                                                    <div class="icon is-hidden-mobile">
                                                                                        <img src="https://place-hold.it/250x250" alt="">
                                                                                    </div>
                                                                                    <div class="description">
                                                                                        <div class="timestamp">2 hours ago</div>
                                                                                        <b>Marc Walters</b> commented on a <b>task</b>.
                                                                                    </div>
                                                                                    <div class="controls is-hidden-mobile">
                                                                                        <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                                <!-- Notification item -->
                                                                                <li>
                                                                                    <div class="icon is-hidden-mobile">
                                                                                        <img src="https://place-hold.it/250x250" alt="">
                                                                                    </div>
                                                                                    <div class="description">
                                                                                        <div class="timestamp">5 hours ago</div>
                                                                                        <b>3 new bugs</b> were reported by <b>Alex Walsh</b>, in the <b>Analytics App</b> project.
                                                                                    </div>
                                                                                    <div class="controls is-hidden-mobile">
                                                                                        <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                                <!-- Notification item -->
                                                                                <li>
                                                                                    <div class="icon is-hidden-mobile">
                                                                                        <i class="im im-icon-Add"></i>
                                                                                    </div>
                                                                                    <div class="description">
                                                                                        <div class="timestamp">5 hours ago</div>
                                                                                        <b>8 new tasks</b> were added in the <b>Social marketing</b> project.
                                                                                    </div>
                                                                                    <div class="controls is-hidden-mobile">
                                                                                        <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                                <!-- Notification item -->
                                                                                <li>
                                                                                    <div class="icon is-hidden-mobile">
                                                                                        <img src="https://place-hold.it/250x250" alt="">
                                                                                    </div>
                                                                                    <div class="description">
                                                                                        <div class="timestamp">Yesterday, 09:31am</div>
                                                                                        <b>Marjory Cambell</b> joined the <b>Analytics App</b> project.
                                                                                    </div>
                                                                                    <div class="controls is-hidden-mobile">
                                                                                        <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                                <!-- Notification item -->
                                                                                <li>
                                                                                    <div class="icon is-hidden-mobile">
                                                                                        <i class="im im-icon-Yes"></i>
                                                                                    </div>
                                                                                    <div class="description">
                                                                                        <div class="timestamp">Yesterday, 08:42am</div>
                                                                                        <b>3 tasks</b> were approved in the <b>Social marketing</b> project.
                                                                                    </div>
                                                                                    <div class="controls is-hidden-mobile">
                                                                                        <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                                <!-- Notification item -->
                                                                                <li class="is-old">
                                                                                    <div class="icon is-hidden-mobile">
                                                                                        <img src="https://place-hold.it/250x250" alt="">
                                                                                    </div>
                                                                                    <div class="description">
                                                                                        <div class="timestamp">Monday, 07:57pm</div>
                                                                                        <b>Anthony Briggs</b> joined the <b>Analytics App</b> project.
                                                                                    </div>
                                                                                    <div class="controls is-hidden-mobile">
                                                                                        <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                                <!-- Notification item -->
                                                                                <li class="is-old">
                                                                                    <div class="icon is-hidden-mobile">
                                                                                        <img src="https://place-hold.it/250x250" alt="">
                                                                                    </div>
                                                                                    <div class="description">
                                                                                        <div class="timestamp">oct 23, 11:02am</div>
                                                                                        <b>Marc Walters</b> commented on a <b>task</b> assigned to you in the <b>Social marketing</b> project.
                                                                                    </div>
                                                                                    <div class="controls is-hidden-mobile">
                                                                                        <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                                <!-- Notification item -->
                                                                                <li class="is-old">
                                                                                    <div class="icon is-hidden-mobile">
                                                                                        <img src="https://place-hold.it/250x250" alt="">
                                                                                    </div>
                                                                                    <div class="description">
                                                                                        <div class="timestamp">oct 22, 2:12pm</div>
                                                                                        <b>Dan Baxter</b> sent you an <b>email</b> with <b>3 attachments</b>.
                                                                                    </div>
                                                                                    <div class="controls is-hidden-mobile">
                                                                                        <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ol>
                                                                            <!-- Load more -->
                                                                            <div class="has-text-centered mt-40">
                                                                                <button class="button btn-dash is-raised accent-btn rounded ripple no-lh">Load more</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /Profile notifications -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Profile Sections -->
                                    </div>
                                </div>
                            </div>
                            <!-- Profile page wrapper -->
                            <div class="fab__ripple"></div>
                            <div class="hamburger"></div>
                        </div>
                        <!-- Profile avatar -->
                    </li>  
                </ul>
                <!-- /Profile wrapper -->
            </div>
        </nav>
        <!-- /Main sidebar menu -->

        <!-- Child push sidebar menu -->
        <nav class="child-menu">
            <div class="child-menu-inner">
                <!-- Child menu header -->
                <ul>
                    <li class="child-header">
                        <div class="sidebar-title">Navigation</div>
                        <a id="close-child-menu" href="#" class="menu-wrapper">	
                            <span class="icon-box-toggle ef-4"> 	
                                <span class="rotate">
                                    <i class="icon-line-top">  	 </i>
                                    <i class="icon-line-center">  </i>
                                    <i class="icon-line-bottom">  </i> 
                                </span>
                            </span>
                        </a>
                    </li>
                </ul>
                <!-- /Child menu header -->

                <!-- Sidebar menu 1 -->
                <ul id="dashboard-menu" class="sidebar-menu is-active animated preFadeInRIght fadeInRight">
                    <li class=""><a class="parent-link" href="<?php echo base_url()?>admin"><span class="material-icons">dashboard</span>Dashboard</a></li>
                </ul>
                <!-- /Sidebar menu 1 -->

                <!-- Sidebar menu 2 -->
                <ul id="manajemen-akun-menu" class="sidebar-menu animated preFadeInRIght fadeInRight">
                    <li class="have-children active"><a class="parent-link" href="#"><span class="material-icons">person</span>Manajemen Akun</a>
                        <ul style="display: block;">
                            <li><a href="<?php echo base_url() ?>admin/ma_pembeli">Akun Pembeli</a></li>
                            <li><a href="<?php echo base_url() ?>admin/ma_penjual">Akun Penjual</a></li>
                            <li><a href="javascript:void(0);">Akun Admin</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /Sidebar menu 2 -->

                <!-- Sidebar menu 3 -->
                <ul id="manajemen-produk-menu" class="sidebar-menu animated preFadeInRIght fadeInRight">
                    <li class="have-children active"><a class="parent-link" href="#"><span class="material-icons">group</span>Manajemen Produk</a>
                        <ul style="display: block;">
                            <li><a href="<?php echo base_url() ?>admin/mpr_kategoridansubkategori">Kategori dan Subkategori</a></li>
                            <li><a href="<?php echo base_url() ?>admin/mpr_daftarukm">Daftar UKM</a></li>
                            <li><a href="<?php echo base_url() ?>admin/mpr_daftarproduk">Daftar Produk</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /Sidebar menu 3 -->

                <!-- Sidebar menu 4 -->
                <ul id="manajemen-penjualan-menu" class="sidebar-menu animated preFadeInRIght fadeInRight">
                    <li class="have-children active"><a class="parent-link" href="#"><span class="material-icons">grid_on</span>Manajemen Penjualan</a>
                        <ul style="display: block;">
                            <li><a href="<?php echo base_url() ?>admin/mpj_daftarbank">Daftar Bank</a></li>
                            <li><a href="<?php echo base_url() ?>admin/mpj_daftarpesanan">Daftar Pesanan</a></li>
                            <li><a href="<?php echo base_url() ?>admin/mpj_daftargrafikpenjualan">Daftar Grafik Penjualan</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /Sidebar menu 4 -->

                <!-- Sidebar menu 5 -->
                <ul id="settings-menu" class="sidebar-menu animated preFadeInRIght fadeInRight">
                    <li class="have-children"><a class="parent-link" href="#"><span class="material-icons">settings</span>Global settings</a>
                        <ul>
                            <li><a href="javascript:void(0);">Preferences <span class="sl sl-icon-lock warning-text ml-10"></span></a></li>
                            <li><a href="javascript:void(0);">Change password <span class="sl sl-icon-lock warning-text ml-10"></span></a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /Sidebar menu 5 -->
            </div>
        </nav>
        <!-- /Child push sidebar menu -->

        <!-- Top Navbar -->
        <nav class="nav dashboard-nav has-shadow">
            <div class="container is-fluid">
                <!-- Nav left -->
                <div class="nav-left">
                    <!-- Logout button -->
                    <div class="nav-item nav-icon logout-button">
                        <i class="sl sl-icon-power"></i>
                    </div>
                    <!-- /Logout button -->
                    
                    <!-- Reader mode switch -->
                    <div class="nav-item reader-switch is-hidden-desktop is-hidden-tablet">
                        <div class="field">
                            <input id="reader-mode-switch" type="checkbox" name="reader-mode-switch" class="switch is-outlined is-primary is-small">
                            <label id="reader-mode-toggle" for="reader-mode-switch"></label>
                        </div>
                    </div>
                    <!-- Reader mode switch -->

                    <!-- Quick search (hidden on mobile) -->
                    <div class="nav-item">
                        <div class="field is-hidden-mobile">
                            <div class="searchbox control has-icons-left">
                                <input class="input is-secondary-focus" type="text" placeholder="Quick search">
                                <span class="icon is-left">
                                    <i class="sl sl-icon-magnifier"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /Quick search -->

                    <!-- Global search (visible on mobile only) -->
                    <div class="nav-item nav-icon search-icon modal-trigger is-hidden-desktop is-hidden-tablet" data-modal="search-modal">
                        <i class="sl sl-icon-magnifier"></i>
                    </div>
                    <!-- /Global search -->

                    <!-- Right sidebar trigger (visible on mobile only)  -->
                    <div class="nav-item nav-icon chat-button is-hidden-desktop is-hidden-tablet" data-show="quickview" data-target="main-quickview">
                        <i class="im im-icon-Speach-Bubble11"></i>
                    </div>
                    <!-- /Right sidebar trigger -->
                </div>
                <!-- /Nav left -->

                <!-- Nav right -->
                <div class="nav-right nav-menu">
                    <!-- Notifications dropdown (hidden on mobile) -->
                    <div class="nav-item drop-pop is-centered nav-icon">
                        <a href="#" class="nav-item nav-icon nav-inner is-active">
                            <i class="sl sl-icon-bell"><span class="new-circle gelatine"></span></i>
                        </a>
                        <div class="drop-wrapper notifications-drop">
                            <div class="drop-inner has-arrow">
                                <div class="notifications-header has-text-centered">
                                    <h3>Notifications</h3>
                                </div>
                                <div class="notifications-body">
                                    <ul class="notifications-list">
                                        <li>
                                            <i class="sl sl-icon-heart"></i>
                                            <div class="notification-content">
                                                <img src="https://place-hold.it/250x250" alt="">
                                                <div class="notification-text">
                                                    <div class="text">
                                                        <b>Henry</b> liked your <b>comment</b>.
                                                    </div>
                                                    <div class="timestamp">
                                                        23 minutes ago
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <i class="sl sl-icon-check"></i>
                                            <div class="notification-content">
                                                <img src="https://place-hold.it/250x250" alt="">
                                                <div class="notification-text">
                                                    <div class="text">
                                                        <b>Marjory</b> followed you.
                                                    </div>
                                                    <div class="timestamp">
                                                        1 hour ago
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <i class="sl sl-icon-heart"></i>
                                            <div class="notification-content">
                                                <img src="https://place-hold.it/250x250" alt="">
                                                <div class="notification-text">
                                                    <div class="text">
                                                        <b>Marc</b> commented one of your tasks.
                                                    </div>
                                                    <div class="timestamp">
                                                        Yesterday
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Notifications dropdown -->

                    <!-- Messages dropdown (hidden on mobile) -->
                    <div class="nav-item drop-pop is-centered nav-icon">
                        <a href="#" class="nav-item nav-icon nav-inner is-active">
                            <i class="sl sl-icon-envelope-open"><span class="new-circle gelatine"></span></i>
                        </a>
                        <div class="drop-wrapper emails-drop">
                            <div class="drop-inner has-arrow">
                                <div class="emails-header has-text-centered">
                                    <h3>Messages</h3>
                                </div>
                                <div class="emails-body">
                                    <ul class="emails-list">
                                        <li>
                                            <img src="https://place-hold.it/250x250" alt="">
                                            <div class="email-content">

                                                <div class="email-text">
                                                    <div class="text">
                                                        Hello, after our last meetings, it seems that some goals were...
                                                    </div>
                                                    <div class="timestamp">
                                                        Nov 09, 14:18
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="fake-avatar is-secondary">SB</span>
                                            <div class="email-content">
                                                <div class="email-text">
                                                    <div class="text is-read">
                                                        We did not receive the order yet, can you please check if it has...
                                                    </div>
                                                    <div class="timestamp">
                                                        Nov 05, 13:31
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="fake-avatar is-primary">JK</span>
                                            <div class="email-content">
                                                <div class="email-text">
                                                    <div class="text is-read">
                                                        My boss was very grateful that you found a solution during the week as...
                                                    </div>
                                                    <div class="timestamp">
                                                        Nov 05, 09:47
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Messages dropdown -->

                    <!-- Global search (desktop and tablet only) -->
                    <div class="nav-item nav-icon search-icon modal-trigger" data-modal="search-modal">
                        <i class="sl sl-icon-magnifier"></i>
                    </div>
                    <!-- /Global search -->

                    <!-- Right sidebar trigger (desktop and tablet only) -->
                    <div class="nav-item nav-icon chat-button" data-show="quickview" data-target="main-quickview">
                        <i class="im im-icon-Speach-Bubble11"></i>
                    </div>
                    <!-- /Right sidebar trigger -->
                </div>
                <!-- /Nav right -->
            </div>
        </nav>
        <!-- /Top Navbar -->

        <!-- Main dashboard container -->
        <div id="dashboard-wrapper" class="columns">
            <div class="column"></div>
            <div class="content column is-11">

                <!-- Breadcrumbs -->
                <nav class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Dashboard</li>
                    </ul>
                </nav>
                <!-- /Breadcrumbs -->

                <!-- Dashboard Wrapper -->
                <div class="dashboard-wrapper">
                    <div class="columns">           
                        <div class="column">
                            <!-- Main content -->
                            <div id="main-dashboard" class="section-wrapper">
                                <!-- Content -->

                                    <?php $this->load->view($content); ?>
                                        
                                <!-- /Content -->
                                
                            </div>
                            <!-- /Main content -->
                        </div>
                        <!-- /Main view -->
                    </div>
                </div>
                <!-- /Dashboard Wrapper -->
            </div>
            <div class="column"></div>
        </div>
        <!-- Main dashboard container -->

        <!-- /Main -->

        <!-- Right sidebar quickview -->
        <div id="main-quickview" class="quickview">
            <!-- Quickview header -->
            <header class="quickview-header is-secondary">
                <p class="title">Messages</p>
                <div class="cross-container" data-dismiss="quickview">
                    <span class="top"></span>
                    <span class="bottom"></span>
                </div>
            </header>
            <!-- /Quickview header -->

            <!-- Quickview body -->
            <div class="quickview-body">
                <div class="quickview-block">
                    <!-- Quickview tabs -->
                    <div class="navigation-tabs translated-tabs simple-tabs">
                        <div class="tabs is-fullwidth">
                            <ul>
                                <li class="is-active" data-tab="user-directory"><a><i class="sl sl-icon-people"></i></a></li>
                                <li data-tab="reminders"><a><i class="sl sl-icon-clock"></i></a></li>
                                <li data-tab="quickview-settings"><a><i class="sl sl-icon-settings"></i></a></li>
                            </ul>
                        </div>
                        <!-- User directory tab -->
                        <div id="user-directory" class="navtab-content is-active">
                            <div class="panel-title">
                                <h3>USER DIRECTORY</h3>
                                <i class="material-icons ml-auto">more_vert</i>
                            </div>
                            
                            <!-- Seach field -->
                            <div class="field">
                                <div class="searchbox control has-icons-left">
                                    <input class="input is-secondary-focus" type="text" placeholder="Search users">
                                    <span class="icon is-left">
                                        <i class="sl sl-icon-magnifier"></i>
                                    </span>
                                </div>
                            </div>
                            <!-- /Seach field -->
                            
                            <!-- User list -->
                            <ol class="user-list">
                                <!-- User -->
                                <li class="quickview-trigger" data-quickview="chat-quickview">
                                    <div class="status-dot"></div>
                                    <img src="https://place-hold.it/250x250" alt="">
                                    <div class="user-status">
                                        <div class="name">Anthony Briggs</div>
                                        <div class="status">Offline</div>
                                    </div>
                                </li>
                                <!-- User -->
                                <li>
                                    <div class="status-dot is-online"></div>
                                    <img src="https://place-hold.it/250x250" alt="">
                                    <div class="user-status">
                                        <div class="name">Benedict Shaeffer</div>
                                        <div class="status">Online</div>
                                    </div>
                                </li>
                                <!-- User -->
                                <li>
                                    <div class="status-dot is-busy"></div>
                                    <img src="https://place-hold.it/250x250" alt="">
                                    <div class="user-status">
                                        <div class="name">Nicole Ferrier</div>
                                        <div class="status">Busy</div>
                                    </div>
                                </li>
                                <!-- User -->
                                <li>
                                    <div class="status-dot"></div>
                                    <img src="https://place-hold.it/250x250" alt="">
                                    <div class="user-status">
                                        <div class="name">Henry Rodstein</div>
                                        <div class="status">Offline</div>
                                    </div>
                                </li>
                                <!-- User -->
                                <li>
                                    <div class="status-dot is-online"></div>
                                    <img src="https://place-hold.it/250x250" alt="">
                                    <div class="user-status">
                                        <div class="name">Marjory Cambell</div>
                                        <div class="status">Online</div>
                                    </div>
                                </li>
                                <!-- User -->
                                <li>
                                    <div class="status-dot is-online"></div>
                                    <img src="https://place-hold.it/250x250" alt="">
                                    <div class="user-status">
                                        <div class="name">Stella Roberts</div>
                                        <div class="status">Online</div>
                                    </div>
                                </li>
                                <!-- User -->
                                <li>
                                    <div class="status-dot is-busy"></div>
                                    <img src="https://place-hold.it/250x250" alt="">
                                    <div class="user-status">
                                        <div class="name">Sayid Jabrane</div>
                                        <div class="status">Busy</div>
                                    </div>
                                </li>
                                <!-- User -->
                                <li class="mb-50">
                                    <div class="status-dot"></div>
                                    <img src="https://place-hold.it/250x250" alt="">
                                    <div class="user-status">
                                        <div class="name">Sally Mitchells</div>
                                        <div class="status">Offline</div>
                                    </div>
                                </li>
                            </ol>
                            <!-- /User list -->
                        </div>
                        <!-- /User directory tab -->
                        
                        <!-- Reminders tab -->
                        <div id="reminders" class="navtab-content">
                            <div class="panel-title">
                                <h3>REMINDERS</h3>
                                <i class="material-icons modal-trigger ml-auto" data-toggle="tooltip" data-placement="left" data-title="Add reminder" data-modal="add-reminder-modal">add</i>
                            </div>
                            <!-- Reminders list -->
                            <ol class="reminders-list">
                                <!-- Reminders -->
                                <li>
                                    <!-- Reminder -->
                                    <div class="reminder is-medium">
                                        <div class="info">
                                            <i class="fa fa-circle"></i>
                                            <span><i class="im im-icon-Calendar-4"></i></span>
                                            <span class="date"> oct 29, 18:30</span>
                                        </div>
                                        <div class="reminder-content">
                                            Lorem ipsum dolor sit amet, duo choro putant ex, inani appetere usu ei. Id mel sumo aliquam. Aperiri admodum no mea, et mea quem tation, nam illud saepe ut.
                                        </div>
                                        <div class="reminder-controls">
                                            <i class="sl sl-icon-settings" data-toggle="tooltip" data-placement="top" data-title="Edit"></i>
                                            <i class="sl sl-icon-trash" data-toggle="tooltip" data-placement="top" data-title="Delete"></i>
                                        </div>
                                    </div>
                                    <!-- Reminder -->
                                    <div class="reminder is-high">
                                        <div class="info">
                                            <i class="fa fa-circle"></i>
                                            <span><i class="im im-icon-Calendar-4"></i></span>
                                            <span class="date"> oct 18, 11:00</span>
                                        </div>
                                        <div class="reminder-content">
                                            Lorem ipsum dolor sit amet, duo choro putant ex, inani appetere usu ei. Id mel sumo aliquam. Aperiri admodum no mea, et mea quem tation, nam illud saepe ut.
                                        </div>
                                        <div class="reminder-controls">
                                            <i class="sl sl-icon-settings" data-toggle="tooltip" data-placement="top" data-title="Edit"></i>
                                            <i class="sl sl-icon-trash" data-toggle="tooltip" data-placement="top" data-title="Delete"></i>
                                        </div>
                                    </div>
                                    <!-- Reminder -->
                                    <div class="reminder is-low">
                                        <div class="info">
                                            <i class="fa fa-circle"></i>
                                            <span><i class="im im-icon-Calendar-4"></i></span>
                                            <span class="date"> oct 14, 09:00</span>
                                        </div>
                                        <div class="reminder-content">
                                            Lorem ipsum dolor sit amet, duo choro putant ex, inani appetere usu ei. Id mel sumo aliquam. Aperiri admodum no mea, et mea quem tation, nam illud saepe ut.
                                        </div>
                                        <div class="reminder-controls">
                                            <i class="sl sl-icon-settings" data-toggle="tooltip" data-placement="top" data-title="Edit"></i>
                                            <i class="sl sl-icon-trash" data-toggle="tooltip" data-placement="top" data-title="Delete"></i>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                            <!-- /Reminders list -->
                        </div>
                        <!-- /Reminders tab -->
                        
                        <!-- Settings tab -->
                        <div id="quickview-settings" class="navtab-content">
                            <!-- Header -->
                            <div class="panel-title">
                                <h3>SETTINGS</h3>
                                <i class="material-icons ml-auto">more_vert</i>
                            </div>
                            <!-- Header -->
                            
                            <!-- Settings -->
                            <ol class="settings-list">
                                <!-- Busy mode toggle -->
                                <li>
                                    <div class="setting-header">
                                        <div class="setting-title">Busy mode</div>
                                        <div class="setting-control">
                                            <div class="field">
                                                <input id="busySwitch" type="checkbox" name="busySwitch" class="switch is-outlined is-warning">
                                                <label for="busySwitch"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-description">
                                        Activate to set your status to busy. While you are busy, other users can't send you direct messages.
                                    </div>
                                </li>
                                <!-- /Busy mode toggle -->
                                
                                <!-- Setting -->
                                <li>
                                    <div class="setting-header">
                                        <div class="setting-title">Notifications</div>
                                        <div class="setting-control">
                                            <div class="field">
                                                <input id="notificationsSwitch" type="checkbox" name="notificationsSwitch" checked class="switch is-outlined is-secondary">
                                                <label for="notificationsSwitch"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-description">
                                        Activate to enabla activity notifications. You can find more notifications settings in the general settings.
                                    </div>
                                </li>
                                <!-- Setting -->
                                <li>
                                    <div class="setting-header">
                                        <div class="setting-title">Push Notifications</div>
                                        <div class="setting-control">
                                            <div class="field">
                                                <input id="notificationsPushSwitch" type="checkbox" name="notificationsPushSwitch" checked class="switch is-outlined is-primary">
                                                <label for="notificationsPushSwitch"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-description">
                                        Activate to enable push notifications. You can find more notifications settings in the general settings.
                                    </div>
                                </li>
                            </ol>
                            <!-- /Settings -->
                        </div>
                        <!-- /Settings tab -->
                    </div>
                    <!-- /Quickview tabs -->
                </div>
            </div>
            <!-- /Quickview body -->

            <!-- Quickview footer -->
            <footer class="quickview-footer"></footer>
            <!-- /Quickview footer -->
        </div>

        <!-- Chat quickview -->
        <div id="chat-quickview" class="quickview custom-quickview chat-quickview">
            <header class="quickview-header is-secondary">
                <p class="title">Anthony Briggs <span class="tag is-outlined is-light">2 new</span></p>
                <div class="cross-container quickview-close" data-quickview="chat-quickview">
                    <span class="top"></span>
                    <span class="bottom"></span>
                </div>
            </header>
            
            <!-- Quickview message body -->
            <div class="quickview-body">
                <div id="message-container" class="message-container">
                    <div class="divider">
                        <span class="before-divider"></span>
                        <div class="children">Yesterday</div>
                        <span class="after-divider"></span>
                    </div>
                    <div class="chat-message to">
                        <div class="bubble-wrapper">
                            <div class="timestamp">02:48 pm</div>
                            <div class="chat-bubble">
                                Hello Anthony, did you finish the Hackman project's report ?
                            </div>
                        </div>
                        <img src="https://place-hold.it/250x250" alt="">
                    </div>
                    <div class="chat-message to">
                        <div class="bubble-wrapper">
                            <div class="timestamp">02:48 pm</div>
                            <div class="chat-bubble">
                                I need it for some paper work.
                            </div>
                        </div>
                        <img src="https://place-hold.it/250x250" alt="">
                    </div>
                    <div class="chat-message from">
                        <img src="https://place-hold.it/250x250" alt="">
                        <div class="bubble-wrapper">
                            <div class="timestamp">02:49 pm</div>
                            <div class="chat-bubble">
                                The Hackman report ? Iam almost done with it
                            </div>
                        </div>
                    </div>
                    <div class="divider mt-40">
                        <span class="before-divider"></span>
                        <div class="children">Today</div>
                        <span class="after-divider"></span>
                    </div>
                    <div class="chat-message from">
                        <img src="https://place-hold.it/250x250" alt="">
                        <div class="bubble-wrapper">
                            <div class="timestamp">11:37 pm</div>
                            <div class="chat-bubble">
                                Did you reveive the report in your inbox ? I sent it to you this morning
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Quickview message body -->
            
            <!-- Message input -->
            <footer class="quickview-footer">
                <div class="message-input">
                    <textarea id="chat-input" class="" rows="1" placeholder="Send a message ..."></textarea>
                    <div class="message-options">
                        <div class="emoji-button"></div>
                        <div class="attach-button"></div>
                    </div>
                </div>
            </footer>
            <!-- /Message input -->
        </div>
        <!-- /Chat quickview -->

        <!-- Search Modal -->
        <div id="search-modal" class="modal modal-lg modal-hero">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="control-material has-icon is-light">      
                    <input class="material-input" type="text" placeholder="Search..." required autofocus>
                    <i class="material-icons">search</i>
                    <span class="material-highlight"></span>
                    <span class="bar"></span>
                </div>
            </div>
            <button class="modal-close is-large is-hidden" aria-label="close"></button>
        </div>
        <!-- Search modal -->

        <!-- Reminder Modal -->
        <div id="add-reminder-modal" class="modal modal-sm modal-hero">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="flex-card simple-shadow">
                    <div class="card-body">
                        <div class="content">
                            <h2 class="has-text-centered dark-text pb-20">New Reminder</h2>
                            <!-- New reminder form -->
                            <form>
                                <div class="field mb-10">
                                    <label class="label dark-text font-w-500">Remind me before</label>
                                    <div class="control has-icons-right">
                                        <input data-toggle="datepicker" type="text" class="input is-medium" placeholder="select a date ...">
                                        <span class="icon is-right is-medium">
                                            <i class="im im-icon-Calendar-4"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field mb-10">
                                    <div class="control has-icons-left">
                                        <input type="text" class="input timepicker-24 is-medium" placeholder="set time">
                                        <span class="icon is-left is-medium">
                                            <i class="sl sl-icon-clock"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field mb-10">
                                    <label class="label dark-text font-w-500">Priority</label>
                                    <div class="control">
                                        <select class="chosen-select" data-placeholder="Select a priority">
                                            <option label="Priority"></option>
                                            <option>Low</option>
                                            <option>Medium</option>
                                            <option>High</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field mb-10">
                                    <label class="label dark-text font-w-500">Remind me what ?</label>
                                    <div class="control">
                                        <textarea class="textarea is-grow is-secondary-focus" rows="5" placeholder="Type something relevant ..."></textarea>
                                    </div>
                                </div>
                                <div class="has-text-right mt-30">
                                    <button type="submit" class="button btn-dash secondary-btn no-lh rounded is-fullwidth is-raised ripple">Create reminder</button>
                                </div>
                            </form>
                            <!-- /New reminder form -->
                        </div>
                    </div>  
                </div>
            </div>
            <button class="modal-close is-large is-hidden" aria-label="close"></button>
        </div>
        <!-- Reminder Modal -->

        <!-- Core js -->
        <script src="<?php echo base_url()?>assets/assetsbulma/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/assetsbulma/js/core/modernizr.min.js"></script>
        <!-- Plugins js -->
        <script src="<?php echo base_url()?>assets/assetsbulma/js/chartjs/Chart.bundle.min.js"></script>
        <script src="<?php echo base_url()?>assets/assetsbulma/js/peity/peity.min.js"></script>
        <script src="<?php echo base_url()?>assets/assetsbulma/js/ggpopover/ggtooltip.js"></script>
        <script src="<?php echo base_url()?>assets/assetsbulma/js/iziToast/iziToast.min.js"></script>
        <script src="<?php echo base_url()?>assets/assetsbulma/js/datepicker/datepicker.min.js"></script>
        <script src="<?php echo base_url()?>assets/assetsbulma/js/wickedpicker/wickedpicker.min.js"></script>
        <script src="<?php echo base_url()?>assets/assetsbulma/js/chosen/chosen.jquery.min.js"></script>
        <!-- Vmap -->
        <script src="<?php echo base_url()?>assets/assetsbulma/js/jqvmap/jquery.vmap.js"></script>
        <script src="<?php echo base_url()?>assets/assetsbulma/js/jqvmap/maps/jquery.vmap.usa.js"></script>
        <script src="<?php echo base_url()?>assets/assetsbulma/js/jqvmap/data/jquery.vmap.sampledata.js"></script>
        <!-- Bulkit js -->
        <script src="<?php echo base_url()?>assets/assetsbulma/js/common.js"></script>
        <!-- Page specific js -->
        <script src="<?php echo base_url()?>assets/assetsbulma/js/pages/dashboard.js"></script>
        <script src="<?php echo base_url()?>assets/assetsbulma/js/pages/components-modals.js"></script>
        <script src="<?php echo base_url()?>assets/assetsbulma/js/pages/components-quickview.js"></script>
        
        <script src="<?php echo base_url()?>assets/assetsbulma/js/app.js"></script>
        <script src="<?php echo base_url()?>assets/assetsbulma/js/sample-data.js"></script>
        <script src="<?php echo base_url()?>assets/assetsbulma/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url()?>assets/assetsbulma/js/dataTables.bulma.js"></script>
        <script>
            $(document).ready(function() {
                $('#nofeatures').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "drawCallback": function( settings ) {
                        if(!$("#nofeatures").parent().hasClass("table-is-responsive")){
                            $("#nofeatures").wrap('<div class="table-is-responsive"></div>');
                        }
                    }
                });   

                $('#fullfeatures').DataTable({
                    "drawCallback": function( settings ) {
                        if(!$("#fullfeatures").parent().hasClass("table-is-responsive")){
                            $("#fullfeatures").wrap('<div class="table-is-responsive"></div>');
                        }
                    }
                });

                var addrowTable = $('#addrows').DataTable({
                    "drawCallback": function( settings ) {
                        if(!$("#addrows").parent().hasClass("table-is-responsive")){
                            $("#addrows").wrap('<div class="table-is-responsive"></div>');
                        }
                    }
                });

                $('#addRowBtn').on( 'click', function () {	   
                    var name = $('#name').val(), address = $('#address').val(), zip = $('#zip').val(), 
                        city = $('#city').val(), country = $( "#country option:selected" ).text();

                    var data = [name, address, zip, city, country];

                    addrowTable.row.add(data).draw( false );

                    $(':input')
                    .removeAttr('checked')
                    .removeAttr('selected')
                    .not(':button')
                    .val('');
                }); 
            });
        </script>
    </body>
</html>