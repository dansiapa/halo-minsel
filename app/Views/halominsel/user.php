<?= $this->extend('layout/default'); ?>

<?= $this->section('content'); ?>
    
	<!-- DataTable -->
	<div class="card shadow mb-4 col-lg">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">User || Halo Minsel</h6>
      <a href="<?= site_url('user/add') ?>" class="btn btn-success mr-auto ml-md-3">
        <i class="fas fa-plus fa-sm"></i>
        Tambah User
      </a>
			<form action="" method="get"	class="d-none d-sm-inline-block form-inline mr-md-2 ml-md-3 my-2 my-md-0 mw-100 navbar-search">
				<div class="input-group">
					<input type="text" class="form-control bg-light border-1 small" placeholder="Search for..." name="keyword"	aria-label="Search" aria-describedby="basic-addon2" autocomplete="off">
					<div class="input-group-append">
						<button class="btn btn-danger" type="submit" name="submit">
							<i class="fas fa-search fa-sm"></i>
						</button>
					</div>
				</div>
			</form>
		</div>

		<!-- flashData -->
		<?php if(session()->getFlashData('success')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<?= session()->getFlashData('success') ?>
			</div>
		<?php endif; ?>

		<?php if(session()->getFlashData('error')) : ?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<?= session()->getFlashData('error') ?>
			</div>
		<?php endif; ?>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>NIK</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Nomor</th>
							<th>Alamat</th>
              <th>Aksi</th>
						</tr>
					</thead>
					<tbody>
					<?php $k = 1 + (10 * ($currentPage - 1)); ?>
					<?php foreach($user as $u) : ?>
						<tr>
              <td><?= $k++; ?></td>					
              <td><?= $u['nik_user']; ?></td>
							<td><?= $u['name_user']; ?></td>
							<td><?= $u['email_user']; ?></td>
							<td><?= $u['nomor_user']; ?></td>
							<td><?= $u['address_user']; ?></td>
              <td>
                <a href="<?= site_url('user/editUser/'.$u['id_user']) ?>" class="btn btn-warning">
                  <i class="fas fa-pen fa-sm" data-toggle="tooltip" data-placement="bottom" title="Edit"></i>
                </a>
								<form action="<?= site_url('user/'.$u['id_user']) ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus Data ?')">
									<?= csrf_field(); ?>
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-danger">
										<i class="fas fa-trash fa-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus"></i>
									</button>
								</form>
              </td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<?= $pager->links('user', 'user_pagination') ?>
			</div>
		</div>
	</div>

<?= $this->endSection(); ?>
