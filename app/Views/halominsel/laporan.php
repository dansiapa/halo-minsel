<?= $this->extend('layout/default'); ?>

<?= $this->section('content'); ?>
    
	<!-- DataTable -->
	<div class="card shadow mb-4 col-lg">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Laporan || Halo Minsel</h6>
			<form action="" method="get"	class="d-none d-sm-inline-block form-inline mr-md-2 ml-md-3 my-2 my-md-0 mw-100 navbar-search">
				<div class="input-group">
					<input type="text" class="form-control bg-light border-1 small" placeholder="Search for..." name="cari"	aria-label="Search" aria-describedby="basic-addon2" autocomplete="off">
					<div class="input-group-append">
						<button class="btn btn-danger" type="submit" name="submit">
							<i class="fas fa-search fa-sm"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" cellspacing="0" id="dataLaporan">
					<thead>
						<tr>
							<th>No</th>
							<th>NIK</th>
							<th>Nama</th>
							<th>No Telp</th>
							<th>Isi Laporan</th>
							<th>Tanggal Laporan</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1 + (1 * ($currentPage - 1)); ?>
						<?php foreach($laporanModel as $l) : ?>
						<tr>
							<td><?= $i++; ?></td>
							<td><?= $l['nik_user']; ?></td>
							<td><?= $l['name_user']; ?></td>
							<td><?= $l['nomor_user']; ?></td>
							<td><?= $l['isi_laporan']; ?></td>
							<td><?= $l['tgl_laporan']; ?></td>
							<td><?= $l['status_laporan']; ?></td>			
							<td>
								<a href="<?= site_url('laporan/edit/'.$l['id']) ?>" class="btn btn-warning">
                  <i class="fas fa-edit fa-sm"></i>
                </a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<?= $pager->links('laporan_hm', 'laporan_pagination') ?>
			</div>
		</div>
	</div>

	<script>
	$(document).ready(function(){
    $("#keyword").keypress(function(event){
        if(event.keyCode == 13){ // 13 adalah kode enter
            filter();
        }
    });
    var filter = function(){
        var category = $("#category").val();
        var keyword = $("#keyword").val();
        window.location.replace("/product?category="+category+"&keyword="+keyword);
    }
	});
	</script>

<?= $this->endSection(); ?>