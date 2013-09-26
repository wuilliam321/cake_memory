<div class="institutos form">
<?php echo $this->Form->create('Instituto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Instituto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Instituto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Instituto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Institutos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Unidadinvestigaciones'), array('controller' => 'unidadinvestigaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidadinvestigacione'), array('controller' => 'unidadinvestigaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
