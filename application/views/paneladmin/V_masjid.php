<!-- Main Sidebar Container -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0"><?php echo $judul ?></h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active"><?php echo $judul ?></li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->


		<div class="card card-default">
			<div class="card-header">
				<h3 class="card-title">Form data </h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
					</button>

				</div>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<form id="inputform">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Nama Website</label>
								<input type="text" class="form-control select2" name="nama" id="nama"
									placeholder="inputkan Nama Website">
                                <input type="hidden" name="id" id="id" value="1">
							</div>
							<!-- /.form-group -->
							<div class="form-group">
								<label>Alamat Website</label>
								<textarea id="alamat" name="alamat" class="form-control select2">
                				
              					</textarea>
							</div>
							<div class="form-group">
								<label>Struktur Website</label>
								<textarea id="struktur" name="struktur" class="form-control select2" >
                				
              					</textarea>
							</div>
							<!-- /.form-group -->
						</div>
						<!-- /.col -->
						<div class="col-md-6">
                        <div class="form-group">
                            <label>Logo Website Sekarang</label><br>
                            <img src="<?php echo base_url('assets/upload/image') ?>" alt="logo-masjid" id="logo" name="logo" style="max-width:200px; height:auto;">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-logo"><i class="fas fa-pen"></i> Edit Logo
                            </button>
                        </div>
						<div class="form-group">
								<label>No HP</label>
								<input type="number" class="form-control select2" name="nohp" id="nohp"
									placeholder="inputkan No Hp ">
							</div>
						<div class="form-group">
								<label>Sejarah </label>
								<textarea id="sejarah" name="sejarah" class="form-control select2">
                				
              					</textarea>
							</div>
							<!-- /.form-group -->
							
							<!-- /.form-group -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->


					<!-- /.row -->
			</div>
			<!-- /.card-body -->
			<div class="card-footer">

				<button type="submit" class="btn btn-primary" id="btn-simpan">Simpan</button>
				</form>
			</div>
		</div>
		<!-- /.card -->
	

</div>

<!-- /.card-body -->

<!-- /.card-footer -->

<!-- /.card -->

</section>


<!-- /.content -->



</div>
<!-- /.content-wrapper -->

<!-- ./wrapper -->
