<div class="etiquetasPublicaciones form">
<?php echo $this->Form->create('EtiquetasPublicacione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Etiquetas Publicacione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('etiqueta_id');
		echo $this->Form->input('publicacione_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EtiquetasPublicacione.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EtiquetasPublicacione.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Etiquetas Publicaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Etiquetas'), array('controller' => 'etiquetas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etiqueta'), array('controller' => 'etiquetas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publicaciones'), array('controller' => 'publicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacione'), array('controller' => 'publicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
