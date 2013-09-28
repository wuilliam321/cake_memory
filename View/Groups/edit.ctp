<div id="content-inner" class="groups form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'groups', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'groups', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'groups', 'action' => 'edit', $this->request->data['Group']['id']), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Group'); ?>
		<fieldset>
			<h2><?php echo __('Edit Group'); ?></h2>
			<div class="row-fluid">
				<?php echo $this->Form->input('id', array('class' => 'span12', 'div' => array('class' => 'span12'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('name', array('class' => 'span12', 'div' => array('class' => 'span12'))); ?>
			</div>
		</fieldset>
		<div class="form-actions">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => false, 'class' => 'btn btn-primary btn-large')); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'publicaciones', 'action' => 'index'), array('div' => false, 'class' => 'btn cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>