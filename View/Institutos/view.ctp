<div id="content-inner" class="institutos view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'institutos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'institutos', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'institutos', 'action' => 'edit', $instituto['Instituto']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'institutos', 'action' => 'view', $instituto['Instituto']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $instituto['Instituto']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
	<h2><?php echo __('Instituto'); ?></h2>
	<dl>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($instituto['Instituto']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($instituto['Instituto']['direccion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Unidadinvestigaciones'); ?></h3>
	<?php if (!empty($instituto['Unidadinvestigacione'])): ?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Nombre'); ?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($instituto['Unidadinvestigacione'] as $unidadinvestigacione): ?>
				<tr>
					<td><?php echo $this->Html->link($unidadinvestigacione['nombre'], array('controller' => 'unidadinvestigaciones', 'action' => 'view', $unidadinvestigacione['id'])); ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>
