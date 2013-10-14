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
		<?php echo $this->Html->scriptBlock("var BASE_URL = '/cake_memory';"); ?>
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet" />
		<?php echo $this->Html->meta('icon'); ?>
		<?php echo $this->Html->css(array('bootstrap.min', 'bootstrap-responsive.min', 'jqcloud', 'main')); ?>
		<?php echo $this->Html->script(array('jquery.min', 'config', 'skel.min', 'skel-panels.min', 'jquery.highlight', 'ckeditor', 'adapters/jquery', 'config_ck', 'styles', 'lang/es', 'bootstrap.min', 'jqcloud-1.0.4.min', 'main')); ?>
		<noscript>
			<?php echo $this->Html->css(array('skel-noscript', 'style', 'style-desktop', 'style-wide')); ?>
		</noscript>
		<!--[if lte IE 9]><?php echo $this->Html->css(array('ie9')); ?><![endif]-->
		<!--[if lte IE 8]><?php echo $this->Html->script(array('html5shiv')); ?><?php echo $this->Html->css(array('ie8')); ?><![endif]-->
		<!--[if lte IE 7]><?php echo $this->Html->css(array('ie7')); ?><![endif]-->
		<?php
			echo $this->fetch('meta');
			echo $this->fetch('css');
			
			$q = (isset($this->request['named']['q']) ? $this->request['named']['q'] : null);
			$autor = (isset($this->request['named']['autor']) ? $this->request['named']['autor'] : null);
			$etiqueta = (isset($this->request['named']['etiqueta']) ? $this->request['named']['etiqueta'] : null);
			$unidadinvestigacione = (isset($this->request['named']['unidadinvestigacione']) ? $this->request['named']['unidadinvestigacione'] : null);
			$profesione = (isset($this->request['named']['profesione']) ? $this->request['named']['profesione'] : null);
			echo $this->Html->scriptBlock("
				$(function () {
					h = ['$q', '$autor', '$etiqueta', '$unidadinvestigacione', '$profesione'];
					
					$('article').highlight(h);
				});
			"); 
			echo $this->fetch('script');
		?>
	</head>
	<!--
		Note: Set the body element's class to "left-sidebar" to position the sidebar on the left.
		Set it to "right-sidebar" to, you guessed it, position it on the right.
	-->
	<body class="left-sidebar">
		<div class="cintillo row-fluid">
			<div class="span12">
				<?php echo $this->Html->image("cintillo.jpg"); ?>
			</div>
		</div>
		<div class="cintillo row-fluid">
			<div class="span12">
				<div class="row-fluid">
					<div class="span8 offset2">
						<?php echo $this->Html->image("banner_vm.jpg"); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="upper-menu">
			<ul>
				<li><?php echo $this->Html->link("¿Qué es la Memoria Organizacional?", array('controller' => 'pages', 'action' => 'display', 'nosotros')); ?></li>
				<li><?php echo $this->Html->link("Solicitud de Información", array('controller' => 'pages', 'action' => 'display', 'solicitud')); ?></li>
				<li><?php echo $this->Html->link("Publique sus Trabajos", array('controller' => 'publicaciones', 'action' => 'add')); ?></li>
				<li><?php echo $this->Html->link("Suscríbase", array('controller' => 'pages', 'action' => 'display', 'suscripcion')); ?></li>
				<li><?php echo $this->Html->link(__('Ayudas (?)'), array('controller' => 'pages', 'action' => 'display', 'ayudas')); ?></li>
			</ul>
		</div>

		<div id="header">
			<div class="container">
				<ul>
					<li<?php echo ($this->request['controller'] == 'users') ? ' class="current_page_item"' : ''; ?>><?php echo $this->Html->link(__('Usuarios'), array('controller' => 'users', 'action' => 'index')); ?></li>
					<li<?php echo ($this->request['controller'] == 'unidadinvestigaciones') ? ' class="current_page_item"' : ''; ?>><?php echo $this->Html->link(__('Unidades de Investigación'), array('controller' => 'unidadinvestigaciones', 'action' => 'index')); ?></li>
					<li<?php echo ($this->request['controller'] == 'otroestudiotipos') ? ' class="current_page_item"' : ''; ?>><?php echo $this->Html->link(__('Tipos de Estudios'), array('controller' => 'otroestudiotipos', 'action' => 'index')); ?></li>
					<li<?php echo ($this->request['action'] == 'respaldo') ? ' class="current_page_item"' : ''; ?>><?php echo $this->Html->link(__('Respaldo'), array('controller' => 'security', 'action' => 'respaldo')); ?></li>
					<li<?php echo ($this->request['action'] == 'recuperacion') ? ' class="current_page_item"' : ''; ?>><?php echo $this->Html->link(__('Recuperacion'), array('controller' => 'security', 'action' => 'recuperacion')); ?></li>
				</li>
			</div>
		</div>
		<!-- Wrapper -->
		<div id="wrapper">
			<!-- Content -->
				<div id="content" class="container">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
				</div>
			<?php echo $this->element('sidebar'); ?>
		</div>
		<?php echo $this->element('sql_dump'); ?>
	</body>
</html>
