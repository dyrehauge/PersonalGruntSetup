<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Technology Denmark <?php wp_title(); ?></title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="icon" href="<?php echo get_option('td_favicon'); ?>" type="image/x-icon">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php wp_head(); ?> 
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-68262865-1', 'auto');
	ga('send', 'pageview');

	</script>
</head>
<body>
	<div class="searcharea">
		<div class="closeme">
			<div class="line1"></div>
			<div class="line2"></div>
		</div>
		<div class="table">
			<div class="cell">
				<?php echo get_search_form( $echo ); ?>
			</div>
		</div>
	</div>


	<div class="overlay"></div>

	<div class="loginmodal">
		<div class="closemodal">
			<div class="line1"></div>
			<div class="line2"></div>
		</div>
		<div class="logo">
			<img src="<?php echo get_option('td_page_logo'); ?>">
		</div>

		<form action="<?php echo get_option('home'); ?>/wp-login.php" method="post">

			<input type="text" name="log" id="log" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" size="20" />

			<input type="password" name="pwd" id="pwd" size="20" />

			<input type="submit" name="submit" value="Log ind" class="button" />

			<label for="rememberme"><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> Remember me</label>
			<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
		</form>
	</div>

	<div class="mobileheader">
		<div class="logomobile">
			<img src="<?php echo get_option('td_page_logo'); ?>">
		</div>
		<div class="pull_menu">
			<div class="line-1"></div>
			<div class="line-2"></div>
			<div class="line-3"></div>
		</div>
	</div>
	<nav>
		<img class="logo" src="<?php echo get_option('td_page_logo'); ?>">

		<ul>
			<li class="smallmobile"><a class="searchit"></a></li>
			<li class="smallmobile"><a class="login"></a></li>
		</ul>
		<?php wp_nav_menu(); ?>
	</nav>