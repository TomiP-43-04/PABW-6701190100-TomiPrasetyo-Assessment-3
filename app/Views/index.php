<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi Proyek</title>
    <link rel="stylesheet" href="/css/bulma.css">
    <!-- Bootstrap Styles-->
    <link href="/css/bootstrap.css" rel="stylesheet" />

    <!-- FontAwesome Styles-->
    <link href="/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" style="background-color:#283643" role=" navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><strong>APANJAR </strong></a>
            </div>

        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div id="sideNav" href=""><i class=""></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="active-menu" href="/pelanggan/index"><i class=""></i> Home</a>
                    </li>
                </ul>
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="active-menu" href="/detailbarang"><i class=""></i> Daftar Barang</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/slider1.png" alt="..." alt="Placeholder image" class="d-block w-100" alt="..." width="auto" height="auto">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <h1 class="page-header">
                            Rekomendasi Sayuran dan Buah<small> Yang Sedang Turun Harga</small>
                        </h1>
                    </ol>
                    <div class="columns is-centered" style="margin-bottom: 20px; text-align: center;">
                        <?php
                        foreach ($barang as $b) :
                        ?>
                            <div class="column is-3">
                                <div class="card">
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="/images/<?= $b['gambar']; ?>" alt="..." alt="Placeholder image">
                                        </figure>
                                    </div>
                                    <div class="panel-right pull-right">
                                        <p><?= $b["nama_barang"]; ?></p>
                                        <span class="badge bg-success">Rp. </span>
                                        <br>
                                        <a button type="button" class="btn btn-success" href="/detailbarang.php">Lihat Detail Barang</a>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
                <!-- NAVBAR Sayuran  -->

            </div>

        </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Metis Menu Js -->
    <script src="/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="/js/morris/raphael-2.1.0.min.js"></script>
    <script src="/js/morris/morris.js"></script>


    <script src="/js/easypiechart.js"></script>
    <script src="/js/easypiechart-data.js"></script>


    <!-- Custom Js -->
    <script src="/js/custom-scripts.js"></script>


</body>

</html>