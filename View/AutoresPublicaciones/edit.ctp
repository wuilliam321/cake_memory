<div id="content-inner" class="autoresPublicaciones form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'autoresPublicaciones', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'autoresPublicaciones', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'autoresPublicaciones', 'action' => 'edit', $this->request->data['AutoresPublicacione']['id']), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('AutoresPublicacione'); ?>
		<fieldset>
			<h2><?php echo __('Edit Autores Publicacione'); ?></h2>
			<div class="row-fluid">
				<?php echo $this->Form->input('id', array('class' => 'span12', 'div' => array('class' => 'span12'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('publicacione_id', array('class' => 'span12', 'div' => array('class' => 'span12'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('autore_id', array('class' => 'span12', 'div' => array('class' => 'span12'))); ?>
			</div>
		</fieldset>
		<div class="form-actions">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => false, 'class' => 'btn btn-primary btn-large')); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'publicaciones', 'action' => 'index'), array('div' => false, 'class' => 'btn cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>