 <!DOCTYPE html>
 <html>

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
<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand">SEMINARI GARUM</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" ><a class="nav-link" href='<?= base_url();?>admin/index'">Log Out</a></li> 
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="card-header">DATA SISWA</div>
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="..." alt="Card image cap">
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <p class="text-muted">Nama : </p>
                            <p class="text-muted">Angkatan : </p>
                            <p class="text-muted">Paroki : </p>
                            <p class="text-muted">Tahun Masuk : </p>
                        </div>
                    </div>

                </div> 
                

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        DATA KEUANGAN
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>TANGGAL</th>
                                        <th>JUMLAH PEMBAYARAN</th>
                                            <tr>
                                                <td>UANG SAKU</td>
                                                <td>SPP</td>
                                            </tr>
                                        <th>KETERANGAN</th>   
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>10 September 2020</a></td>
                                        <td>September</td>
                                        <td>Rp 3.000.000</td>
                                        <td>BELUM LUNAS</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-primary bg-info border rounded border-dark" type="button" style="background-color: rgb(249,253,251)">RINCIAN UANG SAKU</button>
                            <button class="btn btn-primary bg-info border rounded border-dark" type="button" style="background-color: rgb(249,253,251)">RINCIAN SPP</button>
                        </div>
                    </div>
                </div>

<table class="table table-bordered">
  <th colspan="3">Outer Table</th>
  <tr>
    <td>This is row one, column 1</td>
    <td>This is row one, column 2</td>
    <td>
     <table class="table table-bordered">
       <th colspan="3">Inner Table</th>
       <tr>
         <td>This is row one, column 1</td>
         <td>This is row one, column 2</td>
         <td>This is row one, column 3</td>
       </tr>
     </table>
    </td>
  </tr>
</table>

                <div class="card-footer">
                  <small class="text-muted">SEMINARI MENENGAH ST. VINCENTIUS A PAULO</small>
              </div> 
          </div>
      </div> 
  </header>

  <script src="<?php echo base_url('assets/induko/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/induko/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="<?php echo base_url('assets/induko/js/agency.js')?>"></script>
</body>
</html> 