<div id="content-inner" class="etiquetas form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'etiquetas', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'etiquetas', 'action' => 'add'), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Etiqueta'); ?>
		<fieldset>
			<h2><?php echo __('Add Etiqueta'); ?></h2>
			<div class="row-fluid">
				<h3><?php echo $publicacione['Publicacione']['titulo']; ?></h3>
				<?php echo $this->Form->input('Publicacione', array('type' => 'hidden', 'value' => $publicacione['Publicacione']['id'])); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('nombre', array('class' => 'span12', 'rows' => 1, 'div' => array('class' => 'span12'))); ?>
			</div>
		</fieldset>
		<div class="form-actions">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => false, 'class' => 'btn btn-primary btn-large')); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'publicaciones', 'action' => 'index'), array('div' => false, 'class' => 'btn cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>