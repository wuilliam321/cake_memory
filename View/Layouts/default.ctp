<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Memoria');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
		<?php echo $this->Html->scriptBlock("var BASE_URL = '/mem'"); ?>
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet" />
		<?php echo $this->Html->meta('icon'); ?>
		<?php echo $this->Html->script(array('jquery.min', 'config', 'skel.min', 'skel-panels.min')); ?>
		
		<noscript>
			<?php echo $this->Html->css(array('skel-noscript', 'style', 'style-desktop', 'style-wide')); ?>
		</noscript>
		<!--[if lte IE 9]><?php echo $this->Html->css(array('ie9')); ?><![endif]-->
		<!--[if lte IE 8]><?php echo $this->Html->script(array('html5shiv')); ?><?php echo $this->Html->css(array('ie8')); ?><![endif]-->
		<!--[if lte IE 7]><?php echo $this->Html->css(array('ie7')); ?><![endif]-->
		<?php
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
	</head>
	<!--
		Note: Set the body element's class to "left-sidebar" to position the sidebar on the left.
		Set it to "right-sidebar" to, you guessed it, position it on the right.
	-->
	<body class="left-sidebar">
		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Content -->
				<div id="content">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
				</div>
			<?php echo $this->element('sidebar'); ?>
		</div>
		<?php echo $this->element('sql_dump'); ?>
	</body>
</html>
