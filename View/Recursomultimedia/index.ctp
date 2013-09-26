<div class="recursomultimedia index">
	<h2><?php echo __('Recursomultimedia'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('recursomultimediatipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('publicacione_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ruta'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recursomultimedia as $recursomultimedia): ?>
	<tr>
		<td><?php echo h($recursomultimedia['Recursomultimedia']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($recursomultimedia['Recursomultimediatipo']['nombre'], array('controller' => 'recursomultimediatipos', 'action' => 'view', $recursomultimedia['Recursomultimediatipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($recursomultimedia['Publicacione']['titulo'], array('controller' => 'publicaciones', 'action' => 'view', $recursomultimedia['Publicacione']['id'])); ?>
		</td>
		<td><?php echo h($recursomultimedia['Recursomultimedia']['ruta']); ?>&nbsp;</td>
		<td><?php echo h($recursomultimedia['Recursomultimedia']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($recursomultimedia['Recursomultimedia']['descripcion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $recursomultimedia['Recursomultimedia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recursomultimedia['Recursomultimedia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recursomultimedia['Recursomultimedia']['id']), null, __('Are you sure you want to delete # %s?', $recursomultimedia['Recursomultimedia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Recursomultimedia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Recursomultimediatipos'), array('controller' => 'recursomultimediatipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recursomultimediatipo'), array('controller' => 'recursomultimediatipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publicaciones'), array('controller' => 'publicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacione'), array('controller' => 'publicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
