<div class="autoresPublicaciones view">
<h2><?php echo __('Autores Publicacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($autoresPublicacione['AutoresPublicacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publicacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($autoresPublicacione['Publicacione']['id'], array('controller' => 'publicaciones', 'action' => 'view', $autoresPublicacione['Publicacione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($autoresPublicacione['Autore']['nombres'], array('controller' => 'autores', 'action' => 'view', $autoresPublicacione['Autore']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Autores Publicacione'), array('action' => 'edit', $autoresPublicacione['AutoresPublicacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Autores Publicacione'), array('action' => 'delete', $autoresPublicacione['AutoresPublicacione']['id']), null, __('Are you sure you want to delete # %s?', $autoresPublicacione['AutoresPublicacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Autores Publicaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autores Publicacione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publicaciones'), array('controller' => 'publicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacione'), array('controller' => 'publicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Autores'), array('controller' => 'autores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
	</ul>
</div>
