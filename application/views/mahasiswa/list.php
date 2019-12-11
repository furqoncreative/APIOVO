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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('matakuliah/add') ?>" class="btn btn-success btn-sm">
							Tambah 
						</a>

					</div>

					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="10%" cellspacing="0">
								<thead>
									<tr>
										<th>NIM</th>
										<th>Nama</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($mahasiswa as $r): ?>
									<tr>
										<td>
											<?php echo $r->nim ?>
										</td>
										<td>
											<?php echo $r->mahasiswa_nama ?>
										</td>
										<td width="250">

											<a href="<?php echo site_url('mahasiswa/edit/'.$r->mahasiswa_unx) ?>" class="btn btn-default btn-sm">Ubah
											</a>
											
											<a href="<?php echo site_url('mahasiswa/delete/'.$r->mahasiswa_unx) ?>" class="btn btn-danger btn-sm">
												Hapus
											</a>

										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->

</body>

</html>