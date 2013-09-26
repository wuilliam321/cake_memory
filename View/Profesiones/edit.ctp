<div id="content-inner" class="profesiones form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'profesiones', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'profesiones', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'profesiones', 'action' => 'edit', $this->request->data['Profesione']['id']), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Profesione'); ?>
		<fieldset>
			<h2><?php echo __('Edit Profesione'); ?></h2>
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