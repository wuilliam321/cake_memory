<?php $publicaciones = $this->requestAction('/publicaciones/recientes'); ?>
<section class="is-recent-posts">
    <header>
        <h2>Publicaciones Recientes</h2>
    </header>
    <ul>
        <?php foreach ($publicaciones as $publicacione): ?>
            <li><?php echo $this->Html->link($publicacione['Publicacione']['titulo'], array('controller' => 'publicaciones', 'action' => 'view', $publicacione['Publicacione']['id'])); ?></li>
        <?php endforeach; ?>
    </ul>
</section>