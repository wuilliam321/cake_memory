<div id="content-inner" class="recursomultimedia form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'recursomultimedia', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'recursomultimedia', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'recursomultimedia', 'action' => 'edit', $this->request->data['Recursomultimedia']['id']), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Recursomultimedia'); ?>
		<fieldset>
			<h2><?php echo __('Edit Recursomultimedia'); ?></h2>
			<div class="input-block">
				<?php echo $this->Form->input('id'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('recursomultimediatipo_id'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('publicacione_id'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('ruta'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('nombre'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('descripcion'); ?>
			</div>
		</fieldset>
		<div class="submit-block">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => array('class' => 'submit-btn'))); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'recursomultimedia', 'action' => 'index'), array('class' => 'cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>