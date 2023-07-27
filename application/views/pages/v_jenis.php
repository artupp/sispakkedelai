<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<title>Sistem Pakar Backward Chaining Dan Teorema Bayes| Putrain</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- css -->
<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" />
<!-- <link href="<?php echo base_url('assets/css/bootstrap-min.css') ?>" rel="stylesheet" /> -->
<link href="<?php echo base_url('assets/css/bootstrap-responsive.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/prettyPhoto.css') ?>" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

<!-- Theme skin -->
<link id="t-colors" href="<?php echo base_url('assets/color/default.css') ?>" rel="stylesheet" />

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/ico/apple-touch-icon-144-precomposed.png') ?>" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/ico/apple-touch-icon-114-precomposed.png') ?>" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/ico/apple-touch-icon-72-precomposed.png') ?>" />
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/ico/apple-touch-icon-57-precomposed.png') ?>" />
<link rel="shortcut icon" href="<?php echo base_url('assets/img/bakteri.JPG') ?>" />

<style>
    .card {
        border: 2px solid #7e7e7e;
        border-radius: 10px;

    }

    .card .card-body {
        margin: 8px;

    }

    .row {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
    }

    .col-3 {
        /* margin-right: 25px; */
        grid-column: span 3;
    }
</style>
</head>

<body>


    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="top">
            </div>
            <div class="container">
                <div class="row nomargin">
                    <div class="span4">
                        <div class="logo">
                            <h1>Backward Chaining Dan Teorema Bayes</h1>
                        </div>
                    </div>
                    <div class="span8">
                        <div class="navbar navbar-static-top">
                            <div class="navigation">
                                <nav>
                                    <ul class="nav topnav">
                                        <li>
                                            <a href="<?php echo base_url('beranda') ?>">Beranda</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('konsultasi') ?>">Konsultasi</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('tentang') ?>">Tentang Kami</a>
                                        </li>
                                        <li class="active">
                                            <a href="<?php echo base_url('jenis') ?>">Jenis Penyakit</a>
                                        </li>
                                        <!-- <li >
                                            <a href="<?php echo base_url('penyakit') ?>">Penyakit</a>
                                        </li> -->
                                        <li>
                                            <a href="<?php echo base_url('auth') ?>">Masuk</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- end navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        <section class="content container">
            <div class="row">

                <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <!-- <img class="card-img-top" src="<?php echo base_url('assets/img/img/jenis/Coliform.jpg') ?>" alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title">Kudis Batang</h5>
                            <p class="card-text">Penyakit kudis batang pada kedelai, yang juga dikenal sebagai stem canker, adalah sebuah penyakit yang disebabkan oleh jamur patogen, terutama spesies Diaporthe phaseolorum var. caulivora. Penyakit ini umumnya menyerang batang tanaman kedelai, menyebabkan lesi atau luka berwarna coklat atau hitam pada permukaan batang.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <!-- <img class="card-img-top" src="<?php echo base_url('assets/img/img/jenis/Subtillis.jpg') ?>" alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title">Busuk Pangkal Batang</h5>
                            <p class="card-text">Penyakit busuk pangkal batang pada kedelai, juga dikenal sebagai basal stem rot, adalah penyakit yang disebabkan oleh beberapa jenis jamur patogen, seperti Phytophthora sojae dan Rhizoctonia solani. Penyakit ini umumnya menyerang bagian pangkal batang tanaman kedelai, menyebabkan pembusukan dan kematian jaringan tersebut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <!-- <img class="card-img-top" src="<?php echo base_url('assets/img/img/jenis/Shigella.jpg') ?>" alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title">Karat daun</h5>
                            <p class="card-text">Penyakit karat daun pada kedelai, juga dikenal sebagai soybean rust, adalah penyakit jamur yang disebabkan oleh spesies Phakopsora pachyrhizi. Penyakit ini dapat menyebabkan kerugian yang signifikan pada tanaman kedelai, terutama pada daun-daunnya. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <!-- <img class="card-img-top" src="<?php echo base_url('assets/img/img/jenis/Proteus.jpg') ?>" alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title">Bercak Daun Coklat</h5>
                            <p class="card-text">Bercak Daun Coklat pada kedelai, juga dikenal sebagai brown spot, adalah penyakit yang disebabkan oleh jamur Septoria glycines. Penyakit ini umum terjadi pada tanaman kedelai di berbagai wilayah.Gejala bercak daun coklat pada kedelai meliputi munculnya bercak-bercak berwarna coklat pada daun tanaman.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <!-- <img class="card-img-top" src="<?php echo base_url('assets/img/img/jenis/Coli.jpg') ?>" alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title">Penyakit Rebah</h5>
                            <p class="card-text">Bercak Daun Coklat pada kedelai, juga dikenal sebagai brown spot, adalah penyakit yang disebabkan oleh jamur Septoria glycines. Penyakit ini umum terjadi pada tanaman kedelai di berbagai wilayah. Gejala bercak daun coklat pada kedelai meliputi munculnya bercak-bercak berwarna coklat pada daun tanaman. Bercak-bercak tersebut biasanya berbentuk bulat atau oval dengan tepi yang berwarna lebih gelap. </p>
                        </div>
                    </div>
                </div>


        </section>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="span6">
                    <div class="copyright">
                        <p><span><strong>&copy; Backward Chaining Dan Teorema Bayes</strong></span></p>
                    </div>

                </div>

                <div class="span6">
                    <div class="credits"><strong>
                            Created by Putrain</a></strong>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/modernizr.custom.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/toucheffects.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/google-code-prettify/prettify.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/portfolio/jquery.quicksand.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/portfolio/setting.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/animate.js') ?>"></script>

    <!-- Template Custom JavaScript File -->
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
</body>

</html>