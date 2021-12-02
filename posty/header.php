	<!DOCTYPE html>
	<html lang="ru">
	<head>
		<meta charset="UTF-8">  
		<!--meta name="viewport" content="width=1200px"-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />            
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>	
		<!--script src="<? bloginfo('template_url') ?>/js/jquery-3.4.1.min.js"></script-->	
		<?php wp_head(); ?>
		<script>
			jQuery.noConflict();
		</script>			
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&family=Roboto:ital,wght@0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<? bloginfo('template_url') ?>/result/css/slick.css">
		<link rel="stylesheet" href="<? bloginfo('template_url') ?>/result/css/main.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>

	<div class="wrapper">
		<header class="header">
			<div class="head">
				<div class="contain">
					<div class="head-w">
						<a href="#" class="head-logo">#хакеры_фитнеса</a>
						<div class="col-mnu">
							<div class="hidden-mnu">
								<a href="#" class="toggle-mnu"><span></span></a>
							</div>
							<div class="top-mnu">
								<?php wp_nav_menu('menu=top-mnu'); ?>
							</div>
						</div>	
					</div>
				</div>
			</div> 
		</header>