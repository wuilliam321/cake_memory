<div id="content-inner" class="autoresPublicaciones index is-post">
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
			<?php echo $this->Html->link($autoresPublicacione['Publicacione']['id'], array('controller' => 'publicaciones', 'action' => 'view', $autoresPublicacione['Publicacione']['id'])); ?>
		</td>
				<td>
			<?php echo $this->Html->link($autoresPublicacione['Autore']['nombres'], array('controller' => 'autores', 'action' => 'view', $autoresPublicacione['Autore']['id'])); ?>
		</td>
				<td class="actions">
					<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $autoresPublicacione['AutoresPublicacione']['id'])); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $autoresPublicacione['AutoresPublicacione']['id'])); ?>
					<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $autoresPublicacione['AutoresPublicacione']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?>
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