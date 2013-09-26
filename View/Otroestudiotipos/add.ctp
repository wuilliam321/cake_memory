<div class="otroestudiotipos form">
<?php echo $this->Form->create('Otroestudiotipo'); ?>
	<fieldset>
		<legend><?php echo __('Add Otroestudiotipo'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Otroestudiotipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Otroestudios'), array('controller' => 'otroestudios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Otroestudio'), array('controller' => 'otroestudios', 'action' => 'add')); ?> </li>
	</ul>
</div>
