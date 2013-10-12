<div id="content-inner" class="otroestudios form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'otroestudios', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'otroestudios', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'otroestudios', 'action' => 'edit', $this->request->data['Otroestudio']['id']), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Otroestudio'); ?>
		<?php echo $this->Form->input('id'); ?>
		<fieldset>
			<h2><?php echo __('Edit Otroestudio'); ?></h2>
			<div class="row-fluid">
			</div>
			<div class="row-fluid">
				<h3><?php echo __('Autore'); ?>: <?php echo $autore['Autore']['nombre_completo']; ?></h3>
				<?php echo $this->Form->input('autore_id', array('type' => 'hidden')); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('otroestudiotipo_id', array('class' => 'span12', 'div' => array('class' => 'span6'))); ?>
				<?php echo $this->Form->input('nombre', array('rows' => 2, 'class' => 'span12', 'div' => array('class' => 'span6'))); ?>
			</div>
		</fieldset>
		<div class="form-actions">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => false, 'class' => 'btn btn-primary btn-large')); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'publicaciones', 'action' => 'index'), array('div' => false, 'class' => 'btn cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>