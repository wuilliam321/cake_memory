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
				<th><?php echo __('Titulo'); ?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($etiqueta['Publicacione'] as $publicacione): ?>
				<tr>
					<td><?php echo $this->Html->link($publicacione['titulo'], array('controller' => 'publicaciones', 'action' => 'view', $publicacione['id'])); ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>
