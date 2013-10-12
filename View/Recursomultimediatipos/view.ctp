<div id="content-inner" class="recursomultimediatipos view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'recursomultimediatipos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'recursomultimediatipos', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'recursomultimediatipos', 'action' => 'edit', $recursomultimediatipo['Recursomultimediatipo']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'recursomultimediatipos', 'action' => 'view', $recursomultimediatipo['Recursomultimediatipo']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $recursomultimediatipo['Recursomultimediatipo']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
	<h2><?php echo __('Recursomultimediatipo'); ?></h2>
	<dl>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($recursomultimediatipo['Recursomultimediatipo']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Recursomultimedia'); ?></h3>
	<?php if (!empty($recursomultimediatipo['Recursomultimedia'])): ?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Publicacione'); ?></th>
				<th><?php echo __('Nombre'); ?></th>
				<th><?php echo __('Descripcion'); ?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($recursomultimediatipo['Recursomultimedia'] as $recursomultimedia): ?>
				<tr>
					<td><?php echo $this->Html->link($recursomultimedia['Publicacione']['titulo'], array('controller' => 'publicaciones', 'action' => 'view', $recursomultimedia['Publicacione']['id'])); ?></td>
					<td><?php echo $recursomultimedia['nombre']; ?></td>
					<td><?php echo $recursomultimedia['descripcion']; ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>
