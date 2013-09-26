<div id="content-inner" class="recursomultimediatipos form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'recursomultimediatipos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'recursomultimediatipos', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'recursomultimediatipos', 'action' => 'edit', $this->request->data['Recursomultimediatipo']['id']), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Recursomultimediatipo'); ?>
		<fieldset>
			<h2><?php echo __('Edit Recursomultimediatipo'); ?></h2>
			<div class="input-block">
				<?php echo $this->Form->input('id'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('nombre'); ?>
			</div>
		</fieldset>
		<div class="submit-block">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => array('class' => 'submit-btn'))); ?>
			<?php echo $this->Html->link(__('Cancel'), array('#'), array('class' => 'cancel-btn')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>