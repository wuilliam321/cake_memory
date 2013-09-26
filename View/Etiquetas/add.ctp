<div class="etiquetas form">
<?php echo $this->Form->create('Etiqueta'); ?>
	<fieldset>
		<legend><?php echo __('Add Etiqueta'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('Publicacione');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Etiquetas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Publicaciones'), array('controller' => 'publicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacione'), array('controller' => 'publicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
