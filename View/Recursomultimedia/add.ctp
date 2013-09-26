<div class="recursomultimedia form">
<?php echo $this->Form->create('Recursomultimedia'); ?>
	<fieldset>
		<legend><?php echo __('Add Recursomultimedia'); ?></legend>
	<?php
		echo $this->Form->input('recursomultimediatipo_id');
		echo $this->Form->input('publicacione_id');
		echo $this->Form->input('ruta');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Recursomultimedia'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recursomultimediatipos'), array('controller' => 'recursomultimediatipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recursomultimediatipo'), array('controller' => 'recursomultimediatipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publicaciones'), array('controller' => 'publicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacione'), array('controller' => 'publicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
