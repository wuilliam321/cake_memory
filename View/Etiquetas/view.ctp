<div id="content-inner" class="etiquetas view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'etiquetas', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'etiquetas', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'etiquetas', 'action' => 'edit', $etiqueta['Etiqueta']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'etiquetas', 'action' => 'view', $etiqueta['Etiqueta']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $etiqueta['Etiqueta']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
		<h2><?php echo __('Etiqueta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($etiqueta['Etiqueta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($etiqueta['Etiqueta']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Publicaciones'); ?></h3>
	<?php if (!empty($etiqueta['Publicacione'])): ?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Titulo'); ?></th>
				<th><?php echo __('Descripcion Corta'); ?></th>
				<th><?php echo __('Contenido'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($etiqueta['Publicacione'] as $publicacione): ?>
				<tr>
					<td><?php echo $publicacione['id']; ?></td>
					<td><?php echo $publicacione['titulo']; ?></td>
					<td><?php echo $publicacione['descripcion_corta']; ?></td>
					<td><?php echo $publicacione['contenido']; ?></td>
					<td><?php echo $publicacione['created']; ?></td>
					<td><?php echo $publicacione['modified']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('controller' => 'publicaciones', 'action' => 'view', $publicacione['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'publicaciones', 'action' => 'edit', $publicacione['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'publicaciones', 'action' => 'delete', $publicacione['id']), null, __('Are you sure you want to delete # %s?', $publicacione['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Agregar Publicacione'), array('controller' => 'publicaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
