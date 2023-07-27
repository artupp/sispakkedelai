<!-- section intro -->
    <section id="content">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-success">
                    <div class="panel-heading">Edit Data Gejala</div>
                        <div class="panel-body">
                            <div class="form">
                            <form class="form-validate form-horizontal" method="post" action="<?php echo site_url('a_gejala/edit')?>" enctype="multipart/form-data">
                                <div class="form-group">
                                <label for="kd_penyakit" class="control-label col-lg-2">Kode Gejala</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="kd_gejala" type="text" value="<?php echo $baris['kd_gejala'] ?>" class="uneditable-input" readonly="true"/>
                                    </div>
                                </div>
								<div class="form-group">
                                <label for="nama_penyakit" class="control-label col-lg-2">Nama Gejala</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="nama_gejala" type="text" value="<?php echo $baris['nama_gejala'] ?>"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gambar_gejala" class="control-label col-lg-2">Gambar Gejala</label>
                                    <div class="col-lg-10">
                                        <!-- Tampilkan gambar jika sudah ada -->
                                        <?php if ($baris['gambar'] !== null && $baris['gambar'] !== ''): ?>
                                            <img src="<?php echo base_url('assets/img/gejala/' . $baris['gambar']); ?>" style="max-width: 200px;">
                                        <?php endif; ?>
                                        <input class="form-control" name="gambar_gejala" type="file" accept="image/*"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                <label for="nama_penyakit" class="control-label col-lg-2">Bobot Pakar Gejala</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="bobot_pakar" type="text" value="<?php echo $baris['bobot_pakar'] ?>"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="control-label col-lg-2">
                                        <button class="btn btn-outline btn-success" name="submit" type="submit">Update</button>
                                    </div>
									<div class="control-label col-lg-2">
                                         <?php echo anchor('a_gejala','Kembali',array('class'=>'btn btn-outline btn-primary'))?>
                                    </div>
                                </div>
                            </form>
							</div>
						</div>
					</div>
				</div>
			</div>
      </div>
    </section>