<?= $this->extend('layout/default'); ?>

<?= $this->section('content'); ?>


<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
	</div>

	<!-- Content Row -->
	<div class="row">
		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan</div>
							<div class="h2 mb-0 font-weight-bold text-gray-800"><?= $countLaporan; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-table fa-2x text-gray-300"></i>
						</div>
					</div>
					<a href="<?= site_url('laporan'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">User</div>
							<div class="h2 mb-0 font-weight-bold text-gray-800"><?= $countUser; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-user fa-2x text-gray-300"></i>
						</div>
					</div>
					<a href="<?= site_url('user') ?>" class="small-box-footer text-success">More info <i class="fas fa-arrow-circle-right text-success"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>
