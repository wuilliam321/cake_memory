	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'etiquetas', 'action' => 'add', ($publicacione['Publicacione']['id']) ? $publicacione['Publicacione']['id'] : ''), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Etiqueta'); ?>
		<fieldset>
			<h2><?php echo __('Add Etiqueta'); ?></h2>
			<div class="row-fluid">
				<?php if ($publicacione['Publicacione']['id']): ?>
					<h3>Publicación: <?php echo $publicacione['Publicacione']['titulo']; ?></h3>
					<?php echo $this->Form->input('Publicacione', array('type' => 'hidden', 'value' => $publicacione['Publicacione']['id'])); ?>
				<?php endif; ?>
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