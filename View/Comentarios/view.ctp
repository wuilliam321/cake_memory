<div id="content-inner" class="comentarios view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'comentarios', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'comentarios', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'comentarios', 'action' => 'edit', $comentario['Comentario']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'comentarios', 'action' => 'view', $comentario['Comentario']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $comentario['Comentario']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
	<h2><?php echo __('Comentario'); ?></h2>
	<dl>
		<dt><?php echo __('Publicacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comentario['Publicacione']['titulo'], array('controller' => 'publicaciones', 'action' => 'view', $comentario['Publicacione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comentario['User']['username'], array('controller' => 'users', 'action' => 'view', $comentario['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['texto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
