<div class="autores form">
<?php echo $this->Form->create('Autore'); ?>
	<fieldset>
		<legend><?php echo __('Add Autore'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('unidadinvestigacione_id');
		echo $this->Form->input('profesione_id');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('email_primario');
		echo $this->Form->input('telefono_primario');
		echo $this->Form->input('email_secundario');
		echo $this->Form->input('telefono_secundario');
		echo $this->Form->input('telefono_otro');
		echo $this->Form->input('linea_investigacion');
		echo $this->Form->input('Publicacione');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Autores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidadinvestigaciones'), array('controller' => 'unidadinvestigaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidadinvestigacione'), array('controller' => 'unidadinvestigaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesiones'), array('controller' => 'profesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesione'), array('controller' => 'profesiones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Otroestudios'), array('controller' => 'otroestudios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Otroestudio'), array('controller' => 'otroestudios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publicaciones'), array('controller' => 'publicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacione'), array('controller' => 'publicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
