<div id="content-inner" class="users form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'users', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'users', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'users', 'action' => 'edit', $this->request->data['User']['id']), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('User'); ?>
		<fieldset>
			<h2><?php echo __('Edit User'); ?></h2>
			<div class="row-fluid">
				<?php echo $this->Form->input('id', array('class' => 'span12', 'div' => array('class' => 'span12'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('group_id', array('class' => 'span12', 'div' => array('class' => 'span12'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('username', array('class' => 'span12', 'div' => array('class' => 'span12'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('password', array('class' => 'span12', 'div' => array('class' => 'span12'))); ?>
			</div>
		</fieldset>
		<div class="form-actions">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => false, 'class' => 'btn btn-primary btn-large')); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'publicaciones', 'action' => 'index'), array('div' => false, 'class' => 'btn cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>