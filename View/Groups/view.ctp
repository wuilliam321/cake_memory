<div id="content-inner" class="groups view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'groups', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'groups', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'groups', 'action' => 'edit', $group['Group']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'groups', 'action' => 'view', $group['Group']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $group['Group']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
	<h2><?php echo __('Group'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($group['Group']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($group['User'])): ?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Username'); ?></th>
				<th><?php echo __('Autore'); ?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($group['User'] as $user): ?>
				<tr>
					<td><?php echo $this->Html->link($user['username'], array('controller' => 'users', 'action' => 'view', $user['id'])); ?></td>
					<td><?php echo $this->Html->link($user['Autore']['nombre_completo'], array('controller' => 'autores', 'action' => 'view', $user['Autore']['id'])); ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>
