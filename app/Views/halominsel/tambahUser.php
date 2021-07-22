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
								<h1 class="h4 text-gray-900 mb-4">Tambah User || Hallo Minsel</h1>
							</div>
								<hr>
							<form action="<?= site_url('user') ?>" method="post" class="user" autocomplete="off">
							<?= csrf_field(); ?>
								<div class="form-group">
									<input type="text" class="form-control form-control-user" name="nik_user" id="nik_user" placeholder="NIK" autofocus required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control form-control-user" name="name_user" id="name_user" placeholder="Nama Lengkap" required>
								</div>
								<div class="form-group">
									<input type="email" class="form-control form-control-user" name="email_user" id="email_user" placeholder="E-mail" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control form-control-user" name="password_user" id="password_user" placeholder="Password" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control form-control-user" name="nomor_user" id="nomor_user" placeholder="Nomor" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control form-control-user" name="address_user" id="address_user" placeholder="Alamat" required>
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
