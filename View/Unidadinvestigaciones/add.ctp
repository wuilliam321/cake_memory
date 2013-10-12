<div id="content-inner" class="unidadinvestigaciones form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'unidadinvestigaciones', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'unidadinvestigaciones', 'action' => 'add'), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Unidadinvestigacione'); ?>
		<fieldset>
			<h2><?php echo __('Add Unidadinvestigacione'); ?></h2>
			<div class="row-fluid">
				<?php if (!empty($instituto)): ?>
					<h4>Instituto: <?php echo $instituto['Instituto']['nombre']; ?></h4>
					<?php echo $this->Form->input('instituto_id', array('type' => 'hidden', 'value' => $instituto['Instituto']['id'])); ?>
				<?php else: ?>
					<?php echo $this->Form->input('instituto_id', array('class' => 'span12', 'div' => array('class' => 'span12'))); ?>
				<?php endif; ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('unidadinvestigaciontipo_id', array('class' => 'span12', 'div' => array('class' => 'span12'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('nombre', array('class' => 'span12', 'div' => array('class' => 'span12'))); ?>
			</div>
		</fieldset>
		<div class="form-actions">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => false, 'class' => 'btn btn-primary btn-large')); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'publicaciones', 'action' => 'index'), array('div' => false, 'class' => 'btn cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>