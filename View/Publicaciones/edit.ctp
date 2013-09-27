<div id="content-inner" class="container publicaciones form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'publicaciones', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'publicaciones', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'publicaciones', 'action' => 'edit', $this->request->data['Publicacione']['id']), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Publicacione'); ?>
		<fieldset>
			<h2><?php echo __('Edit Publicacione'); ?></h2>
			<div class="row-fluid">
				<?php echo $this->Form->input('id', array('class' => 'span12')); ?>
			</div>
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
				<?php echo $this->Form->input('Autore', array('class' => 'span12 checkbox', 'multiple' => 'checkbox')); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('Etiqueta', array('class' => 'span12 checkbox', 'multiple' => 'checkbox')); ?>
			</div>
		</fieldset>
		<div class="submit-block">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => array('class' => 'submit-btn'))); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'publicaciones', 'action' => 'index'), array('class' => 'cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>