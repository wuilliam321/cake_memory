<div id="content-inner" class="autores form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'autores', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'autores', 'action' => 'add'), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Autore'); ?>
		<fieldset>
			<h2><?php echo __('Add Autore'); ?></h2>
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