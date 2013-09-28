<div id="content-inner" class="publicaciones view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'publicaciones', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'publicaciones', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'publicaciones', 'action' => 'edit', $publicacione['Publicacione']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'publicaciones', 'action' => 'view', $publicacione['Publicacione']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $publicacione['Publicacione']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
	<article class="is-post is-post-excerpt">
		<header>
			<!--
				Note: Titles and bylines will wrap automatically when necessary, so don't worry
				if they get too long. You can also remove the "byline" span entirely if you don't
				need a byline.
			-->
			<h2><?php echo $this->Html->link($publicacione['Publicacione']['titulo'], array('controller' => 'publicaciones', 'action' => 'view', $publicacione['Publicacione']['id'])); ?></h2>
			<span class="byline"><?php echo $publicacione['Publicacione']['descripcion_corta']; ?></span>
		</header>
		<div class="info">
			<!--
				Note: The date should be formatted exactly as it's shown below. In particular, the
				"least significant" characters of the month should be encapsulated in a <span>
				element to denote what gets dropped in 1200px mode (eg. the "uary" in "January").
				Oh, and if you don't need a date for a particular page or post you can simply delete
				the entire "date" element.
				
			-->
			<span class="date"><span class="month"><?php echo substr($this->Time->format("F", $publicacione['Publicacione']['created']), 0, 3); ?><span><?php echo substr($this->Time->format("F", $publicacione['Publicacione']['created']), 3, strlen($this->Time->format("F", $publicacione['Publicacione']['created'])) -1); ?></span></span> <span class="day"><?php echo $this->Time->format("d", $publicacione['Publicacione']['created']); ?></span><span class="year">, 2013</span></span>
			<!--
				Note: You can change the number of list items in "stats" to whatever you want.
			-->
			<ul class="stats">
				<li><a href="#" class="link-icon24 link-icon24-1">16</a></li>
				<li><a href="#" class="link-icon24 link-icon24-2">32</a></li>
				<li><a href="#" class="link-icon24 link-icon24-3">64</a></li>
				<li><a href="#" class="link-icon24 link-icon24-4">128</a></li>
			</ul>
		</div>
		<?php echo $publicacione['Publicacione']['contenido']; ?>
	</article>
</div>
<div class="related row-fluid">
	<h3><?php echo __('Comentarios'); ?></h3>
	<?php if (!empty($publicacione['Comentario'])): ?>
		<?php
		$i = 0;
		foreach ($publicacione['Comentario'] as $comentario):  print_r($comentario); ?>
			<div class="span10 offset1 well">
				<p><?php echo $comentario['texto']; ?></p>
				<div class="comment-details">
					<span>Por: <?php echo $comentario['Autore']['nombre_completo']; ?></span>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'comentarios', 'action' => 'edit', $comentario['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comentarios', 'action' => 'delete', $comentario['id']), null, __('Are you sure you want to delete # %s?', $comentario['id'])); ?>
				</div>
			</div>
		<?php endforeach; ?>
	<?php else: ?>
		<p>No hay comentarios, en esta publicación</p>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Agregar Comentario'), array('controller' => 'comentarios', 'action' => 'add', $publicacione['Publicacione']['id'])); ?> </li>
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
			<li><?php echo $this->Html->link(__('Agregar Recursomultimedia'), array('controller' => 'recursomultimedia', 'action' => 'add')); ?> </li>
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
			<li><?php echo $this->Html->link(__('Agregar Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
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
			<li><?php echo $this->Html->link(__('Agregar Etiqueta'), array('controller' => 'etiquetas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
