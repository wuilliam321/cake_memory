<div id="content-inner" class="users index is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'users', 'action' => 'index'), array('class' => 'active')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'users', 'action' => 'add')); ?></li>
		</ul>
	</div>
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($users as $user): ?>
			<tr>
				<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
				<td>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
		</td>
				<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $user['User']['id'])); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?>
					<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
	<div class="paging-block">
		<p>
			<?php
				echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
			?>
		</p>
		<div class="pager">
			<?php echo $this->Paginator->prev(__('Anterior'), array('class' => 'button previous'), null, array('class' => 'button previous disabled')); ?>
			<div class="pages">
				<?php echo $this->Paginator->numbers(array('separator' => '', 'currentClass' => 'active', 'currentTag' => 'a', 'tag' => 'span')); ?>
			</div>
			<?php echo $this->Paginator->next(__('Siguiente'), array('class' => 'button next'), null, array('class' => 'button next disabled')); ?>
		</div>
	</div>
</div>