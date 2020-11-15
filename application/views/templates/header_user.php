<!DOCTYPE html>
<html>



<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand">SEMINARI GARUM</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item active"><a class="nav-link js-scroll-trigger" href='<?= base_url();?>userController'">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href='<?= base_url();?>userController/viewProfil'">Profil</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdownMenuLink"  aria-hashpopup="true" aria-expanded="false">Keuangan</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href='<?= base_url();?>userController/viewUangAsrama'">Uang Asrama</a>
                            <a class="dropdown-item" href='<?= base_url();?>userController/viewUangSaku'"  >Uang Saku</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href='<?= base_url();?>admin'">Log Out</a></li>
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
