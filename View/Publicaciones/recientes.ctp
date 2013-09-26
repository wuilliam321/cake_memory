<div id="content-inner">
	<!-- Post -->
    <?php foreach($publicaciones as $publicacione): ?>
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
    <?php endforeach; ?>

	<!-- Pager -->
		<div class="pager">
			<!--<a href="#" class="button previous">Previous Page</a>-->
			<div class="pages">
				<a href="#" class="active">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<span>&hellip;</span>
				<a href="#">20</a>
			</div>
			<a href="#" class="button next">Next Page</a>
		</div>
</div>