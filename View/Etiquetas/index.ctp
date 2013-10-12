<div id="content-inner" class="etiquetas index is-post">
	<h2><?php echo __('Etiquetas'); ?></h2>
	<script type="application/x-javascript">
		$(function () {
			var word_array = [];
			<?php foreach($etiquetas as $etiqueta): ?>
				word_array.push({text: "<?php echo $etiqueta['Etiqueta']['nombre']; ?> (<?php echo $etiqueta['Etiqueta']['count']; ?>)", weight: "<?php echo $etiqueta['Etiqueta']['count']; ?>",  link: "<?php echo $this->Html->url(array('controller' => 'etiquetas', 'action' => 'view', $etiqueta['Etiqueta']['id'])); ?>"})
			<?php endforeach; ?>
			$("#example").jQCloud(word_array);
			console.log(word_array);
		})
	</script>
	<div id="example" style="width: 100%; height: 450px;"></div>
</div>