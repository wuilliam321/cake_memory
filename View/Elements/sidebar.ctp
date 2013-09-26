<!-- Sidebar -->
<div id="sidebar">

    <!-- Logo -->
        <div id="logo">
            <h1>Memoria</h1>
        </div>

    <!-- Nav -->
        <nav id="nav">
            <ul>
                <li class="current_page_item"><a href="#">Ultimas Publicaciones</a></li>
                <li><a href="#">Archivo</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
        
    <!-- Search -->
        <?php echo $this->element('buscar'); ?>
        
    <!-- Recent Posts -->
        <?php echo $this->element('publicaciones_recientes'); ?>
        
    <!-- Recent Comments -->
        <?php echo $this->element('comentarios_recientes'); ?>
        
    <!-- Calendar -->
        <?php echo $this->element('calendario'); ?>

    <!-- Copyright -->
        <div id="copyright">
            <p>
                &copy; 2013 An Untitled Site.<br />
                Images: <a href="http://n33.co">n33</a>, <a href="http://fotogrph.com">fotogrph</a>, <a href="http://iconify.it">Iconify.it</a>
                Design: <a href="http://html5up.net/">HTML5 UP</a>
            </p>
        </div>
</div>