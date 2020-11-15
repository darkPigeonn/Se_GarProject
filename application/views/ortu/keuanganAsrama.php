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
<body>
 <div class="container">
    <h2>LAPORAN UANG SAKU</h2>
    <div class="panel panel-default">
        <div class="panel-heading"><h3>NAMA : ATANASIUS</h3></div>
        <div class="panel-heading"><h3>NIS  : 175314060</h3></div>
        <table id="dt-bordered" class="table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm"><h4>PERIODE</h4></th>
                    <th class="th-sm"><h4>JUMLAH TAGIHAN</h4></th>
                    <th class="th-sm"><h4>STATUS PEMBAYARAN</h4></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><h4>Oktober</h4></td>
                    <td><h4>Rp 3.000.000</h4></td>
                    <td><h4>LUNAS</h4></td>
                </tr>
            </tbody>
        </table>
    </div>
    <button class="btn btn-primary bg-info border rounded border-dark" data-toggle="modal" data-target="#modalHistory" type="button" style="font-family: 'Archivo Black', sans-serif;margin: 9px;background-color: rgb(245,247,246);">HISTORY&nbsp;</button>
</div>


<div id="modalHistory" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">        
                        <div id="table" class="table-editable">   
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>