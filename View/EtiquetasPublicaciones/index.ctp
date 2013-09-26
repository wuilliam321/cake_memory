<div class="etiquetasPublicaciones index">
	<h2><?php echo __('Etiquetas Publicaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('etiqueta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('publicacione_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($etiquetasPublicaciones as $etiquetasPublicacione): ?>
	<tr>
		<td><?php echo h($etiquetasPublicacione['EtiquetasPublicacione']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($etiquetasPublicacione['Etiqueta']['nombre'], array('controller' => 'etiquetas', 'action' => 'view', $etiquetasPublicacione['Etiqueta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($etiquetasPublicacione['Publicacione']['titulo'], array('controller' => 'publicaciones', 'action' => 'view', $etiquetasPublicacione['Publicacione']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $etiquetasPublicacione['EtiquetasPublicacione']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $etiquetasPublicacione['EtiquetasPublicacione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $etiquetasPublicacione['EtiquetasPublicacione']['id']), null, __('Are you sure you want to delete # %s?', $etiquetasPublicacione['EtiquetasPublicacione']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Etiquetas Publicacione'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Etiquetas'), array('controller' => 'etiquetas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etiqueta'), array('controller' => 'etiquetas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publicaciones'), array('controller' => 'publicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacione'), array('controller' => 'publicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
