<div class="otroestudios form">
<?php echo $this->Form->create('Otroestudio'); ?>
	<fieldset>
		<legend><?php echo __('Add Otroestudio'); ?></legend>
	<?php
		echo $this->Form->input('autore_id');
		echo $this->Form->input('otroestudiotipo_id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Otroestudios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Autores'), array('controller' => 'autores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Otroestudiotipos'), array('controller' => 'otroestudiotipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Otroestudiotipo'), array('controller' => 'otroestudiotipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
