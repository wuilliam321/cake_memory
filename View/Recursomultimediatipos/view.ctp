<div class="recursomultimediatipos view">
<h2><?php echo __('Recursomultimediatipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recursomultimediatipo['Recursomultimediatipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($recursomultimediatipo['Recursomultimediatipo']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recursomultimediatipo'), array('action' => 'edit', $recursomultimediatipo['Recursomultimediatipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recursomultimediatipo'), array('action' => 'delete', $recursomultimediatipo['Recursomultimediatipo']['id']), null, __('Are you sure you want to delete # %s?', $recursomultimediatipo['Recursomultimediatipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursomultimediatipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recursomultimediatipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursomultimedia'), array('controller' => 'recursomultimedia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recursomultimedia'), array('controller' => 'recursomultimedia', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Recursomultimedia'); ?></h3>
	<?php if (!empty($recursomultimediatipo['Recursomultimedia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Recursomultimediatipo Id'); ?></th>
		<th><?php echo __('Publicacione Id'); ?></th>
		<th><?php echo __('Ruta'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($recursomultimediatipo['Recursomultimedia'] as $recursomultimedia): ?>
		<tr>
			<td><?php echo $recursomultimedia['id']; ?></td>
			<td><?php echo $recursomultimedia['recursomultimediatipo_id']; ?></td>
			<td><?php echo $recursomultimedia['publicacione_id']; ?></td>
			<td><?php echo $recursomultimedia['ruta']; ?></td>
			<td><?php echo $recursomultimedia['nombre']; ?></td>
			<td><?php echo $recursomultimedia['descripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'recursomultimedia', 'action' => 'view', $recursomultimedia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'recursomultimedia', 'action' => 'edit', $recursomultimedia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'recursomultimedia', 'action' => 'delete', $recursomultimedia['id']), null, __('Are you sure you want to delete # %s?', $recursomultimedia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Recursomultimedia'), array('controller' => 'recursomultimedia', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
