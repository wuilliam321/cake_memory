<div class="otroestudios view">
<h2><?php echo __('Otroestudio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($otroestudio['Otroestudio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($otroestudio['Autore']['nombres'], array('controller' => 'autores', 'action' => 'view', $otroestudio['Autore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otroestudiotipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($otroestudio['Otroestudiotipo']['nombre'], array('controller' => 'otroestudiotipos', 'action' => 'view', $otroestudio['Otroestudiotipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($otroestudio['Otroestudio']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Otroestudio'), array('action' => 'edit', $otroestudio['Otroestudio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Otroestudio'), array('action' => 'delete', $otroestudio['Otroestudio']['id']), null, __('Are you sure you want to delete # %s?', $otroestudio['Otroestudio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Otroestudios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Otroestudio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Autores'), array('controller' => 'autores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Otroestudiotipos'), array('controller' => 'otroestudiotipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Otroestudiotipo'), array('controller' => 'otroestudiotipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
