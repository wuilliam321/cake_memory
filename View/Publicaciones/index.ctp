<div id="content-inner" class="publicaciones index is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'publicaciones', 'action' => 'index'), array('class' => 'active')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'publicaciones', 'action' => 'add')); ?></li>
		</ul>
	</div>
	<h2><?php echo __('Publicaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion_corta'); ?></th>
			<th><?php echo $this->Paginator->sort('contenido'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($publicaciones as $publicacione): ?>
			<tr>
				<td><?php echo h($publicacione['Publicacione']['id']); ?>&nbsp;</td>
				<td><?php echo h($publicacione['Publicacione']['titulo']); ?>&nbsp;</td>
				<td><?php echo h($publicacione['Publicacione']['descripcion_corta']); ?>&nbsp;</td>
				<td><?php echo h($publicacione['Publicacione']['contenido']); ?>&nbsp;</td>
				<td><?php echo h($publicacione['Publicacione']['created']); ?>&nbsp;</td>
				<td><?php echo h($publicacione['Publicacione']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $publicacione['Publicacione']['id'])); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $publicacione['Publicacione']['id'])); ?>
					<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $publicacione['Publicacione']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?>
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