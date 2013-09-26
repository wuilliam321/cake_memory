<div class="institutos view">
<h2><?php echo __('Instituto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instituto['Instituto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($instituto['Instituto']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instituto'), array('action' => 'edit', $instituto['Instituto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instituto'), array('action' => 'delete', $instituto['Instituto']['id']), null, __('Are you sure you want to delete # %s?', $instituto['Instituto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidadinvestigaciones'), array('controller' => 'unidadinvestigaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidadinvestigacione'), array('controller' => 'unidadinvestigaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Unidadinvestigaciones'); ?></h3>
	<?php if (!empty($instituto['Unidadinvestigacione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Instituto Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($instituto['Unidadinvestigacione'] as $unidadinvestigacione): ?>
		<tr>
			<td><?php echo $unidadinvestigacione['id']; ?></td>
			<td><?php echo $unidadinvestigacione['instituto_id']; ?></td>
			<td><?php echo $unidadinvestigacione['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'unidadinvestigaciones', 'action' => 'view', $unidadinvestigacione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'unidadinvestigaciones', 'action' => 'edit', $unidadinvestigacione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'unidadinvestigaciones', 'action' => 'delete', $unidadinvestigacione['id']), null, __('Are you sure you want to delete # %s?', $unidadinvestigacione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Unidadinvestigacione'), array('controller' => 'unidadinvestigaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
