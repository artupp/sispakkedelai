<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<title>Sistem Pakar Backward Chaining Dan Teroema Bayes| Putrain</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- css -->
<link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
<!-- <link href="<?php echo base_url('assets/css/bootstrap-min.css')?>" rel="stylesheet" /> -->
<link href="<?php echo base_url('assets/css/bootstrap-responsive.css')?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/prettyPhoto.css')?>" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

<!-- Theme skin -->
<link id="t-colors" href="<?php echo base_url('assets/color/default.css')?>" rel="stylesheet" />

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144"
    href="<?php echo base_url('assets/ico/apple-touch-icon-144-precomposed.png')?>" />
<link rel="apple-touch-icon-precomposed" sizes="114x114"
    href="<?php echo base_url('assets/ico/apple-touch-icon-114-precomposed.png')?>" />
<link rel="apple-touch-icon-precomposed" sizes="72x72"
    href="<?php echo base_url('assets/ico/apple-touch-icon-72-precomposed.png')?>" />
<link rel="apple-touch-icon-precomposed"
    href="<?php echo base_url('assets/ico/apple-touch-icon-57-precomposed.png')?>" />
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/bakteri.JPG')?>" />


<style>
    .card{
        border: 2px solid #7e7e7e;
        border-radius: 10px;
        
    }
    .card .card-body{
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


    <div id="wrapper" >
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
                                        <li >
                                            <a href="<?php echo base_url('beranda')?>">Beranda</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('konsultasi')?>">Konsultasi</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('tentang')?>">Tentang Kami</a>
                                        </li>
                                        <li >
                                            <a href="<?php echo base_url('jenis')?>">Jenis Penyakit</a>
                                        </li>
                                        <!-- <li >
                                            <a href="<?php echo base_url('penyakit')?>">Penyakit</a>
                                        </li> -->
                                        <li>
                                            <a href="<?php echo base_url('auth')?>">Masuk</a>
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
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img/penyakit/p.lernea.png')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Bakteri Coliform</h5>
                            <p class="card-text">Bakteri Coliform didefinisikan sebagai kelompok bakteri gram negatif, berbentuk batang, oksidasi-negatif, aerob dan anaerob fakultatif, tidak membentuk spora, mampu memfermentasikan laktosa dengan membentuk gas dan asam dalam 10 waktu 48 jam pada suhu 370C. Jumlah Coliform yang diperoleh dari inkubasi pada suhu 370C biasanya dinyatakan sebagai total Coliform.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img/penyakit/p.cacing.png')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Bacillus Subtilis</h5>
                            <p class="card-text">adalah bakteri saprofit dan bakteri tanah yang memberikan kontribusi pada siklus nutrisi karena kemampuannya untuk menghasilkan berbagai enzim. Bakteri ini telah digunakan di industri untuk menghasilkan protease, amilase, antibiotik, dan bahan kimia. Bacillus subtilis dapat menyebabkan penyakit yang membuat fungsi imun seseorang terganggu, misalnya meningitis dan gastroentritis akut</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img/penyakit/p.trichodina.png')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Shigella sp</h5>
                            <p class="card-text">merupakan bakteri gram negatif berbentuk batang, tunggal, tidak memiliki flagel, aerobik ataupun aerobik fakultatif dan tidak membentuk spora. Suhu optimum pertumbuhan yakni 37oC dimana habitatnya berada pada saluran pencernaan dengan infeksinya melalui fase oral. Bakteri ini mampu mengeluarkan LT toksik yang akan menginvasi ke epitel sel mukosa usus halus dan berkembang dengan baik pada daerah invasi tersebut. Bakteri ini dapat ditularkan melalui makanan dan minuman yang terkontaminasi </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
            <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img/penyakit/p.Saprolegniasis.png')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Proteus Sp</h5>
                            <p class="card-text">Genus Proteus, yang dideskripsikan untuk pertama kalinya oleh Hauser pada tahun 1885 termasuk ke dalam golongan Enterobacteria dimana proteus sp. ditempatkan pada family Proteeae. Saat ini, genus Proteus terdiri dari lima spesies: P. mirabilis, P. vulgaris, P. penneri, P. hauseri dan P. myxofaciens, serta tiga spesies dari genus Proteus yang tidak disebutkan namanya . Yang paling mendefinisikan karakteristik bakteri Proteus adalah fenomena berkerumun, multi seluler proses diferensiasi batang pendek ke sel swarmer memanjang </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img/penyakit/p.Epistylis.jpg')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Escheria Coli</h5>
                            <p class="card-text">merupakan salah satu bakteri koliform yang termasuk dalam famili Enterobacteriaceae. Enterobacteriaceae merupakan bakteri enterik atau bakteri yang dapat hidup dan bertahan di dalam saluran pencernaan. Escherichia coli merupakan bakteri berbentuk batang bersifat Gram-negatif, fakultatif anaerob, tidak membentuk spora, dan merupakan flora alami pada usus mamalia </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img/penyakit/p.bercak.png')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Bercak Merah</h5>
                            <p class="card-text">Penyakit bercak merah disebut juga penyakit Aeromonas, karena yang menyerang ikan Nila yaitu Aeromonas sp.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                 <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img/penyakit/p.bintik.png')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Bintik Putih</h5>
                            <p class="card-text"> Penyebab penyakit bintik putih adalah Protozoa incthyrius multifilis. Faktor penyebab penyakit ini adalah kualitas air yang buruk, suhu yang terlalu rendah, pakan yang buruk, dan kontaminasi ikan lain yang sudah terkena penyakit bintik putih.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img/penyakit/p.Penducle.png')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Penducle </h5>
                            <p class="card-text">Penyakit ini sering disebut dengan penyakit air dingain (cold water descareases) yang bisa terjadi pada suhu 16°C. Penyebabnya adalah bakteri Flexbacter psychropahila yang berukuran sekitar enam mikron.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img/penyakit/p.Edward.png')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Edward siella </h5>
                            <p class="card-text"> Penyebabnya adalah bakteri Edward siella yang berukuran 0,5-0,75 mikron.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img/penyakit/p.kutu.png')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Kutu Ikan </h5>
                            <p class="card-text">Penyebab penyakit ini adalah Argulus sp, yang termasuk udang renik. Parasit penghisap darah ini sering dijumpai menempel pada insang, kulit, dan sirip ikan yang sakit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img/penyakit/p.Stereptococcosis.png')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Stereptococcosis  </h5>
                            <p class="card-text">Penyakit ini disebabkan oleh bakteri Steretococcus inae. Sebuah penelitian tahun 2002 menunjukkan bahwa ikan Nila sangat rentan terhadap infeksi penyakit bakterial antara  lain akibat infeksi bakteri Steretococcus inae ini.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="margin-top:20px;margin-bottom:20px;width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img/penyakit/p.Tilapia.png')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tilapia like virus (TiLV) </h5>
                            <p class="card-text">Merupakan virus baru dalam budidaya perikanan yang secara signifikan menyebabkan kematian pada ikan Nila. Benua Asia, Afrika dan negara Amerika Selatan telah menyebut TILV ini sebagai ancaman besar dalam industri global ikan Nila.</p>
                        </div>
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
    <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/js/modernizr.custom.js')?>"></script>
    <script src="<?php echo base_url('assets/js/toucheffects.js')?>"></script>
    <script src="<?php echo base_url('assets/js/google-code-prettify/prettify.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js')?>"></script>
    <script src="<?php echo base_url('assets/js/portfolio/jquery.quicksand.js')?>"></script>
    <script src="<?php echo base_url('assets/js/portfolio/setting.js')?>"></script>
    <script src="<?php echo base_url('assets/js/animate.js')?>"></script>

    <!-- Template Custom JavaScript File -->
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
</body>

</html>