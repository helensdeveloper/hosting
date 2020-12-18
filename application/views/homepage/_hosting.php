<div id="preloader">
	<div class="loader"></div>
</div>

<header class="header-area">
	<?php $this->load->view('homepage/_header') ?>
	<div class="main-header-area">
		<div class="classy-nav-container breakpoint-off">
			<div class="container">
				<?php $this->load->view('homepage/_menu') ; ?>
				
			</div>
		</div>
	</div>
</header>

<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumb-content">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url('')?>"><i class="icon_house_alt"></i> Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Hosting</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="hami-price-plan-area section-padding-100-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-heading text-center">
					<h2>Pilih Paket Hosting Anda</h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="single-price-plan active mb-100">
					<div class="popular-tag">
						<i class="icon_star"></i> Best Plan <i class="icon_star"></i>
					</div>
					<div class="price-plan-title">
						<h4>Unlimited Hosting</h4>
					</div>
					<div class="price-plan-value">
						<h2><span>Rp.</span></h2>
					</div>
					<div class="price-plan-value">
						<h2>150.000</h2>
						<p>/per Years</p>
					</div>
					<div class="price-plan-desc">
						<p><i class="icon_check"></i> Unlimited Disk Space</p>
						<p><i class="icon_check"></i> Unlimited Bandwidth</p>
						<p><i class="icon_check"></i> Unlimited Database</p>
						<p><i class="icon_check"></i> Unlimited Addon Domain</p>
						<p><i class="icon_check"></i> Unlimited SSL Gratis Selamanya</p>
						<p><i class="icon_check"></i> Instant Backup</p>
						<p><i class="icon_check"></i> Auto Script Installer</p>
						<p><i class="icon_check"></i> SpamAsassin Mail Protection</p>
						<p><i class="icon_check"></i> Prioritas Layanan Support</p>
						<p><i class="icon_check"></i> 2X Processing Power &amp; Memory</p>
					</div>
					<a href="https://member.helenscloudhost.com/cart.php?a=add&pid=1" class="btn hami-btn w-100 mb-30">Beli Layanan</a>
				</div>
			</div>

		</div>
	</div>
</section>
<section class="hami-support-area bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="support-text">
					<h2>Need help? Call our award-winning support team 24/7: +62 822-88777821</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="support-pattern" style="background-image: url(/themes/img/core-img/support-pattern.png);"></div>
</section>
<?php $this->load->view('homepage/_footer') ; ?>