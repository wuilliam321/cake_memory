<div id="content-inner" class="autores index is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'autores', 'action' => 'add')); ?></li>
		</ul>
	</div>
	<?php echo $this->element('buscar_autore'); ?>
</div>