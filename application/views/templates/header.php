<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SIA SEMINARI</title>
    <link href="<?php echo base_url (). 'assets/sbadmin/css/styles.css'?>" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body style="background :linear-gradient(rgba(0,0,0,0,0.5), rgba(0,0,00.5));background-image: url();background-size: 20px; background-repeat: no-repeat; background-position: center;position: relative;" >

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">SIA SEMINARI</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav" >
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">  
                     <a class="nav-link" href= '<?= base_url();?>admin/halut'">Home</a>
                     <a class="nav-link" href= '<?= base_url();?>admin/laporan'">Laporan</a>     
                     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Data
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href='<?= base_url();?>admin/viewDataSeminaris'">Data Seminaris</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Modal</a>
                        </nav>
                    </div>
                    <a class="nav-link" href= '<?= base_url();?>admin'">Log Out</a>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">