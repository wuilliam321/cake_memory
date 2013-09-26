<div class="autoresPublicaciones form">
<?php echo $this->Form->create('AutoresPublicacione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Autores Publicacione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('publicacione_id');
		echo $this->Form->input('autore_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AutoresPublicacione.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AutoresPublicacione.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Autores Publicaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Publicaciones'), array('controller' => 'publicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacione'), array('controller' => 'publicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Autores'), array('controller' => 'autores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
	</ul>
</div>
