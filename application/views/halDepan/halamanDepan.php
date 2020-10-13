<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sistem Informasi Akademik Seminari Garum</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/induko/bootstrap/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="<?php echo base_url().'assets/induko/fonts/font-awesome.min.css'?>">
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">SEMINARI GARUM</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js
                        -scroll-trigger" href="#">Beranda</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#tentang">Tentang</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">Hubungi Kami</a></li>
                    <li class="nav-item" ><a href="" class="nav-link" data-toggle="modal" data-target="#modalLoginForm">Login</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>

   <header class="masthead" style="background-image : linear-gradient(rgba(0,0,0,.40), rgba(0,0,0,.40)), url(<?php echo base_url('assets/adminBaru/img/sgar-1.jpg')?>);">
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading text-uppercase"><span>SELAMAT DATANG</span></div>
                <h2><span>Sistem Informasi Akademik Seminari Garum</span></h2>
                <h5>Seminari Menengah  St. Vincentius A Paulo</h5>
                <h5>Jl. Merdeka Timur 4-6 Garum, Blitar</h5>
              <a class="btn btn-link btn-circle" role="button" href="#tentang"><i class="fa fa-angle-double-down animated"></i></a></div>
           </div>
       </div>
    </header>

    
    <section id="tentang">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">Tentang Kami</h2>
                    <h3 class="text-muted section-subheading">Masih Kosong</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-group timeline">
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo base_url ('assets/induko/img/about/1.jpg')?>"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>kosong</h4>
                                    <h4 class="subheading">kosong</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">kosong</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact" style="background-image:url(<?php echo base_url('assets/induko/img/map-image.png')?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Hubungi Kami</h2>
                    <h3 class="section-subheading text-muted">kosong</h3>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" id="form3" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Username</label>
                    </div>
                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="defaultForm-pass" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Password</label>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <a class="small" href="password.html">Lupa Password?</a>
                    <a class="btn btn-primary" href= '<?= base_url();?>admin/halut'">Login</a>
                    <a class="btn btn-primary" href= '<?= base_url();?>admin/infoKeuangan'">Login Ortu</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Seminari Garum</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    

    <script src="<?php echo base_url('assets/induko/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/induko/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="<?php echo base_url('assets/induko/js/agency.js')?>"></script>
</body>

</html>