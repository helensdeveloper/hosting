<!DOCTYPE html>
<html>
<head>
	<title>Administrator Login</title>
	<link rel="stylesheet" href="<?=base_url('themes/css/styleform.css')?>">
	<link rel="icon" href="<?=base_url('themes/img/icon.png')?>" type="image/x-icon"/>
</head>
<body>
	<div class="login">
		<h1>Login</h1>
		<form method="post" autocomplete="off" action="<?=base_url('adminlogin/login')?>">
			<input type="text" name="u" placeholder="Username" required="required" />
			<input type="password" name="p" placeholder="Password" required="required" />
			<button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
			<?php echo $this->session->flashdata('msg'); ?>
		</form>
	</div>
</body>
</html>