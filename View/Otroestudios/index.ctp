<div class="otroestudios index">
	<h2><?php echo __('Otroestudios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('autore_id'); ?></th>
			<th><?php echo $this->Paginator->sort('otroestudiotipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($otroestudios as $otroestudio): ?>
	<tr>
		<td><?php echo h($otroestudio['Otroestudio']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($otroestudio['Autore']['nombres'], array('controller' => 'autores', 'action' => 'view', $otroestudio['Autore']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($otroestudio['Otroestudiotipo']['nombre'], array('controller' => 'otroestudiotipos', 'action' => 'view', $otroestudio['Otroestudiotipo']['id'])); ?>
		</td>
		<td><?php echo h($otroestudio['Otroestudio']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $otroestudio['Otroestudio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $otroestudio['Otroestudio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $otroestudio['Otroestudio']['id']), null, __('Are you sure you want to delete # %s?', $otroestudio['Otroestudio']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Otroestudio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Autores'), array('controller' => 'autores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Otroestudiotipos'), array('controller' => 'otroestudiotipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Otroestudiotipo'), array('controller' => 'otroestudiotipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
