<div id="content-inner" class="users form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo $this->Html->link(__('Listado'), array('controller' => 'users', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Agregar'), array('controller' => 'users', 'action' => 'add'), array('class' => 'active')); ?></li>
		</ul>
	</div>
	<?php echo $this->Form->create('User'); ?>
		<fieldset>
			<h2><?php echo __('Add User'); ?></h2>
			<div class="input-block">
				<?php echo $this->Form->input('group_id'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('username'); ?>
			</div>
			<div class="input-block">
				<?php echo $this->Form->input('password'); ?>
			</div>
		</fieldset>
		<div class="submit-block">
			<?php echo $this->Form->end(array('label' => __('Submit'), 'div' => array('class' => 'submit-btn'))); ?>
			<?php echo $this->Html->link(__('Cancel'), array('#'), array('class' => 'cancel-btn')); ?>
		</div>
	<?php echo $this->Form->end(); ?>
</div>