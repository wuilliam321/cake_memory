<div id="content-inner" class="unidadinvestigaciones view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'unidadinvestigaciones', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'unidadinvestigaciones', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'unidadinvestigaciones', 'action' => 'edit', $unidadinvestigacione['Unidadinvestigacione']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'unidadinvestigaciones', 'action' => 'view', $unidadinvestigacione['Unidadinvestigacione']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $unidadinvestigacione['Unidadinvestigacione']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
	<h2><?php echo __('Unidadinvestigacione'); ?></h2>
	<dl>
		<dt><?php echo __('Instituto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($unidadinvestigacione['Instituto']['nombre'], array('controller' => 'institutos', 'action' => 'view', $unidadinvestigacione['Instituto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unidadinvestigaciontipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($unidadinvestigacione['Unidadinvestigaciontipo']['nombre'], array('controller' => 'unidadinvestigaciontipos', 'action' => 'view', $unidadinvestigacione['Unidadinvestigaciontipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($unidadinvestigacione['Unidadinvestigacione']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Autores'); ?></h3>
	<?php if (!empty($unidadinvestigacione['Autore'])): ?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Nombre Completo'); ?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($unidadinvestigacione['Autore'] as $autore): ?>
				<tr>
					<td><?php echo $this->Html->link($autore['nombre_completo'], array('controller' => 'autores', 'action' => 'view', $autore['id'])); ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>
