<div id="content-inner" class="container unidadinvestigaciones view is-post">
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
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($unidadinvestigacione['Unidadinvestigacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instituto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($unidadinvestigacione['Instituto']['nombre'], array('controller' => 'institutos', 'action' => 'view', $unidadinvestigacione['Instituto']['id'])); ?>
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
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Unidadinvestigacione Id'); ?></th>
				<th><?php echo __('Profesione Id'); ?></th>
				<th><?php echo __('Nombres'); ?></th>
				<th><?php echo __('Apellidos'); ?></th>
				<th><?php echo __('Email Primario'); ?></th>
				<th><?php echo __('Telefono Primario'); ?></th>
				<th><?php echo __('Email Secundario'); ?></th>
				<th><?php echo __('Telefono Secundario'); ?></th>
				<th><?php echo __('Telefono Otro'); ?></th>
				<th><?php echo __('Linea Investigacion'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($unidadinvestigacione['Autore'] as $autore): ?>
				<tr>
					<td><?php echo $autore['id']; ?></td>
					<td><?php echo $autore['user_id']; ?></td>
					<td><?php echo $autore['unidadinvestigacione_id']; ?></td>
					<td><?php echo $autore['profesione_id']; ?></td>
					<td><?php echo $autore['nombres']; ?></td>
					<td><?php echo $autore['apellidos']; ?></td>
					<td><?php echo $autore['email_primario']; ?></td>
					<td><?php echo $autore['telefono_primario']; ?></td>
					<td><?php echo $autore['email_secundario']; ?></td>
					<td><?php echo $autore['telefono_secundario']; ?></td>
					<td><?php echo $autore['telefono_otro']; ?></td>
					<td><?php echo $autore['linea_investigacion']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('controller' => 'autores', 'action' => 'view', $autore['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'autores', 'action' => 'edit', $autore['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'autores', 'action' => 'delete', $autore['id']), null, __('Are you sure you want to delete # %s?', $autore['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Agregar Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
