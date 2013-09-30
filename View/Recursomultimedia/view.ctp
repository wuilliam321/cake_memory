<div id="content-inner" class="recursomultimedia view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'recursomultimedia', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'recursomultimedia', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'recursomultimedia', 'action' => 'edit', $recursomultimedia['Recursomultimedia']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'recursomultimedia', 'action' => 'view', $recursomultimedia['Recursomultimedia']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $recursomultimedia['Recursomultimedia']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
	<h2><?php echo __('Recursomultimedia'); ?></h2>
	<dl>
		<dt><?php echo __('Recursomultimediatipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recursomultimedia['Recursomultimediatipo']['nombre'], array('controller' => 'recursomultimediatipos', 'action' => 'view', $recursomultimedia['Recursomultimediatipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publicacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recursomultimedia['Publicacione']['titulo'], array('controller' => 'publicaciones', 'action' => 'view', $recursomultimedia['Publicacione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ruta'); ?></dt>
		<dd>
			<?php echo h($recursomultimedia['Recursomultimedia']['ruta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($recursomultimedia['Recursomultimedia']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($recursomultimedia['Recursomultimedia']['descripcion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
