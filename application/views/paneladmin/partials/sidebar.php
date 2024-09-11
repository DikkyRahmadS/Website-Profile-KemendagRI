<aside class="main-sidebar sidebar-dark-primary elevation-4 " style="background-color: cadetblue;">
	<!-- Brand Logo -->


	<!-- Sidebar -->
	<div class="sidebar ">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex ">
			<div class="image">
				<img src="<?php echo base_url() ?>assets/upload/logo/<?php echo $logo ?>" style="width: 100%;" class=" elevation-0" alt="User Image">
			</div>

		</div>


		<!-- SidebarSearch Form -->

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-header">Home</li>
				<li class="nav-item ">
					<a href="<?php echo base_url() ?>admin/dasbor" class="nav-link <?= ($this->uri->segment(1) == 'admin') ? 'active' : ''; ?> ">
						<i class="nav-icon fa fa-home"></i>
						<p>
							Dashboard

						</p>
					</a>
				</li>
				<li class="nav-header">Kegiatan</li>
				<li class="nav-item ">
					<a href="<?php echo base_url() ?>k_kegiatan/index" class="nav-link <?= ($this->uri->segment(1) == 'k_kegiatan') ? 'active' : ''; ?> ">
						<i class="fas fa-calendar-plus nav-icon"></i>
						<p>
							Kegiatan

						</p>
					</a>
				</li>
				<li class="nav-item ">
					<a href="<?php echo base_url() ?>k_pengumuman/index" class="nav-link <?= ($this->uri->segment(1) == 'k_pengumuman') ? 'active' : ''; ?> ">
						<i class="fas fa-blog nav-icon"></i>
						<p>
							Berita
						</p>
					</a>
				</li>
				<li class="nav-header">Configuration</li>
				<li class="nav-item">
					<a href="<?php echo base_url() ?>k_user/index" class="nav-link <?= ($this->uri->segment(1) == 'k_user') ? 'active' : ''; ?>">
						<i class="nav-icon fa fa-user"></i>
						<p>
							Data User
							<span class="badge badge-info right"></span>
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url() ?>k_galeri/index" class="nav-link <?= ($this->uri->segment(1) == 'k_galeri') ? 'active' : ''; ?>">
						<i class="fas fa-photo-video nav-icon"></i>
						<p>
							Gallery
							<span class="badge badge-info right"></span>
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url() ?>k_masjid/index" class="nav-link <?= ($this->uri->segment(1) == 'k_masjid') ? 'active' : ''; ?>">
						<i class="fas fa-cog nav-icon"></i>
						<p>
							Pengaturan Website
							<span class="badge badge-info right"></span>
						</p>
					</a>
				</li>

			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
