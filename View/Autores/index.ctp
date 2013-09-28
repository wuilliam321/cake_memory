<div id="content-inner" class="autores index is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'autores', 'action' => 'index'), array('class' => 'active')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'autores', 'action' => 'add')); ?></li>
		</ul>
	</div>
	<h2><?php echo __('Autores'); ?></h2>
	<?php $i = 0; ?>
	<?php foreach($autores as $autore): ?>
		<?php if ($i == 0): ?>
			<div class="row-fluid">
		<?php endif; ?>
		<?php if (($i % 2) == 0): ?>
			</div>
			<div class="row-fluid">
		<?php endif; ?>
		<article class="is-post is-post-excerpt autore span5 offset1">
			<header>
				<!--
					Note: Titles and bylines will wrap automatically when necessary, so don't worry
					if they get too long. You can also remove the "byline" span entirely if you don't
					need a byline.
				-->
				<h2><?php echo $this->Html->link($autore['Autore']['nombre_completo'], array('controller' => 'autores', 'action' => 'view', $autore['Autore']['id'])); ?></h2>
				<span class="byline"><?php echo $autore['Unidadinvestigacione']['nombre']; //echo $this->Html->link($autore['Unidadinvestigacione']['nombre'], array('controller' => 'unidadinvestigaciones', 'action' => 'view', $autore['Unidadinvestigacione']['id'])); ?></span>
			</header>
			<div class="info">
				<ul class="stats">
					<li><a href="#" class="link-icon24 link-icon24-1">16</a></li>
					<li><a href="#" class="link-icon24 link-icon24-2">32</a></li>
					<li><a href="#" class="link-icon24 link-icon24-3">64</a></li>
					<li><a href="#" class="link-icon24 link-icon24-4">128</a></li>
				</ul>
			</div>
			<ul>
				<li><?php echo $autore['Autore']['email_primario']; ?></li>
				<li><?php echo $autore['Autore']['telefono_primario']; ?></li>
				<li><?php echo $autore['Autore']['linea_investigacion']; ?></li>
			</ul>
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $autore['Autore']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $autore['Autore']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $autore['Autore']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?>
		</article>
		<?php if ($i == sizeof($autores) - 1): ?>
			</div>
		<?php endif; ?>
		<?php $i++; ?>
	<?php endforeach; ?>
	
	<div class="paging-block">
		<p>
			<?php
				echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
			?>
		</p>
		<div class="pager">
			<?php echo $this->Paginator->prev(__('Anterior'), array('class' => 'button previous'), null, array('class' => 'button previous disabled')); ?>
			<div class="pages">
				<?php echo $this->Paginator->numbers(array('separator' => '', 'currentClass' => 'active', 'currentTag' => 'a', 'tag' => 'span')); ?>
			</div>
			<?php echo $this->Paginator->next(__('Siguiente'), array('class' => 'button next'), null, array('class' => 'button next disabled')); ?>
		</div>
	</div>
</div>