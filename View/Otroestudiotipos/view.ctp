<div id="content-inner" class="otroestudiotipos view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'otroestudiotipos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'otroestudiotipos', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'otroestudiotipos', 'action' => 'edit', $otroestudiotipo['Otroestudiotipo']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'otroestudiotipos', 'action' => 'view', $otroestudiotipo['Otroestudiotipo']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $otroestudiotipo['Otroestudiotipo']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
	<h2><?php echo __('Otroestudiotipo'); ?></h2>
	<dl>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($otroestudiotipo['Otroestudiotipo']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Otroestudios'); ?></h3>
	<?php if (!empty($otroestudiotipo['Otroestudio'])): ?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Autore'); ?></th>
				<th><?php echo __('Nombre'); ?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($otroestudiotipo['Otroestudio'] as $otroestudio): ?>
				<tr>
					<td><?php echo $this->Html->link($otroestudio['Autore']['nombre_completo'], array('controller' => 'autores', 'action' => 'view', $otroestudio['autore_id'])); ?></td>
					<td><?php echo $otroestudio['nombre']; ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>
