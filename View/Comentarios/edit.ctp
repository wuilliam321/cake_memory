<div id="content-inner" class="comentarios form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'comentarios', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'comentarios', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'comentarios', 'action' => 'edit', $this->request->data['Comentario']['id']), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('Comentario'); ?>
		<fieldset>
			<h2><?php echo __('Edit Comentario'); ?></h2>
			<div class="input-block">
				<?php echo $this->Form->input('id'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('publicacione_id'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('user_id'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('texto'); ?>
			</div>
		</fieldset>
		<div class="submit-block">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => array('class' => 'submit-btn'))); ?>
			<?php echo $this->Html->link(__('Cancel'), array('#'), array('class' => 'cancel-btn')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>