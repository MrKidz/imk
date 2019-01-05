<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>IMK | <?php echo $this->session->userdata('bagian');?></title>
    <!-- Jquery JS-->
    <script src="<?php echo base_url().'assets/Admin/vendor/jquery-3.2.1.min.js'?>" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo base_url().'assets/Admin/vendor/bootstrap-4.1/bootstrap.min.css'?>" media="all">
    <link rel="stylesheet" href="<?php echo base_url().'assets/jqueryui/jquery-ui.css'?>" media="all">

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url().'assets/Admin/css/font-face.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/font-awesome-4.7/css/font-awesome.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/font-awesome-5/css/fontawesome-all.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/mdi-font/css/material-design-iconic-font.min.css'?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url().'assets/Admin/vendor/bootstrap-4.1/bootstrap.min.css'?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url().'assets/Admin/vendor/animsition/animsition.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/wow/animate.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/css-hamburgers/hamburgers.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/slick/slick.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/select2/select2.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/perfect-scrollbar/perfect-scrollbar.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/css/pricing.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/css/pricing1.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/jqueryui/jquery-ui.css'?>" rel="stylesheet" media="all">
  <link href="<?php echo base_url().'assets/css/invoice.css';?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/css/whead.css';?>" rel="stylesheet">

    <!-- Main CSS-->
    <link href="<?php echo base_url().'assets/Admin/css/theme.css'?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container" >
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="account-wrap left">
                                    <div class="account-item clearfix js-item-menu float-right">
                                        <div class="image">
                                            <img src="<?php echo base_url().'assets/Admin/images/icon/user.png'?>" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo "Halo, <b>".$this->session->userdata('nama');?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                <a href="<?php echo base_url().'Admin/Logout'?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

                    <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url().'assets/Admin/images/icon/logo2.png'?>" alt="Cool Admin"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li <?php if (isset($head)){if($head == "dashboard"){echo 'class="active"';}} ;?>>
                            <a  href="<?php echo base_url().'Admin'?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <?php if($this->session->userdata('bagian') == "Purchasing"){?>
                        <li <?php if (isset($head)){if($head == "po"){echo 'class="active"';}} ;?>>
                            <a  href="<?php echo base_url().'Admin/PurchasingOrder'?>">
                                <i class="fas fa-chart-bar"></i>Purchasing Order</a>
                        </li>
                        <?php }else if($this->session->userdata('bagian') == "PPIC2"){?>
                            <li <?php if (isset($head)){if($head == "tm"){echo 'class="active has-sub"';}} ;?>>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>TM</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo base_url().'Admin/TMOF'?>">TM OF</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'Admin/TMOFB'?>">TM OFB</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'Admin/TMOL'?>">TM OL</a>
                                </li>
                            </ul>
                        </li>
                        <?php } else if($this->session->userdata('bagian') == "Sales"){?>
                            <li <?php if (isset($head)){if($head == "tm"){echo 'class="active has-sub"';}} ;?>>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Quotation</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo base_url().'Admin/TMOFPenawaran'?>">TM OF Penawaran</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'Admin/TMOFB'?>">TM OFB Penawaran</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'Admin/TMOL'?>">TM OL Penawaran</a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                        <li <?php if (isset($head)){if($head == "data"){echo 'class="active has-sub"';}} ;?>>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Data</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo base_url().'Admin/DataSupplier'?>">Supplier</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'Admin/DataVendor'?>">Vendor</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        