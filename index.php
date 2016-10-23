<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/normalize.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/SourceSansPro.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/font-awesome/css/font-awesome.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	</head>
	<body>
		<header>
			<nav class="container">
				<input type="checkbox" id="mobile-menu-toggle">
				<label for="mobile-menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></label>
				<jdoc:include type="modules" name="global-menu" />				
			</nav>
		</header>
		<main>
			<jdoc:include type="modules" name="logo" />
			<jdoc:include type="modules" name="top" /> 
			<jdoc:include type="component" />
		</main>
		<footer>
			<jdoc:include type="modules" name="footer1" />
		</footer>
	</body>
</html>
