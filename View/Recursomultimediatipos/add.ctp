<div class="recursomultimediatipos form">
<?php echo $this->Form->create('Recursomultimediatipo'); ?>
	<fieldset>
		<legend><?php echo __('Add Recursomultimediatipo'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Recursomultimediatipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recursomultimedia'), array('controller' => 'recursomultimedia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recursomultimedia'), array('controller' => 'recursomultimedia', 'action' => 'add')); ?> </li>
	</ul>
</div>
