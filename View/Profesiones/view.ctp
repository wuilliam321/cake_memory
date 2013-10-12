<div id="content-inner" class="profesiones view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'profesiones', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'profesiones', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'profesiones', 'action' => 'edit', $profesione['Profesione']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'profesiones', 'action' => 'view', $profesione['Profesione']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $profesione['Profesione']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
	<h2><?php echo __('Profesione'); ?></h2>
	<dl>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($profesione['Profesione']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Autores'); ?></h3>
	<?php if (!empty($profesione['Autore'])): ?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Nombre Completo'); ?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($profesione['Autore'] as $autore): ?>
				<tr>
					<td><?php echo $this->Html->link($autore['nombre_completo'], array('controller' => 'autores', 'action' => 'view', $autore['id'])); ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>
