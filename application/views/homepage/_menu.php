<nav class="classy-navbar justify-content-between" id="hamiNav">
	<a class="nav-brand" href="<?=base_url('')?>"><img width="150px" src="<?=base_url('themes/img/HelensCloudLogo.png')?>" alt=""></a>
	<div class="classy-navbar-toggler">
		<span class="navbarToggler"><span></span><span></span><span></span></span>
	</div>
	<div class="classy-menu">
		<div class="classycloseIcon">
			<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
		</div>
		<div class="classynav">
			<ul id="nav">
				<li><a href="<?=base_url('')?>">Home</a></li>
				<li><a href="#">Hosting</a>
					<ul class="dropdown">
						<li><a href="<?=base_url('hosting')?>"><i class="fa fa-database"> Unlimited Hosting</i></a></li>
						<li><a href="<?=base_url('reseller')?>"><i class="fa fa-exchange"> Reseller Hosting</i></a></li>
					</ul>
				</li>
				<li><a href="#">Server</a>
					<ul class="dropdown">
						<li><a href="<?=base_url('')?>"><i class="fa fa-server"> VPS Server Indonesia</i></a></li>
					</ul>
				</li>
			</ul>
			<div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
				<a href="<?=base_url('login')?>" class="btn hami-btn live--chat--btn"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
			</div>
		</div>
	</div>
</nav>