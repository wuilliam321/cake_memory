<div class="otroestudiotipos view">
<h2><?php echo __('Otroestudiotipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($otroestudiotipo['Otroestudiotipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($otroestudiotipo['Otroestudiotipo']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Otroestudiotipo'), array('action' => 'edit', $otroestudiotipo['Otroestudiotipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Otroestudiotipo'), array('action' => 'delete', $otroestudiotipo['Otroestudiotipo']['id']), null, __('Are you sure you want to delete # %s?', $otroestudiotipo['Otroestudiotipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Otroestudiotipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Otroestudiotipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Otroestudios'), array('controller' => 'otroestudios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Otroestudio'), array('controller' => 'otroestudios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Otroestudios'); ?></h3>
	<?php if (!empty($otroestudiotipo['Otroestudio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Autore Id'); ?></th>
		<th><?php echo __('Otroestudiotipo Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($otroestudiotipo['Otroestudio'] as $otroestudio): ?>
		<tr>
			<td><?php echo $otroestudio['id']; ?></td>
			<td><?php echo $otroestudio['autore_id']; ?></td>
			<td><?php echo $otroestudio['otroestudiotipo_id']; ?></td>
			<td><?php echo $otroestudio['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'otroestudios', 'action' => 'view', $otroestudio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'otroestudios', 'action' => 'edit', $otroestudio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'otroestudios', 'action' => 'delete', $otroestudio['id']), null, __('Are you sure you want to delete # %s?', $otroestudio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Otroestudio'), array('controller' => 'otroestudios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
