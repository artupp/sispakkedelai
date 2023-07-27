<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sistem Pakar Backward Chaining Dan Teorema Bayes| Putrainn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- css -->
  <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" />
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
                    <li class="active">
                      <a href="<?php echo base_url('beranda') ?>">Beranda</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('konsultasi') ?>">Konsultasi</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('tentang') ?>">Tentang Kami</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('jenis') ?>">Jenis Penyakit</a>
                    </li>
                    <!-- <li>
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
    <!-- section intro -->

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-success">
              <div class="panel-heading">
                <h2>Hasil Diagnosa</h2>
              </div>
              <div class="panel-body">

                <p>Kemungkinan Tanaman Kedelai Terkena <b><?= $hasilAkhir['nama_penyakit'] ?></b></p>
                <p>Dengan nilai Keyakinan sebesar <b><?= (round($hasilPerhitungan, 2) * 100) ?>%</b></p>
                <table class="table table-bordered table-stripped dataTables1">
                  <thead>
                    <th>No</th>
                    <th>Gejala yang dialami</th>
                  </thead>
                  <tbody>
                    <?php
                    for ($i = 0; $i < count($listGejala); $i++) { ?>
                      <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= $listGejala[$i]['nama_gejala'] ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <?php
                foreach ($dataPenyakit as $key => $value) {
                  if ($value->nama_penyakit == $hasilAkhir['nama_penyakit']) {
                ?>
                    
                <?php
                  }
                }
                ?>


                <table class="table table-bordered table-stripped dataTables1">
                  <thead>
                    <th>Penyebab</th>
                    <th>Solusi</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?= $hasilAkhir['penyebab'] ?></td>
                      <td><?= $hasilAkhir['solusi'] ?></td>
                    </tr>
                  </tbody>
                </table>
                <br><br><a href="<?php echo site_url('konsultasi') ?>" class="btn btn-success btn-large">
                  <i class="fa fa-list"></i> Konsultasi Kembali</a>

                <button onclick="window.print()" class="btn btn-warning btn-large">Print</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/modernizr.custom.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/toucheffects.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/google-code-prettify/prettify.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/portfolio/jquery.quicksand.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/portfolio/setting.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/animate.js') ?>"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js'); ?>"></script>
    <!-- Template Custom JavaScript File -->
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url('assets/vendor/datatables/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables-responsive/dataTables.responsive.js'); ?>"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
      $(document).ready(function() {
        $('#dataTables-example').DataTable({
          responsive: true
        });
        $('#btnCetak').click(function() {

        });
      });
    </script>
    <script>
      $(function() {
        $("#showPass").click(function() { // #showPass -> id Checkbox
          if ($("[name=password]").attr('type') == 'password') {
            $("[name=password]").attr('type', 'text');
          } else {
            $("[name=password]").attr('type', 'password');
          }
        });
      });
    </script>
</body>

</html>