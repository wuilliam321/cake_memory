<div id="content-inner" class="otroestudiotipos form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'otroestudiotipos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'otroestudiotipos', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'otroestudiotipos', 'action' => 'edit', $this->request->data['Otroestudiotipo']['id']), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Otroestudiotipo'); ?>
		<fieldset>
			<h2><?php echo __('Edit Otroestudiotipo'); ?></h2>
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