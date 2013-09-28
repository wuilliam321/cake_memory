<div id="content-inner" class="autores form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'autores', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'autores', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'autores', 'action' => 'edit', $this->request->data['Autore']['id']), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Autore'); ?>
		<?php echo $this->Form->input('id'); ?>
		<fieldset>
			<h2><?php echo __('Edit Autore'); ?></h2>
			<h3><?php echo __('Datos Institucionales'); ?></h3>
			<div class="row-fluid">
				<?php echo $this->Form->input('user_id', array('class' => 'span12', 'div' => array('class' => 'span12'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('unidadinvestigacione_id', array('class' => 'span12', 'div' => array('class' => 'span5'))); ?>
				<?php echo $this->Form->input('linea_investigacion', array('type' => 'text', 'class' => 'span12', 'div' => array('class' => 'span7'))); ?>
			</div>
			<h3><?php echo __('Datos Personales'); ?></h3>
			<div class="row-fluid">
				<?php echo $this->Form->input('profesione_id', array('class' => 'span12', 'div' => array('class' => 'span4'))); ?>
				<?php echo $this->Form->input('nombres', array('class' => 'span12', 'div' => array('class' => 'span4'))); ?>
				<?php echo $this->Form->input('apellidos', array('class' => 'span12', 'div' => array('class' => 'span4'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('email_primario', array('class' => 'span12', 'div' => array('class' => 'span6'))); ?>
				<?php echo $this->Form->input('email_secundario', array('class' => 'span12', 'div' => array('class' => 'span6'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('telefono_primario', array('class' => 'span12', 'div' => array('class' => 'span4'))); ?>
				<?php echo $this->Form->input('telefono_secundario', array('class' => 'span12', 'div' => array('class' => 'span4'))); ?>
				<?php echo $this->Form->input('telefono_otro', array('class' => 'span12', 'div' => array('class' => 'span4'))); ?>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<h3><?php echo __('Otroestudios'); ?></h3>
					<?php if (empty($this->request->data['Otroestudio'])): ?>
						<p>El Autor no posee estudios registrados, puede proceder a registrarlos.</p>
					<?php endif; ?>
				</div>
			</div>
			<?php $i = 0; ?>
			<?php foreach ($this->request->data['Otroestudio'] as $otroestudio): ?>
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
							<?php echo $this->Form->input('Otroestudio.'  . $i . '.id', array('type' => 'hidden')); ?>
							<?php echo $this->Form->input('Otroestudio.'  . $i . '.autore_id', array('type' => 'hidden')); ?>
							<?php echo $this->Form->input('Otroestudio.'  . $i . '.otroestudiotipo_id', array('class' => 'span12', 'div' => false)); ?>
							<?php echo $this->Form->input('Otroestudio.'  . $i . '.nombre', array('rows' => 2, 'class' => 'span12', 'div' => false)); ?>
						</div>
					</div>
				</div>
				<?php if ($i == sizeof($this->request->data['Otroestudio']) - 1): ?>
					</div>
				<?php endif; ?>
				<?php $i++; ?>
			<?php endforeach; ?>
			<div class="row-fluid">
				<?php echo $this->Html->link('Agregar Estudios', array('controller' => 'otroestudios', 'action' => 'add', $this->request->data['Autore']['id']), array('class' => 'btn btn-primary btn-small')); ?>
			</div>
			<h3><?php echo __('Publicaciones en las que participa'); ?></h3>
			<div class="row-fluid">
				<?php echo $this->Form->input('Publicacione', array('class' => 'span12 checkbox', 'label' => false, 'multiple' => 'checkbox', 'div' => array('class' => 'span12'))); ?>
			</div>
		</fieldset>
		<div class="form-actions">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => false, 'class' => 'btn btn-primary btn-large')); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'publicaciones', 'action' => 'index'), array('div' => false, 'class' => 'btn cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>