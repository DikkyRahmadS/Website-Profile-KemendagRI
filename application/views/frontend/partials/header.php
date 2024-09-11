<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="icon" href="<?php echo base_url() ?>assets/upload/logo/<?php echo
																		$logo ?>" type="image/x-icon" />
	<title><?php echo $judulweb ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/all.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/flaticon.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/jquery.bootstrap-touchspin.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/slick.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/responsive.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/color.css">
</head>

<body>
	<script src="<?php echo base_url() ?>assets/adminlte/autotopbar.min.js"></script>
	<main>
		<!-- <div id="preloader">
            <div class="preloader-inner">
                <i class="preloader-icon thm-clr flaticon-kaaba"></i>
            </div>
        </div>Page Loader -->
		<header class="stick style2 w-100">
			<div class="topbar bg-color1 d-flex flex-wrap justify-content-between w-100">
				<div class="topbar-left">
					<ul class="topbar-info-list mb-0 list-unstyled d-inline-flex">
						<li><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title=""><?php echo $judulweb ?></a></li>
						<li><i class="thm-clr fas fa-phone-alt"></i><?php echo $nohp ?></li>
					</ul>
				</div>
				<div class="topbar-right d-inline-flex">

					<div class="social-links d-inline-flex">
						<a href="https://twitter.com/" title="Twtiiter" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="https://www.youtube.com/" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
						<a href="https://web.whatsapp.com/" title="WhatsApp" target="_blank"><i class="fab fa-whatsapp"></i></a>
						<a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div><!-- Topbar -->
			<div class="logo-menu-wrap v2 d-flex flex-wrap align-items-center justify-content-between w-100 pat-bg thm-layer opc65 back-blend-multiply thm-bg" style="background-image: url(<?php echo base_url('') ?>assets/frontend/images/pattern-bg.jpg);background-color:#013769;">
				<div class="logo">
					<h1 class="mb-0 bg-light"><a href="index.html" title="Home"><img class="img-fluid" src="<?php echo base_url() ?>assets/upload/logo/<?php echo $logo ?>" alt="Logo" srcset="<?php echo base_url() ?>assets/upload/logo/<?php echo $logo ?>"></a>
					</h1>
				</div><!-- Logo -->
				<nav class="d-flex flex-wrap align-items-center justify-content-between">
					<div class="header-left">
						<ul class="mb-0 list-unstyled d-inline-flex">
							<li><a href="<?php echo base_url() ?>home" title="">Home</a></li>

							<li class="menu-item-has-children"><a href="javascript:void(0);" title="">Profil </a>
								<ul class="mb-0 list-unstyled">
									<li><a href="<?php echo base_url('struktur') ?>" title="">Struktur </a></li>
									<li><a href="<?php echo base_url('sejarah') ?>" title="">Sejarah </a></li>
								</ul>
							</li>
							<li><a href="<?php echo base_url('kegiatan/list') ?>" title="">Kegiatan</a></li>
							<li><a href="<?php echo base_url('galeri/list') ?>" title="">Galeri</a></li>
							<li><a href="<?php echo base_url('pengumuman/list') ?>" title="">Berita</a></li>

							<li><a href="<?php echo base_url('kontak') ?>" title="">Hubungi Kami</a></li>
						</ul>
					</div>
					<div class="header-right">

					</div>
				</nav>
			</div><!-- Logo Menu Wrap -->
		</header><!-- Header -->
		<div class="sticky-menu">
			<div class="container">
				<div class="sticky-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
					<div class="logo">
						<h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="<?php echo base_url() ?>assets/upload/logo/<?php echo $logo ?>" alt="Logo" srcset="<?php echo base_url() ?>assets/upload/logo/<?php echo $logo ?>"></a></h1>
					</div><!-- Logo -->
					<nav class="d-flex flex-wrap align-items-center justify-content-between">
						<div class="header-left">
							<ul class="mb-0 list-unstyled d-inline-flex">
								<li><a href="<?php echo base_url() ?>home" title="">Home</a></li>

								<li class="menu-item-has-children"><a href="javascript:void(0);" title="">Profil</a>
									<ul class="mb-0 list-unstyled">
										<li><a href="<?php echo base_url('struktur') ?>" title="">Struktur </a></li>
										<li><a href="<?php echo base_url('sejarah') ?>" title="">Sejarah </a></li>
									</ul>
								</li>
								<li><a href="<?php echo base_url('kegiatan/list') ?>" title="">Kegiatan</a></li>
								<li><a href="<?php echo base_url('galeri/list') ?>" title="">Galeri</a></li>
								<li><a href="<?php echo base_url('pengumuman/list') ?>" title="">Berita</a></li>

								<li><a href="<?php echo base_url('kontak') ?>" title="">Hubungi Kami</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div><!-- Sticky Menu -->
		<div class="rspn-hdr">

			<div class="lg-mn">
				<div class="logo"><a href="index.html" title="Home"><img src="<?php echo base_url() ?>assets/upload/logo/<?php echo $logo ?>" alt="Logo"></a>
				</div>

				<span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
			</div>
			<div class="rsnp-mnu">
				<span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
				<ul class="mb-0 list-unstyled w-100">
					<li class="menu-item-has-children"><a href="javascript:void(0);" title="">Home</a>
						<ul class="mb-0 list-unstyled">
							<li><a href="<?php echo base_url() ?>home" title="">Home</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children"><a href="javascript:void(0);" title="">Profil </a>
						<ul class="mb-0 list-unstyled">
							<li><a href="<?php echo base_url('struktur') ?>" title="">Struktur</a></li>
							<li><a href="<?php echo base_url('sejarah') ?>" title="">Sejarah </a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url('kegiatan/list') ?>" title="">Kegiatan</a></li>
					<li><a href="<?php echo base_url('galeri/list') ?>" title="">Galeri</a></li>
					<li><a href="<?php echo base_url('pengumuman/list') ?>" title="">Berita</a></li>

					<li><a href="<?php echo base_url('kontak') ?>" title="">Hubungi Kami</a></li>
				</ul>
			</div><!-- Responsive Menu -->
		</div><!-- Responsive Header -->
		<section>
			<div class="w-100 position-relative">
				<div class="time-wrap2 w-100">
					<div class="row align-items-center">
						<div class="col-md-12 col-sm-12 col-lg-4">

						</div>
						<div class="col-md-12 col-sm-12 col-lg-8">

						</div>
					</div>
				</div><!-- Time Wrap -->
			</div>
