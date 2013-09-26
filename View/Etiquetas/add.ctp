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
			<div class="input-block">
				<?php echo $this->Form->input('nombre'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('Publicacione'); ?>
			</div>
		</fieldset>
		<div class="submit-block">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => array('class' => 'submit-btn'))); ?>
			<?php echo $this->Html->link(__('Cancel'), array('#'), array('class' => 'cancel-btn')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>