<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mata Kuliah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body id="page-top">
	<div id="wrapper">
		<div id="content-wrapper">
			<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('matakuliah/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('matakuliah/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $matakuliah->matakuliah_id?>" />

							<input type="hidden" name="unx" value="<?php echo $matakuliah->matakuliah_unx?>" />

							<div class="form-group">
								<label for="name">Kode*</label>
								<input class="form-control <?php echo form_error('matakuliah_kode') ? 'is-invalid':'' ?>"
								 type="text" name="matakuliah_kode" placeholder="Kode" value="<?php echo $matakuliah->matakuliah_kode ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('matakuliah_kode') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Deskripsi*</label>
								<input class="form-control <?php echo form_error('matakuliah_deskripsi') ? 'is-invalid':'' ?>"
								 type="text" name="matakuliah_deskripsi" placeholder="Deskripsi" value="<?php echo $matakuliah->matakuliah_deskripsi ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('matakuliah_deskripsi') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">SKS*</label>
								<input class="form-control <?php echo form_error('sks') ? 'is-invalid':'' ?>"
								 type="number" min="0" max="4" name="sks" placeholder="SKS" value="<?php echo $matakuliah->sks ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('sks') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
			</div>
		</div>

</body>

</html>