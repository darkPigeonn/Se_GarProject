<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    <title>SIA Seminari</title>
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/sbadmin/css/styles.css'?>">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
    
    
    <div class="container-fluid">
        
        <div class="card mb-4">
            <div class="card-body">
                <h1>DATA KEUANGAN SEMINARI ST. VINCENTIUS A PAULO GARUM</h1>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                DATA SISWA
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>TAGIHAN BULANAN</th>
                                <th>JUMLAH TAGIHAN</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Atanasius</td>
                                <td>September</td>
                                <td>Rp 3.000.000</td>
                                <td>LUNAS</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ivanoel</td>
                                <td>Agustus</td>
                                <td>Rp 3.500.000</td>
                                <td>LUNAS</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Albertus</td>
                                <td>Agustus</td>
                                <td>Rp 4.000.000</td>
                                <td>LUNAS</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bayu</td>
                                <td>Oktober</td>
                                <td>Rp 4.500.000</td>
                                <td>LUNAS</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
