<div id="content-inner" class="otroestudios view is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'otroestudios', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'otroestudios', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'otroestudios', 'action' => 'edit', $otroestudio['Otroestudio']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'otroestudios', 'action' => 'view', $otroestudio['Otroestudio']['id']), array('class' => 'active')); ?></li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $otroestudio['Otroestudio']['id']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?></li>
		</ul>
	</div>
		<h2><?php echo __('Otroestudio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($otroestudio['Otroestudio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($otroestudio['Autore']['nombre_completo'], array('controller' => 'autores', 'action' => 'view', $otroestudio['Autore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otroestudiotipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($otroestudio['Otroestudiotipo']['nombre'], array('controller' => 'otroestudiotipos', 'action' => 'view', $otroestudio['Otroestudiotipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($otroestudio['Otroestudio']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
