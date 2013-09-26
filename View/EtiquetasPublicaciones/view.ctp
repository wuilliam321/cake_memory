<div class="etiquetasPublicaciones view">
<h2><?php echo __('Etiquetas Publicacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($etiquetasPublicacione['EtiquetasPublicacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etiqueta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($etiquetasPublicacione['Etiqueta']['nombre'], array('controller' => 'etiquetas', 'action' => 'view', $etiquetasPublicacione['Etiqueta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publicacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($etiquetasPublicacione['Publicacione']['titulo'], array('controller' => 'publicaciones', 'action' => 'view', $etiquetasPublicacione['Publicacione']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Etiquetas Publicacione'), array('action' => 'edit', $etiquetasPublicacione['EtiquetasPublicacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Etiquetas Publicacione'), array('action' => 'delete', $etiquetasPublicacione['EtiquetasPublicacione']['id']), null, __('Are you sure you want to delete # %s?', $etiquetasPublicacione['EtiquetasPublicacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Etiquetas Publicaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etiquetas Publicacione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etiquetas'), array('controller' => 'etiquetas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etiqueta'), array('controller' => 'etiquetas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publicaciones'), array('controller' => 'publicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacione'), array('controller' => 'publicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
