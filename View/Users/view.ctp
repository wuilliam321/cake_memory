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
			<dt><?php echo __('Nombre Completo'); ?></dt>
			<dd>
				<?php echo $this->Html->link($user['Autore']['nombre_completo'], array('controller' => 'autores', 'action' => 'view', $user['Autore']['id'])); ?></li>
				&nbsp;
			</dd>
		</dl>
	<?php endif; ?>
	</div>
	<div class="related">
	<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($user['Comentario'])): ?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Publicacione'); ?></th>
				<th><?php echo __('Texto'); ?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($user['Comentario'] as $comentario): ?>
				<tr>
					<td><?php echo $this->Html->link($comentario['Publicacione']['titulo'], array('controller' => 'publicaciones', 'action' => 'view', $comentario['Publicacione']['id'])); ?></td>
					<td><?php echo $this->Html->link($comentario['texto'], array('controller' => 'comentarios', 'action' => 'view', $comentario['id'])); ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>
