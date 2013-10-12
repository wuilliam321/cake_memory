<div id="content-inner" class="unidadinvestigaciontipos view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'unidadinvestigaciontipos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'unidadinvestigaciontipos', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'unidadinvestigaciontipos', 'action' => 'edit', $unidadinvestigaciontipo['Unidadinvestigaciontipo']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'unidadinvestigaciontipos', 'action' => 'view', $unidadinvestigaciontipo['Unidadinvestigaciontipo']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $unidadinvestigaciontipo['Unidadinvestigaciontipo']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
	<h2><?php echo __('Unidadinvestigaciontipo'); ?></h2>
	<dl>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($unidadinvestigaciontipo['Unidadinvestigaciontipo']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Unidadinvestigaciones'); ?></h3>
	<?php if (!empty($unidadinvestigaciontipo['Unidadinvestigacione'])): ?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Instituto'); ?></th>
				<th><?php echo __('Nombre'); ?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($unidadinvestigaciontipo['Unidadinvestigacione'] as $unidadinvestigacione): ?>
				<tr>
					<td><?php echo $this->Html->link($unidadinvestigacione['Instituto']['nombre'], array('controller' => 'institutos', 'action' => 'view', $unidadinvestigacione['Instituto']['id'])); ?></td>
					<td><?php echo $this->Html->link($unidadinvestigacione['nombre'], array('controller' => 'unidadinvestigaciones', 'action' => 'view', $unidadinvestigacione['id'])); ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>
