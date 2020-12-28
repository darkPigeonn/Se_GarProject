<!DOCTYPE html>
<html>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand">SEMINARI GARUM</a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href='<?= base_url();?>userController'>Kembali</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href='<?= base_url();?>admin'>Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
