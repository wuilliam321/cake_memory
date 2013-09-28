<div id="content-inner" class="unidadinvestigaciones form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'unidadinvestigaciones', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'unidadinvestigaciones', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'unidadinvestigaciones', 'action' => 'edit', $this->request->data['Unidadinvestigacione']['id']), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Unidadinvestigacione'); ?>
		<fieldset>
			<h2><?php echo __('Edit Unidadinvestigacione'); ?></h2>
			<div class="row-fluid">
				<?php echo $this->Form->input('id', array('class' => 'span12')); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('instituto_id', array('class' => 'span12')); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('nombre', array('class' => 'span12')); ?>
			</div>
		</fieldset>
		<div class="form-actions">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => false, 'class' => 'btn btn-primary')); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'publicaciones', 'action' => 'index'), array('div' => false, 'class' => 'btn cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>