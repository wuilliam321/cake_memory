<div class="publicaciones view">
<h2><?php echo __('Publicacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($publicacione['Publicacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($publicacione['Publicacione']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contenido'); ?></dt>
		<dd>
			<?php echo h($publicacione['Publicacione']['contenido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($publicacione['Publicacione']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($publicacione['Publicacione']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Publicacione'), array('action' => 'edit', $publicacione['Publicacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Publicacione'), array('action' => 'delete', $publicacione['Publicacione']['id']), null, __('Are you sure you want to delete # %s?', $publicacione['Publicacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Publicaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publicacione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recursomultimedia'), array('controller' => 'recursomultimedia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recursomultimedia'), array('controller' => 'recursomultimedia', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Autores'), array('controller' => 'autores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etiquetas'), array('controller' => 'etiquetas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etiqueta'), array('controller' => 'etiquetas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($publicacione['Comentario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Publicacione Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publicacione['Comentario'] as $comentario): ?>
		<tr>
			<td><?php echo $comentario['id']; ?></td>
			<td><?php echo $comentario['publicacione_id']; ?></td>
			<td><?php echo $comentario['user_id']; ?></td>
			<td><?php echo $comentario['texto']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comentarios', 'action' => 'view', $comentario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comentarios', 'action' => 'edit', $comentario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comentarios', 'action' => 'delete', $comentario['id']), null, __('Are you sure you want to delete # %s?', $comentario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Recursomultimedia'); ?></h3>
	<?php if (!empty($publicacione['Recursomultimedia'])): ?>
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
		foreach ($publicacione['Recursomultimedia'] as $recursomultimedia): ?>
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
<div class="related">
	<h3><?php echo __('Related Autores'); ?></h3>
	<?php if (!empty($publicacione['Autore'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Unidadinvestigacione Id'); ?></th>
		<th><?php echo __('Profesione Id'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Email Primario'); ?></th>
		<th><?php echo __('Telefono Primario'); ?></th>
		<th><?php echo __('Email Secundario'); ?></th>
		<th><?php echo __('Telefono Secundario'); ?></th>
		<th><?php echo __('Telefono Otro'); ?></th>
		<th><?php echo __('Linea Investigacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publicacione['Autore'] as $autore): ?>
		<tr>
			<td><?php echo $autore['id']; ?></td>
			<td><?php echo $autore['user_id']; ?></td>
			<td><?php echo $autore['unidadinvestigacione_id']; ?></td>
			<td><?php echo $autore['profesione_id']; ?></td>
			<td><?php echo $autore['nombres']; ?></td>
			<td><?php echo $autore['apellidos']; ?></td>
			<td><?php echo $autore['email_primario']; ?></td>
			<td><?php echo $autore['telefono_primario']; ?></td>
			<td><?php echo $autore['email_secundario']; ?></td>
			<td><?php echo $autore['telefono_secundario']; ?></td>
			<td><?php echo $autore['telefono_otro']; ?></td>
			<td><?php echo $autore['linea_investigacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'autores', 'action' => 'view', $autore['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'autores', 'action' => 'edit', $autore['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'autores', 'action' => 'delete', $autore['id']), null, __('Are you sure you want to delete # %s?', $autore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Etiquetas'); ?></h3>
	<?php if (!empty($publicacione['Etiqueta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publicacione['Etiqueta'] as $etiqueta): ?>
		<tr>
			<td><?php echo $etiqueta['id']; ?></td>
			<td><?php echo $etiqueta['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'etiquetas', 'action' => 'view', $etiqueta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'etiquetas', 'action' => 'edit', $etiqueta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'etiquetas', 'action' => 'delete', $etiqueta['id']), null, __('Are you sure you want to delete # %s?', $etiqueta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Etiqueta'), array('controller' => 'etiquetas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
