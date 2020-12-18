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

<section class="welcome-area">
	<div class="welcome-pattern">
		<img src="<?=base_url('themes/img/core-img/welcome-pattern.png')?>" alt="">
	</div>
	<div class="welcome-slides owl-carousel">
		<div class="single-welcome-slide">
			<div class="welcome-content h-100">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-12 col-md-9 col-lg-7">
							<div class="welcome-text mb-50">
								<h2 data-animation="fadeInUpBig" data-delay="200ms" data-duration="1s">Unlimited <br> Web Hosting</h2>
								<h3 data-animation="fadeInUpBig" data-delay="400ms" data-duration="1s">Rp. 150.000 / Tahun*</h3>
								<a href="#" class="btn hami-btn btn-2" data-animation="fadeInUpBig" data-delay="600ms" data-duration="1s">Get Start Now!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="welcome-thumbnail">
				<img src="<?=base_url('themes/img/bg-img/5.png')?>" alt="">
			</div>
		</div>
	</div>
	<div class="clouds">
		<img src="<?=base_url('themes/img/core-img/cloud-1.png')?>" alt="" class="cloud-1">
		<img src="<?=base_url('themes/img/core-img/cloud-2.png')?>" alt="" class="cloud-2">
		<img src="<?=base_url('themes/img/core-img/cloud-3.png')?>" alt="" class="cloud-3">
		<img src="<?=base_url('themes/img/core-img/cloud-4.png')?>" alt="" class="cloud-4">
		<img src="<?=base_url('themes/img/core-img/cloud-5.png')?>" alt="" class="cloud-5">
	</div>
</section>
<!-- <section class="find-domain-area section-padding-100-0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-4">
				<div class="domain-text mb-100">
					<h2>Temukan Domain Terbaik Anda</h2>
				</div>
			</div>
			<div class="col-12 col-md-8">
				<div class="domain-search-form mb-100">
					<form action="#" method="post" class="form-inline">
						<input type="search" placeholder="Enter Your Domain Name Here">
						<select name="domain-extension" id="domainExtension">
							<option value=".com">.COM</option>
							<option value=".com">.NET</option>
							<option value=".com">.ORG</option>
							<option value=".com">.US</option>
							<option value=".com">.BIZ</option>
							<option value=".com">.CO</option>
						</select>
						<button type="submit">Search Domain</button>
					</form>
					<div class="domain-price-help mt-50 d-flex align-items-center justify-content-between">
						<p>.COM Rp.130.000</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<section class="hami-features-area bg-gray section-padding-100">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-heading text-center">
					<h2>Helens Hosting</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6 col-lg-4">
				<div class="single-feature-area d-flex mb-50">
					<div class="feature-icon">
						<i class="icon_cloud-upload_alt"></i>
					</div>
					<div class="feature-text">
						<h5>Berbasis Teknologi Cloud Server</h5>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-4">
				<div class="single-feature-area d-flex mb-50">
					<div class="feature-icon">
						<i class="icon_adjust-vert"></i>
					</div>
					<div class="feature-text">
						<h5>Control Panel Terbaik Dari Cpanel</h5>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-4">
				<div class="single-feature-area d-flex mb-50">
					<div class="feature-icon">
						<i class="icon_archive_alt"></i>
					</div>
					<div class="feature-text">
						<h5>Backup Harian</h5>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-4">
				<div class="single-feature-area d-flex mb-50">
					<div class="feature-icon">
						<i class="icon_globe-2"></i>
					</div>
					<div class="feature-text">
						<h5>Multiple Datacenter</h5>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-4">
				<div class="single-feature-area d-flex mb-50">
					<div class="feature-icon">
						<i class="icon_shield"></i>
					</div>
					<div class="feature-text">
						<h5>Perlindungan DDoS Attack</h5>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-4">
				<div class="single-feature-area d-flex mb-50">
					<div class="feature-icon">
						<i class="icon_headphones"></i>
					</div>
					<div class="feature-text">
						<h5>Support Terbaik</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="feature-pattern">
		<img src="<?=base_url('themes/img/core-img/welcome-pattern.png')?>" alt="">
	</div>
</section>
<section class="hami-price-plan-area mt-50">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-heading text-center">
					<h2>Pilih Layanan Anda</h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="single-price-plan mb-100">
					<div class="price-plan-title">
						<h4>Unlimited Hosting</h4>
						<p>Start From</p>
					</div>
					<div class="price-plan-value">
						<h2><span>Rp.</span></h2>
					</div>
					<div class="price-plan-value">
						<h2>150.000</h2>
						<p>/per tahun</p>
					</div>
					<a href="<?=base_url('hosting')?>" class="btn hami-btn w-100 mb-30">Get Started</a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4">
				<div class="single-price-plan mb-100">
					<div class="price-plan-title">
						<h4>Reseller Hosting</h4>
						<p>Start From</p>
					</div>
					<div class="price-plan-value">
						<h2><span>Rp.</span></h2>
					</div>
					<div class="price-plan-value">
						<h2>250.000</h2>
						<p>/per month</p>
					</div>
					<a href="#" class="btn hami-btn w-100 mb-30">Get Started</a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4">
				<div class="single-price-plan mb-100">
					<div class="price-plan-title">
						<h4>VPS Server</h4>
						<p>Start From</p>
					</div>
					<div class="price-plan-value">
						<h2><span>Rp.</span></h2>
					</div>
					<div class="price-plan-value">
						<h2>60.000</h2>
						<p>/per month</p>
					</div>
					<a href="#" class="btn hami-btn w-100 mb-30">Get Started</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="hami-call-to-action bg-gray section-padding-100-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-heading text-center">
					<h2>What Clients Say?</h2>
					<p>Our extensive expertise will make sure that yours is a SUCCESS STORY once again!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="testimonial-slide owl-carousel">
					<div class="single-testimonial-area">
						<div class="testimonial-content">
							<!-- Ratings & Quote -->
							<div class="ratings-icon d-flex align-items-center justify-content-between">
								<div class="rating">
									<i class="icon_star" aria-hidden="true"></i>
									<i class="icon_star" aria-hidden="true"></i>
									<i class="icon_star" aria-hidden="true"></i>
									<i class="icon_star" aria-hidden="true"></i>
									<i class="icon_star" aria-hidden="true"></i>
								</div>
								<div class="quote-icon">
									<img src="img/core-img/quote.png" alt="">
								</div>
							</div>
							<h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam beatae quaerat delectus saepe hic rem molestias quis incidunt consequuntur magni modi ea necessitatibus, excepturi fugit soluta, cupiditate accusantium! Veniam, illo?</h5>
						</div>
						<!-- Testimonial -->
						<div class="testimonial-thumbnail-title d-flex align-items-center">
							<div class="testimonial-thumbnail">
								<img src="img/bg-img/11.jpg" alt="">
							</div>
							<div class="testimonial-title">
								<h5>Roy Long</h5>
								<span>CEO Colorlib</span>
							</div>
						</div>
					</div>
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