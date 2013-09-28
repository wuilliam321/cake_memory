<div id="content-inner" class="users view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'users', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'users', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'users', 'action' => 'edit', $user['User']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'users', 'action' => 'view', $user['User']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
		<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
	<div class="related">
		<h3><?php echo __('Related Autores'); ?></h3>
	<?php if (!empty($user['Autore'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $user['Autore']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
	<?php echo $user['Autore']['user_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Unidadinvestigacione Id'); ?></dt>
		<dd>
	<?php echo $user['Autore']['unidadinvestigacione_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Profesione Id'); ?></dt>
		<dd>
	<?php echo $user['Autore']['profesione_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
	<?php echo $user['Autore']['nombres']; ?>
&nbsp;</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
	<?php echo $user['Autore']['apellidos']; ?>
&nbsp;</dd>
		<dt><?php echo __('Email Primario'); ?></dt>
		<dd>
	<?php echo $user['Autore']['email_primario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Telefono Primario'); ?></dt>
		<dd>
	<?php echo $user['Autore']['telefono_primario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Email Secundario'); ?></dt>
		<dd>
	<?php echo $user['Autore']['email_secundario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Telefono Secundario'); ?></dt>
		<dd>
	<?php echo $user['Autore']['telefono_secundario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Telefono Otro'); ?></dt>
		<dd>
	<?php echo $user['Autore']['telefono_otro']; ?>
&nbsp;</dd>
		<dt><?php echo __('Linea Investigacion'); ?></dt>
		<dd>
	<?php echo $user['Autore']['linea_investigacion']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Autore'), array('controller' => 'autores', 'action' => 'edit', $user['Autore']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($user['Comentario'])): ?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Publicacione Id'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Texto'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($user['Comentario'] as $comentario): ?>
				<tr>
					<td><?php echo $comentario['id']; ?></td>
					<td><?php echo $comentario['publicacione_id']; ?></td>
					<td><?php echo $comentario['user_id']; ?></td>
					<td><?php echo $comentario['texto']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('controller' => 'comentarios', 'action' => 'view', $comentario['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'comentarios', 'action' => 'edit', $comentario['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comentarios', 'action' => 'delete', $comentario['id']), null, __('Are you sure you want to delete # %s?', $comentario['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Agregar Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
