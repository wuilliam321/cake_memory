<!-- Sidebar -->
<div id="sidebar">

    <!-- Logo -->
        <div id="logo">
            <h1><?php echo $this->Html->link(__('Memoria'), '/'); ?></h1>
        </div>

    <!-- Nav -->
        <nav id="nav">
            <ul>
                <li<?php echo ($this->request['controller'] == 'publicaciones') ? ' class="current_page_item"' : ''; ?>><?php echo $this->Html->link(__('Publicaciones'), array('controller' => 'publicaciones', 'action' => 'index')); ?></li>
                <li<?php echo ($this->request['controller'] == 'institutos') ? ' class="current_page_item"' : ''; ?>><?php echo $this->Html->link(__('Institutos'), array('controller' => 'institutos', 'action' => 'index')); ?></li>
                <li<?php echo ($this->request['controller'] == 'autores') ? ' class="current_page_item"' : ''; ?>><?php echo $this->Html->link(__('Autores'), array('controller' => 'autores', 'action' => 'index')); ?></li>
                <li<?php echo ($this->request['controller'] == 'recursomultimedia') ? ' class="current_page_item"' : ''; ?>><?php echo $this->Html->link(__('Recursos Multimedios'), array('controller' => 'recursomultimedia', 'action' => 'index')); ?></li>
                <li<?php echo ($this->request['controller'] == 'etiquetas') ? ' class="current_page_item"' : ''; ?>><?php echo $this->Html->link(__('Etiquetas'), array('controller' => 'etiquetas', 'action' => 'index')); ?></li>
            </ul>
        </nav>
        
    <!-- Search -->
        <?php echo $this->element('buscar'); ?>
        
    <!-- Recent Posts -->
        <?php echo $this->element('publicaciones_recientes'); ?>
        
    <!-- Recent Comments -->
        <?php echo $this->element('comentarios_recientes'); ?>
        
    <!-- Calendar -->
        <?php //echo $this->element('calendario'); ?>

    <!-- Copyright -->
        <div id="copyright">
            <p>
                &copy; 2013 An Untitled Site.<br />
                Images: <a href="http://n33.co">n33</a>, <a href="http://fotogrph.com">fotogrph</a>, <a href="http://iconify.it">Iconify.it</a>
                Design: <a href="http://html5up.net/">HTML5 UP</a>
            </p>
        </div>
</div>