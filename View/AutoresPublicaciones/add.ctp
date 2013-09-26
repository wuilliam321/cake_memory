<div class="autoresPublicaciones form">
<?php echo $this->Form->create('AutoresPublicacione'); ?>
	<fieldset>
		<legend><?php echo __('Add Autores Publicacione'); ?></legend>
	<?php
		echo $this->Form->input('publicacione_id');
		echo $this->Form->input('autore_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Autores Publicaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Publicaciones'), array('controller' => 'publicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacione'), array('controller' => 'publicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Autores'), array('controller' => 'autores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
	</ul>
</div>
