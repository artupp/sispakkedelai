<section id="content">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-success">
                       <h3>Data konsultasi</h3>

                       <table class="table table-bordered table-stripped">
                            <thead>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>No Telpon</th>
                                <th>Umur</th>
                                <th>Diagnosa Penyakit</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody> 
                                <?php
                                foreach ($dataKonsultasi as $key => $item) {?>
                                    <tr>
                                        <td><?=$key+1?></td>
                                        <td><?=$item->nama?></td>
                                        <td><?=$item->no_telpon?></td>
                                        <td><?=$item->umur?></td>
                                        <td><?=$item->nama_penyakit?></td>
                                        <form action="<?php echo site_url('konsultasi/show')?>" method="get">
                                            <input type="hidden" name="id_user" value="<?=$item->id_user?>">
                                            <td><button class="btn btn-success">Detail</button></td>
                                        </form>
                                    </tr>
                               <?php }?>
                                <tr>

                                </tr>
                            </tbody>
                       </table>
                </div>
            </div>
        </div>
      </div>
      <br>
      <br>
</section>