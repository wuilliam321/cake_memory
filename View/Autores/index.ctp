<div id="content-inner" class="autores index is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'autores', 'action' => 'index'), array('class' => 'active')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'autores', 'action' => 'add')); ?></li>
		</ul>
	</div>
	<h2><?php echo __('Autores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('unidadinvestigacione_id'); ?></th>
			<th><?php echo $this->Paginator->sort('profesione_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('email_primario'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono_primario'); ?></th>
			<th><?php echo $this->Paginator->sort('email_secundario'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono_secundario'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono_otro'); ?></th>
			<th><?php echo $this->Paginator->sort('linea_investigacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($autores as $autore): ?>
			<tr>
				<td><?php echo h($autore['Autore']['id']); ?>&nbsp;</td>
				<td>
			<?php echo $this->Html->link($autore['User']['username'], array('controller' => 'users', 'action' => 'view', $autore['User']['id'])); ?>
		</td>
				<td>
			<?php echo $this->Html->link($autore['Unidadinvestigacione']['nombre'], array('controller' => 'unidadinvestigaciones', 'action' => 'view', $autore['Unidadinvestigacione']['id'])); ?>
		</td>
				<td>
			<?php echo $this->Html->link($autore['Profesione']['nombre'], array('controller' => 'profesiones', 'action' => 'view', $autore['Profesione']['id'])); ?>
		</td>
				<td><?php echo h($autore['Autore']['nombres']); ?>&nbsp;</td>
				<td><?php echo h($autore['Autore']['apellidos']); ?>&nbsp;</td>
				<td><?php echo h($autore['Autore']['email_primario']); ?>&nbsp;</td>
				<td><?php echo h($autore['Autore']['telefono_primario']); ?>&nbsp;</td>
				<td><?php echo h($autore['Autore']['email_secundario']); ?>&nbsp;</td>
				<td><?php echo h($autore['Autore']['telefono_secundario']); ?>&nbsp;</td>
				<td><?php echo h($autore['Autore']['telefono_otro']); ?>&nbsp;</td>
				<td><?php echo h($autore['Autore']['linea_investigacion']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $autore['Autore']['id'])); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $autore['Autore']['id'])); ?>
					<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $autore['Autore']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?>
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