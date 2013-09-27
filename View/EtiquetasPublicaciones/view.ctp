<div id="content-inner" class="container etiquetasPublicaciones view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'etiquetasPublicaciones', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'etiquetasPublicaciones', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'etiquetasPublicaciones', 'action' => 'edit', $etiquetasPublicacione['EtiquetasPublicacione']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'etiquetasPublicaciones', 'action' => 'view', $etiquetasPublicacione['EtiquetasPublicacione']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $etiquetasPublicacione['EtiquetasPublicacione']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
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
