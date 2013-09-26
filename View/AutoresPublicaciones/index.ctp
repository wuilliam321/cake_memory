<div class="autoresPublicaciones index">
	<h2><?php echo __('Autores Publicaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('publicacione_id'); ?></th>
			<th><?php echo $this->Paginator->sort('autore_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($autoresPublicaciones as $autoresPublicacione): ?>
	<tr>
		<td><?php echo h($autoresPublicacione['AutoresPublicacione']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($autoresPublicacione['Publicacione']['titulo'], array('controller' => 'publicaciones', 'action' => 'view', $autoresPublicacione['Publicacione']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($autoresPublicacione['Autore']['nombres'], array('controller' => 'autores', 'action' => 'view', $autoresPublicacione['Autore']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $autoresPublicacione['AutoresPublicacione']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $autoresPublicacione['AutoresPublicacione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $autoresPublicacione['AutoresPublicacione']['id']), null, __('Are you sure you want to delete # %s?', $autoresPublicacione['AutoresPublicacione']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Autores Publicacione'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Publicaciones'), array('controller' => 'publicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacione'), array('controller' => 'publicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Autores'), array('controller' => 'autores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
	</ul>
</div>
