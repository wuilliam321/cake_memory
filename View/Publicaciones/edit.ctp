<div id="content-inner" class="publicaciones form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'publicaciones', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'publicaciones', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'publicaciones', 'action' => 'edit', $this->request->data['Publicacione']['id']), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Publicacione', array('class' => 'validate_change')); ?>
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
				<?php echo $this->Form->input('Autore', array('class' => 'span12 checkbox', 'multiple' => 'checkbox', 'div' => array('class' => 'span6'))); ?>
				<?php echo $this->Form->input('Etiqueta', array('class' => 'span12 checkbox', 'multiple' => 'checkbox', 'div' => array('class' => 'span6'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Html->link('Agregar Recurso Multimedia', array('controller' => 'recursomultimedia', 'action' => 'add', $this->request->data['Publicacione']['id']), array('class' => 'btn btn-primary btn-large')); ?>
			</div>
			
			<?php $i = 0; ?>
			<?php foreach ($this->request->data['Recursomultimedia'] as $recursomultimedia): ?>
				<div class="row-fluid">
					<div class="span10 offset1">
						<div class="row-fluid">
							<?php echo $this->Form->input('Recursomultimedia.'  . $i . '.id', array('type' => 'hidden')); ?>
							<?php echo $this->Form->input('Recursomultimedia.'  . $i . '.publicacione_id', array('type' => 'hidden')); ?>
						</div>
						<div class="row-fluid">
							<?php echo $this->Form->input('Recursomultimedia.'  . $i . '.recursomultimediatipo_id', array('class' => 'span12', 'div' => array('class' => 'span5'))); ?>
							<?php echo $this->Form->input('Recursomultimedia.'  . $i . '.nombre', array('class' => 'span12', 'rows' => 1, 'div' => array('class' => 'span7'))); ?>
						</div>
						<div class="row-fluid">
							<?php echo $this->Form->input('Recursomultimedia.'  . $i . '.ruta', array('class' => 'span12', 'rows' => 2, 'div' => array('class' => 'span12'))); ?>
						</div>
						<div class="row-fluid">
							<?php echo $this->Form->input('Recursomultimedia.'  . $i . '.descripcion', array('class' => 'span12', 'rows' => 4)); ?>
						</div>
					</div>
				</div>
				<?php $i++; ?>
			<?php endforeach; ?>
		</fieldset>
		<div class="form-actions">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => false, 'class' => 'btn btn-primary')); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'publicaciones', 'action' => 'index'), array('div' => false, 'class' => 'btn cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>