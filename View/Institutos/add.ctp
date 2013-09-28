<div id="content-inner" class="institutos form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'institutos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'institutos', 'action' => 'add'), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Instituto'); ?>
		<fieldset>
			<h2><?php echo __('Add Instituto'); ?></h2>
			<div class="row-fluid">
				<?php echo $this->Form->input('nombre', array('class' => 'span12', 'rows' => 2, 'div' => array('class' => 'span5'))); ?>
				<?php echo $this->Form->input('direccion', array('class' => 'span12', 'rows' => 2, 'div' => array('class' => 'span7'))); ?>
			</div>
		</fieldset>
		<div class="form-actions">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => false, 'class' => 'btn btn-primary btn-large')); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'publicaciones', 'action' => 'index'), array('div' => false, 'class' => 'btn cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>