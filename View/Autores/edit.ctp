<div id="content-inner" class="autores form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'autores', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'autores', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'autores', 'action' => 'edit', $this->request->data['Autore']['id']), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Autore'); ?>
		<fieldset>
			<h2><?php echo __('Edit Autore'); ?></h2>
			<div class="input-block">
				<?php echo $this->Form->input('id'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('user_id'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('unidadinvestigacione_id'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('profesione_id'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('nombres'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('apellidos'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('email_primario'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('telefono_primario'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('email_secundario'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('telefono_secundario'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('telefono_otro'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('linea_investigacion'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('Publicacione'); ?>
			</div>
		</fieldset>
		<div class="submit-block">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => array('class' => 'submit-btn'))); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'autores', 'action' => 'index'), array('class' => 'cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>