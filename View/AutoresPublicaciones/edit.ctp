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
			<div class="input-block">
				<?php echo $this->Form->input('id'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('publicacione_id'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('autore_id'); ?>
			</div>
		</fieldset>
		<div class="submit-block">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => array('class' => 'submit-btn'))); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'autoresPublicaciones', 'action' => 'index'), array('class' => 'cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>