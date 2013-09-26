<div class="recursomultimedia view">
<h2><?php echo __('Recursomultimedia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recursomultimedia['Recursomultimedia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recursomultimediatipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recursomultimedia['Recursomultimediatipo']['nombre'], array('controller' => 'recursomultimediatipos', 'action' => 'view', $recursomultimedia['Recursomultimediatipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publicacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recursomultimedia['Publicacione']['id'], array('controller' => 'publicaciones', 'action' => 'view', $recursomultimedia['Publicacione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ruta'); ?></dt>
		<dd>
			<?php echo h($recursomultimedia['Recursomultimedia']['ruta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($recursomultimedia['Recursomultimedia']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($recursomultimedia['Recursomultimedia']['descripcion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recursomultimedia'), array('action' => 'edit', $recursomultimedia['Recursomultimedia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recursomultimedia'), array('action' => 'delete', $recursomultimedia['Recursomultimedia']['id']), null, __('Are you sure you want to delete # %s?', $recursomultimedia['Recursomultimedia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursomultimedia'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recursomultimedia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursomultimediatipos'), array('controller' => 'recursomultimediatipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recursomultimediatipo'), array('controller' => 'recursomultimediatipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publicaciones'), array('controller' => 'publicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacione'), array('controller' => 'publicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
