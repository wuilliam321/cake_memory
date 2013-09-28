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
			<div class="row-fluid">
				<?php echo $this->Form->input('titulo', array('class' => 'span12', 'rows' => 1)); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('descripcion_corta', array('class' => 'span12', 'rows' => 1)); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('contenido', array('class' => 'span12 editor')); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('Autore', array('class' => 'span12 checkbox', 'multiple' => 'checkbox', 'div' => array('class' => 'span6'))); ?>
				<?php echo $this->Form->input('Etiqueta', array('class' => 'span12 checkbox', 'multiple' => 'checkbox', 'div' => array('class' => 'span6'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->button('Agregar Recurso Multimedia', array('class' => 'btn btn-primary btn-large disabled')); ?>
				<p>Para agregar recursos multimedia debe guardar la publicación</p>
			</div>
		</fieldset>
		<div class="form-actions">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => false, 'class' => 'btn btn-primary')); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'publicaciones', 'action' => 'index'), array('div' => false, 'class' => 'btn cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>