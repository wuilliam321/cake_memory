<div id="content-inner" class="otroestudios index is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'otroestudios', 'action' => 'index'), array('class' => 'active')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'otroestudios', 'action' => 'add')); ?></li>
		</ul>
	</div>
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
			<?php echo $this->Html->link($otroestudio['Autore']['nombre_completo'], array('controller' => 'autores', 'action' => 'view', $otroestudio['Autore']['id'])); ?>
		</td>
				<td>
			<?php echo $this->Html->link($otroestudio['Otroestudiotipo']['nombre'], array('controller' => 'otroestudiotipos', 'action' => 'view', $otroestudio['Otroestudiotipo']['id'])); ?>
		</td>
				<td><?php echo h($otroestudio['Otroestudio']['nombre']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $otroestudio['Otroestudio']['id'])); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $otroestudio['Otroestudio']['id'])); ?>
					<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $otroestudio['Otroestudio']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?>
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