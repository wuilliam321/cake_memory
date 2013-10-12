<div id="content-inner" class="publicaciones index is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'publicaciones', 'action' => 'add')); ?></li>
		</ul>
	</div>
	<?php echo $this->element('buscar'); ?>
</div>