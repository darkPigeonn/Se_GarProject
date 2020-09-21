
<body style="background-image: url(<?php echo base_url('assets/adminBaru/img/downloads-bg.jpg')?>);font-size: 39px;">
    <div></div><div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h1>E-Keuangan</h1>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Data Siswa</a></li>
                            <li><a href="#">Data Keuangan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#laporanSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Laporan
                        </a>
                        <ul class="collapse list-unstyled" id="laporanSubmenu">
                            <li><a href="#">Input Laporan</a></li>
                            <li><a href="#">Cetak Laporan</a></li>
                        </ul>
                    </li>
                    <li>
                       <a href="#dataSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Data
                        </a>
                        <ul class="collapse list-unstyled" id="dataSubmenu">
                            <li><a href="#">Data Seminaris</a></li>
                            <li><a href="#">Modal</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-send"></i>
                            Log Out
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    <div id="wrapper" style="background-color: #877e7e;opacity: 1;"></div>
    <script src="<?php echo base_url().'assets/adminBaru/js/jquery.min.js'?>"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(). 'assets/adminBaru/js/script.min.js'?>"></script>
</body>

</html> 