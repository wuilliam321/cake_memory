<div id="content-inner" class="institutos form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'institutos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'institutos', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'institutos', 'action' => 'edit', $this->request->data['Instituto']['id']), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Instituto'); ?>
		<?php echo $this->Form->input('id'); ?>
		<fieldset>
			<h2><?php echo __('Edit Instituto'); ?></h2>
			<div class="row-fluid">
				<?php echo $this->Form->input('nombre', array('class' => 'span12', 'rows' => 2, 'div' => array('class' => 'span5'))); ?>
				<?php echo $this->Form->input('direccion', array('class' => 'span12', 'rows' => 2, 'div' => array('class' => 'span7'))); ?>
			</div>
			<?php $i = 0; ?>
			<?php foreach ($this->request->data['Unidadinvestigacione'] as $unidadinvestigacione): ?>
				<?php if ($i == 0): ?>
					<div class="row-fluid">
				<?php endif; ?>
				<?php if (($i % 2) == 0): ?>
					</div>
					<div class="row-fluid">
				<?php endif; ?>
				<div class="span6 well">
					<div class="row-fluid">
						<div class="span12">
							<?php echo $this->Form->input('Unidadinvestigacione.'  . $i . '.id', array('type' => 'hidden')); ?>
							<?php echo $this->Form->input('Unidadinvestigacione.'  . $i . '.instituto_id', array('type' => 'hidden')); ?>
							<?php echo $this->Form->input('Unidadinvestigacione.'  . $i . '.unidadinvestigaciontipo_id', array('class' => 'span12', 'div' => false)); ?>
							<?php echo $this->Form->input('Unidadinvestigacione.'  . $i . '.nombre', array('rows' => 2, 'class' => 'span12', 'div' => false)); ?>
						</div>
					</div>
				</div>
				<?php if ($i == sizeof($this->request->data['Unidadinvestigacione']) - 1): ?>
					</div>
				<?php endif; ?>
				<?php $i++; ?>
			<?php endforeach; ?>
			<div class="row-fluid">
				<?php echo $this->Html->link('Agregar Unidadinvestigacione', array('controller' => 'unidadinvestigaciones', 'action' => 'add', $this->request->data['Instituto']['id']), array('class' => 'btn btn-primary btn-small')); ?>
			</div>
		</fieldset>
		<div class="form-actions">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => false, 'class' => 'btn btn-primary btn-large')); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'publicaciones', 'action' => 'index'), array('div' => false, 'class' => 'btn cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>