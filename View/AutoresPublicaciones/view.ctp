<div id="content-inner" class="container autoresPublicaciones view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'autoresPublicaciones', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'autoresPublicaciones', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'autoresPublicaciones', 'action' => 'edit', $autoresPublicacione['AutoresPublicacione']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'autoresPublicaciones', 'action' => 'view', $autoresPublicacione['AutoresPublicacione']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $autoresPublicacione['AutoresPublicacione']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
		<h2><?php echo __('Autores Publicacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($autoresPublicacione['AutoresPublicacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publicacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($autoresPublicacione['Publicacione']['titulo'], array('controller' => 'publicaciones', 'action' => 'view', $autoresPublicacione['Publicacione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($autoresPublicacione['Autore']['nombres'], array('controller' => 'autores', 'action' => 'view', $autoresPublicacione['Autore']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
