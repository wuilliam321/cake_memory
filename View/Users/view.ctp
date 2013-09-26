<div class="users view">
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Autores'), array('controller' => 'autores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Autores'); ?></h3>
	<?php if (!empty($user['Autore'])): ?>
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
		foreach ($user['Autore'] as $autore): ?>
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
			<li><?php echo $this->Html->link(__('New Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
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
			<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
