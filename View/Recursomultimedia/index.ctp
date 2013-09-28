<div id="content-inner" class="recursomultimedia index is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'recursomultimedia', 'action' => 'index'), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<h2><?php echo __('Recursomultimedia'); ?></h2>
	<?php $i = 0; ?>
	<?php foreach($recursomultimedia as $recurso): ?>
		<?php if ($i == 0): ?>
			<div class="row-fluid">
		<?php endif; ?>
		<?php if (($i % 2) == 0): ?>
			</div>
			<div class="row-fluid">
		<?php endif; ?>
		<article class="is-post is-post-excerpt autore span5 offset1">
			<header>
				<!--
					Note: Titles and bylines will wrap automatically when necessary, so don't worry
					if they get too long. You can also remove the "byline" span entirely if you don't
					need a byline.
				-->
				<h2><?php echo $this->Html->link($recurso['Recursomultimedia']['nombre'], array('controller' => 'recursomultimedia', 'action' => 'view', $recurso['Recursomultimedia']['id'])); ?></h2>
				<span class="byline"><?php echo $recurso['Recursomultimedia']['descripcion']; ?></span>
			</header>
			<div class="info">
				<span class="date"><?php echo $recurso['Recursomultimediatipo']['nombre']; ?></span>
				<ul class="stats">
					<li><a href="#" class="link-icon24 link-icon24-1">16</a></li>
					<li><a href="#" class="link-icon24 link-icon24-2">32</a></li>
					<li><a href="#" class="link-icon24 link-icon24-3">64</a></li>
					<li><a href="#" class="link-icon24 link-icon24-4">128</a></li>
				</ul>
			</div>
			<ul>
				<li><?php echo $recurso['Recursomultimedia']['ruta']; ?></li>
				<li><label>Publicado en:</label> <?php echo $this->Html->link($recurso['Publicacione']['titulo'], array('controller' => 'publicaciones', 'action' => 'view', $recurso['Publicacione']['id'])); ?></li>
			</ul>
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $recurso['Recursomultimedia']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $recurso['Recursomultimedia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $recurso['Recursomultimedia']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?>
		</article>
		<?php if ($i == sizeof($recursomultimedia) - 1): ?>
			</div>
		<?php endif; ?>
		<?php $i++; ?>
	<?php endforeach; ?>
</div>