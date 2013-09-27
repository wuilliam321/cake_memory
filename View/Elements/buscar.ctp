<section class="is-search">
    <header>
        <h2>Búsqueda</h2>
    </header>
    <?php
        echo $this->Form->create('Publicacione', array(
            'url' => array_merge(array('action' => 'find'), $this->params['pass'])
        ));
            echo $this->Form->input('q', array('type' => 'text', 'label' => false, 'required' => false, 'placeholder' => 'En Titulo y Contenido'));
            echo $this->Form->input('autor', array('type' => 'text', 'label' => false, 'required' => false, 'placeholder' => 'Por Autor', ));
            echo $this->Form->input('etiqueta', array('type' => 'text', 'label' => false, 'required' => false, 'placeholder' => 'Por Etiqueta'));
            //echo $this->Form->input('contenido', array('div' => false, 'required' => false));
            //echo $this->Form->input('username', array('div' => false, 'required' => false));
        echo $this->Form->end("Buscar");
    ?>
</section>