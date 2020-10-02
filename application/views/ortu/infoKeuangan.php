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
        <div class="container"><a class="navbar-brand" href="#page-top">LAPORAN KEUANGAN SISWA SEMINARI GARUM</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href='<?= base_url();?>admin'">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
   
     <div class="card">
        
        <div class="card-body">
            <div id="table" class="table-editable">   
                <li><h5>NAMA SISWA  :</h5></li>
                <li><h5>NO SISWA   :</h5></li>
                <table id="dt-bordered" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th class="th-sm">PERIODE</th>
                            <th class="th-sm">JUMLAH TAGIHAN</th>
                            <th class="th-sm">STATUS PEMBAYARAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Agustus</td>
                            <td>Rp 3.000.000</td>
                            <td>LUNAS</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>September</td>
                            <td>Rp 3.000.000</td>
                            <td>LUNAS</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url ('assets/sbadmin/js/scripts.js')?>"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url ('assets/sbadmin/demo/datatables-demo.js')?>"></script>
    </body>
</html>
