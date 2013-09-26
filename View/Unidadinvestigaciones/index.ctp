<div class="unidadinvestigaciones index">
	<h2><?php echo __('Unidadinvestigaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('instituto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($unidadinvestigaciones as $unidadinvestigacione): ?>
	<tr>
		<td><?php echo h($unidadinvestigacione['Unidadinvestigacione']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($unidadinvestigacione['Instituto']['nombre'], array('controller' => 'institutos', 'action' => 'view', $unidadinvestigacione['Instituto']['id'])); ?>
		</td>
		<td><?php echo h($unidadinvestigacione['Unidadinvestigacione']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $unidadinvestigacione['Unidadinvestigacione']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $unidadinvestigacione['Unidadinvestigacione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $unidadinvestigacione['Unidadinvestigacione']['id']), null, __('Are you sure you want to delete # %s?', $unidadinvestigacione['Unidadinvestigacione']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Unidadinvestigacione'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Institutos'), array('controller' => 'institutos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituto'), array('controller' => 'institutos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Autores'), array('controller' => 'autores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
	</ul>
</div>
