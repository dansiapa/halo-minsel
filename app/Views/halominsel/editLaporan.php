<?= $this->extend('layout/default'); ?>

<?= $this->section('content'); ?>

<div class="container row justify-content-center">
	<div class="col-lg-8">        
		<div class="card o-hidden border-0 shadow-lg my-1">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Edit Laporan || Hallo Minsel</h1>
							</div>
								<hr>
							<form action="<?= site_url('laporan/'.$laporan->id) ?>" method="post" class="user" autocomplete="off">
							  <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="PUT">
								<div class="form-group">
									<input type="text" class="form-control form-control-user" name="nik" id="nik_user" placeholder="NIK" value="<?= $laporan->nik ?>" readonly>
								</div>
								<div class="form-group">
									<input type="text" class="form-control form-control-user" name="nama" id="nama" placeholder="Nama Lengkap" value="<?= $laporan->nama ?>" readonly>
								</div>
								<div class="form-group">
									<input type="text" class="form-control form-control-user" name="no_telp" id="no_telp" placeholder="Nomor" value="<?= $laporan->no_telp ?>" readonly>
								</div>
								<div class="form-group">
									<input type="text" class="form-control form-control-user" name="isi_laporan" id="isi_laporan" placeholder="Laproan" value="<?= $laporan->isi_laporan ?>" readonly>
								</div>									
								<div class="form-group">
									<input type="text" class="form-control form-control-user" name="tgl_laporan" id="tgl_laporan" placeholder="Tanggal Laproan" value="<?= $laporan->tgl_laporan ?>" readonly>
								</div>									
								<div class="form-group">
                  <select class="form-control" name="status_laporan" id="status_laporan">
                    <option selected>-- Pilih --</option>
                    <option value="terima">Terima</option>
                    <option value="proses">Proses</option>
                    <option value="selesai">Selesai</option>
                  </select>
								</div>									
								<hr>
								<div class=" container row justify-content-center">
									<div class="col-lg-2">
										<button type="submit" class="btn btn-success">Simpan</button>                                   
									</div>																
								</div> 
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>    

<?= $this->endSection(); ?>
