<!DOCTYPE html>
<html>

<!-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sistem Informasi Akademik Seminari Garum</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/induko/bootstrap/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="<?php echo base_url().'assets/induko/fonts/font-awesome.min.css'?>">
</head> -->

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">SEMINARI GARUM</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href='<?= base_url();?>userController'">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href='<?= base_url();?>userController/viewProfil'">Profil</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Keuangan</a>
                        <div class="dropdown-menu">
                            <a href='<?= base_url();?>userController/viewUangAsrama'" class="dropdown-item">Uang Asrama</a>
                            <a href='<?= base_url();?>userController/viewUangSaku'"  class="dropdown-item">Uang Saku</a>
                        </div>
                    </li>

                    
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href='<?= base_url();?>admin'">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="<?php echo base_url('assets/induko/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/induko/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="<?php echo base_url('assets/induko/js/agency.js')?>"></script>
</body>
</html>
