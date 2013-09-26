<div id="content-inner" class="publicaciones form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'publicaciones', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'publicaciones', 'action' => 'add'), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Publicacione'); ?>
		<fieldset>
			<h2><?php echo __('Add Publicacione'); ?></h2>
			<div class="input-block">
				<?php echo $this->Form->input('titulo'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('descripcion_corta'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('contenido'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('Autore'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('Etiqueta'); ?>
			</div>
		</fieldset>
		<div class="submit-block">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => array('class' => 'submit-btn'))); ?>
			<?php echo $this->Html->link(__('Cancel'), array('#'), array('class' => 'cancel-btn')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>