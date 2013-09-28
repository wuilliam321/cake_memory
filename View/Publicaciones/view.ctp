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
	<h3><?php echo __('Related Recursomultimedia'); ?></h3>
	<div class="span12">
		<?php if (!$publicacione['Recursomultimedia']): ?>
			<p>No hay Recursos Multimedia registrados en esta publicación</p>
		<?php endif; ?>
		<ul>
			<?php
			$i = 0;
			foreach ($publicacione['Recursomultimedia'] as $recursomultimedia): ?>
				<li>
					<?php echo $this->Html->link($recursomultimedia['nombre'], array('controller' => 'recursomultimedia', 'action' => 'view', $recursomultimedia['id'])); ?>
					<?php echo $recursomultimedia['descripcion']; ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<div class="related row-fluid">
	<h3>Etiquetas</h3>
	<div class="span12">
		<?php if (!$publicacione['Etiqueta']): ?>
			<p>Esta publicación no posee ninguna etiqueta.</p>
		<?php endif; ?>
		<?php
		$i = 0;
		foreach ($publicacione['Etiqueta'] as $etiqueta): ?>
				<?php echo $this->Html->link($etiqueta['nombre'], array('controller' => 'etiquetas', 'action' => 'view', $etiqueta['id'])); ?>
		<?php endforeach; ?>
	</div>
</div>
<div class="related row-fluid">
	<h3>Autores</h3>
	<div class="span12">
		<?php if (!$publicacione['Autore']): ?>
			<p>Esta publicación no posee un autor definido.</p>
		<?php endif; ?>
		<ul>
			<?php
			$i = 0;
			foreach ($publicacione['Autore'] as $autore): ?>
				<li>
					<?php echo $this->Html->link("{$autore['nombre_completo']}", array('controller' => 'autores', 'action' => 'view', $autore['id'])); ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<div class="related row-fluid">
	<h3><?php echo __('Comentarios'); ?></h3>
	<?php if (!empty($publicacione['Comentario'])): ?>
		<?php
		$i = 0;
		foreach ($publicacione['Comentario'] as $comentario): ?>
			<div class="span10 offset1 well">
				<div class="comment-details">
					<span><strong><?php echo $comentario['User']['Autore']['nombre_completo']; ?></strong> Dijo:</span>
				</div>
				<p><?php echo $comentario['texto']; ?></p>
				<div class="comment-details">
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'comentarios', 'action' => 'edit', $comentario['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comentarios', 'action' => 'delete', $comentario['id']), null, __('Are you sure you want to delete # %s?', $comentario['id'])); ?>
				</div>
			</div>
		<?php endforeach; ?>
	<?php else: ?>
		<div class="span12">
			<p>No hay comentarios, en esta publicación</p>
		</div>
	<?php endif; ?>

	<?php echo $this->Form->create('Comentario', array('controller' => 'comentarios', 'action' => 'add')); ?>
		<fieldset>
			<h2><?php echo __('Add Comentario'); ?></h2>
			<div class="row-fluid">
				<?php echo $this->Form->input('publicacione_id', array('type' => 'hidden', 'class' => 'span12', 'value' => $publicacione['Publicacione']['id'],'div' => array('class' => 'span12'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('user_id', array('class' => 'span12', 'div' => array('class' => 'span12'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('texto', array('class' => 'span12', 'div' => array('class' => 'span12'))); ?>
			</div>
		</fieldset>
		<div class="form-actions">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => false, 'class' => 'btn btn-primary btn-large')); ?>
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'publicaciones', 'action' => 'index'), array('div' => false, 'class' => 'btn cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>
