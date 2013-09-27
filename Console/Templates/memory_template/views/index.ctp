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
<div id="content-inner" class="<?php echo $pluralVar; ?> index is-post">
	<div class="top-menu">
		<ul>
			<li><?php echo "<?php echo \$this->Html->link(__('Listado'), array('controller' => '$pluralVar', 'action' => 'index'), array('class' => 'active')); ?>"; ?></li>
			<li><?php echo "<?php echo \$this->Html->link(__('Agregar'), array('controller' => '$pluralVar', 'action' => 'add')); ?>"; ?></li>
		</ul>
	</div>
	<h2><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
	<?php foreach ($fields as $field): ?>
		<th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
	<?php endforeach; ?>
		<th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
		</tr>
	<?php
	echo "\t<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
	echo "\t\t\t<tr>\n";
		foreach ($fields as $field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						echo "\t\t\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "\t\t\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
			}
		}

		echo "\t\t\t\t<td class=\"actions\">\n";
		echo "\t\t\t\t\t<?php echo \$this->Html->link(__('Ver'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
		echo "\t\t\t\t\t<?php echo \$this->Html->link(__('Editar'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
		echo "\t\t\t\t\t<?php echo \$this->Form->postLink(__('Eliminar'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, __('¿Está seguro(a) que desea eliminar este registro?')); ?>\n";
		echo "\t\t\t\t</td>\n";
	echo "\t\t\t</tr>\n";

	echo "\t\t<?php endforeach; ?>\n";
	?>
	</table>
	<div class="paging-block">
		<p>
		<?php echo "\t<?php
		\t\techo \$this->Paginator->counter(array(
		\t\t\t'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		\t\t));
		\t?>\n"; ?>
		</p>
		<div class="pager">
			<?php echo "<?php echo \$this->Paginator->prev(__('Anterior'), array('class' => 'button previous'), null, array('class' => 'button previous disabled')); ?>\n";?>
			<div class="pages">
				<?php echo "<?php echo \$this->Paginator->numbers(array('separator' => '', 'currentClass' => 'active', 'currentTag' => 'a', 'tag' => 'span')); ?>\n"; ?>
			</div>
			<?php echo "<?php echo \$this->Paginator->next(__('Siguiente'), array('class' => 'button next'), null, array('class' => 'button next disabled')); ?>\n";?>
		</div>
	</div>
</div>