<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div id="content-inner" class="<?php echo $pluralVar; ?> form is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo "<?php echo \$this->Html->link(__('Listado'), array('controller' => '$pluralVar', 'action' => 'index')); ?>"; ?></li>
			<?php if (strpos($action, 'add') !== false) {
				echo "<li><?php echo \$this->Html->link(__('Agregar'), array('controller' => '$pluralVar', 'action' => 'add'), array('class' => 'active')); ?></li>\n";
			} else {
				echo "<li><?php echo \$this->Html->link(__('Agregar'), array('controller' => '$pluralVar', 'action' => 'add')); ?></li>\n";
				echo "\t\t\t<li><?php echo \$this->Html->link(__('Editar'), array('controller' => '$pluralVar', 'action' => 'edit', \$this->request->data['{$modelClass}']['{$primaryKey}']), array('class' => 'active')); ?></li>\n";
			}
			?>
		</ul>
	</div>
	<?php echo "<?php echo \$this->Form->create('{$modelClass}'); ?>\n"; ?>
		<fieldset>
			<h2><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></h2>
<?php
		foreach ($fields as $field) {
			if (strpos($action, 'add') !== false && $field == $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
				echo "\t\t\t<div class=\"input-block\">\n";
				echo "\t\t\t\t<?php echo \$this->Form->input('{$field}'); ?>\n";
				echo "\t\t\t</div>\n";
			}
		}
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "\t\t\t<div class=\"input-block\">\n";
				echo "\t\t\t\t<?php echo \$this->Form->input('{$assocName}'); ?>\n";
				echo "\t\t\t</div>\n";
			}
		}
?>
		</fieldset>
		<div class="submit-block">
			<?php echo "<?php echo \$this->Form->end(array('label' => __('Submit'), 'div' => array('class' => 'submit-btn'))); ?>\n"; ?>
			<?php echo "<?php echo \$this->Html->link(__('Cancel'), array('controller' => '$pluralVar', 'action' => 'index'), array('class' => 'cancel-btn'), __('¿Está seguro(a) que desea cancelar la operación?')); ?>\n"; ?>
		</div>
<?php
	echo "\t<?php echo \$this->Form->end(); ?>\n";
?>
</div>