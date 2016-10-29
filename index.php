<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/normalize.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/fonts/SourceSansPro/source-sans-pro.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/font-awesome/css/font-awesome.min.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slick/slick-theme.css"/>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	</head>
	<body>
		<header>
			<nav class="container">
				<jdoc:include type="modules" name="header-contacts" />			
				<div class="separator"></div>	
				<input type="checkbox" id="mobile-menu-toggle">
				<label for="mobile-menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></label>
				<jdoc:include type="modules" name="global-menu" />				
			</nav>
		</header>
		<main>
			<jdoc:include type="modules" name="promo" /> 
			<div class="container">
				<jdoc:include type="modules" name="logo" />
				<jdoc:include type="modules" name="feature" /> 
				<jdoc:include type="component" />
				<jdoc:include type="modules" name="subcribe" /> 
			</div>
		</main>
		<footer>
			<div class="container">
				<section class="sub">
					<h3>Подпишитесь на&nbsp;новости</h3>
					<p>и&nbsp;получайте информацию о&nbsp;наших акциях и&nbsp;специальных предложениях</p>
					<jdoc:include type="modules" name="footer-subcribe" />
				</section>
				<section class="copyright">
					<p><img src="images/logo-m.jpg" alt="glan-nails.ru" /></p>
					<p>Сделано c <i class="fa fa-heart" aria-hidden="true"></i> в Москве © 2014</p>
				</section>
				<section>
					<jdoc:include type="modules" name="footer" />
				</section>
			</div>
		</footer>
	</body>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slick/slick.min.js"></script>
	<script type="text/javascript">
	jQuery(function($) {
		$(document).ready(function(){
  			$('.promo').slick({
				autoplay: true,
				arrows:false,
				});
			});
	});
	</script>
</html>
