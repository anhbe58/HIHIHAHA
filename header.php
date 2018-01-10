
<!DOCTYPE html>
<html "<?php language_attributes(); ?>" />
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>
<body <?php body_class(  ); ?> >
	<div class='container' id="container-wed">	
		<div class="header-wrap row">
			<div class="header-left col-md-6">
				<div class="header-left-child row">
					<div class='left col-md-5'>
						<div class="logo p-icon">
                    		<a href="/" title="Custom PCB Prototype Manufacturer">PCBWay</a>
                		</div>
					</div>
					<div class='right row col-md-7 secondary-branding'>
						<div class='branding-top'><h1>PCBWay PCB Prototype the Easy Way</h1></div>
						<div class='branding-bot'><h1>Full feature custom PCB<BR> prototype service.</h1></div>
					</div>
					<!-- <?php header_left_setup(  ); ?> -->
				</div>
			</div>
			<div class="header-right col-md-6">
				<?php header_right_setup(  ); ?>
			</div>
		</div>
		<nav id="nav-primary"class="navbar navbar-inverse navbar-static-top row">
			<div class="navbar-header col-md-1">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a href="" id='navbar-brand' class="navbar-brand">PCBTOT</a>
	        </div>
			<?php pcbtot_menu_setup( 'primary-menu' ); /*col-md-8*/ ?>  
			<div class='mail-service col-md-3'><i class="p-icon"></i>service@pcbtot.com</div>
		</nav>
		