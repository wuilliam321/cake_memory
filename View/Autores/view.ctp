<div id="content-inner" class="autores view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'autores', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'autores', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'autores', 'action' => 'edit', $autore['Autore']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'autores', 'action' => 'view', $autore['Autore']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $autore['Autore']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
	<h2><?php echo __('Autore'); ?></h2>
	<dl>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($autore['User']['username'], array('controller' => 'users', 'action' => 'view', $autore['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unidadinvestigacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($autore['Unidadinvestigacione']['nombre'], array('controller' => 'unidadinvestigaciones', 'action' => 'view', $autore['Unidadinvestigacione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($autore['Profesione']['nombre'], array('controller' => 'profesiones', 'action' => 'view', $autore['Profesione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($autore['Autore']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($autore['Autore']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Primario'); ?></dt>
		<dd>
			<?php echo h($autore['Autore']['email_primario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono Primario'); ?></dt>
		<dd>
			<?php echo h($autore['Autore']['telefono_primario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Secundario'); ?></dt>
		<dd>
			<?php echo h($autore['Autore']['email_secundario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono Secundario'); ?></dt>
		<dd>
			<?php echo h($autore['Autore']['telefono_secundario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono Otro'); ?></dt>
		<dd>
			<?php echo h($autore['Autore']['telefono_otro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linea Investigacion'); ?></dt>
		<dd>
			<?php echo h($autore['Autore']['linea_investigacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Otroestudios'); ?></h3>
	<?php if (!empty($autore['Otroestudio'])): ?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Otroestudiotipo'); ?></th>
				<th><?php echo __('Nombre'); ?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($autore['Otroestudio'] as $otroestudio): ?>
				<tr>
					<td><?php echo $this->Html->link($otroestudio['Otroestudiotipo']['nombre'], array('controller' => 'otroestudiotipoas', 'action' => 'view', $otroestudio['Otroestudiotipo']['id'])); ?></td>
					<td><?php echo $otroestudio['nombre']; ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>
<div class="related">
	<h3><?php echo __('Related Publicaciones'); ?></h3>
	<?php if (!empty($autore['Publicacione'])): ?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Titulo'); ?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($autore['Publicacione'] as $publicacione): ?>
				<tr>
					<td><?php echo $this->Html->link($publicacione['titulo'], array('controller' => 'publicaciones', 'action' => 'view', $publicacione['id'])); ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>
