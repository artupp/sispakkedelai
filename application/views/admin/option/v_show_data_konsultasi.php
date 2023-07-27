<section id="content">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-success">
                       <h3>Detail Konsultasi</h3>

                       <p>Nama Lengkap : <strong><?=$dataDiagnosa[0]->nama?></strong> </p>
                       <p>Umur  : <strong><?=$dataDiagnosa[0]->umur?></strong></p>
                       <p>Nomor Telpon  : <strong><?=$dataDiagnosa[0]->no_telpon?></strong></p>
                       <!-- <p>Alamat  : <strong><?=$dataDiagnosa[0]->alamat_depot?></strong></p> -->
                        <br>
                       <table class="table table-bordered table-stripped">
                           <thead>
                               <th>No</th>
                               <th>Gejala</th>
                           </thead>
                           <tbody>
                               <?php foreach ($dataDiagnosa as $key => $data) {?>
                                <tr>
                                    <td><?= $key+1?></td>
                                    <td><?= $data->nama_gejala?></td>
                                </tr>
                               <?php }?>
                           </tbody>
                       </table>
                                <br>
                       <h5>Diagnosa</h5>
                       <p>Kemungkinan Tanaman Kedelai Terkena <b><?= $dataDiagnosa[0]->nama_penyakit?></b></p>
                        <p>Dengan nilai keyakinan Sebesar <b><?= $dataDiagnosa[0]->nilai_cf?></b></p>
                        <br>
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>Penyebab</th>
                                <th>Solusi</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $dataDiagnosa[0]->penyebab?></td>
                                    <td><?= $dataDiagnosa[0]->solusi?></td>

                                </tr>
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
      </div>
</section>
