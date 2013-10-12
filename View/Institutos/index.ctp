<div id="content-inner" class="institutos index is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'institutos', 'action' => 'add')); ?></li>
		</ul>
	</div>
	<?php echo $this->element('buscar_instituto'); ?>
</div>