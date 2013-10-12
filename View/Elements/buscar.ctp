<section class="is-search">
    <header>
        <h2>Búsqueda</h2>
    </header>
    <div id="content-inner" class="etiquetas form is-post">
        <?php echo $this->Form->create('Publicacione', array( 'url' => array_merge(array('action' => 'find'), $this->params['pass']) )); ?>
            <fieldset>
                <div class="row-fluid">
                    <?php echo $this->Form->input('q', array('type' => 'text', 'label' => false, 'required' => false, 'placeholder' => 'En Titulo y Contenido', 'class' => 'span12', 'div' => array('class' => 'span4'))); ?>
                    <?php echo $this->Form->input('autor', array('type' => 'text', 'label' => false, 'required' => false, 'placeholder' => 'Por Autor', 'class' => 'span12', 'div' => array('class' => 'span4') )); ?>
                    <?php echo $this->Form->input('etiqueta', array('type' => 'text', 'label' => false, 'required' => false, 'placeholder' => 'Por Etiqueta', 'class' => 'span12', 'div' => array('class' => 'span3'))); ?>
                    <?php echo $this->Form->input(' ', array('type' => 'submit', 'label' => false, 'class' => 'btn span12', 'div' => array('class' => 'span1 submit'))); ?>
                    <?php //echo $this->Form->input('contenido', array('div' => false, 'required' => false)); ?>
                    <?php //echo $this->Form->input('username', array('div' => false, 'required' => false)); ?>
                </div>
            </fieldset>
        <?php echo $this->Form->end(); ?>
    </div>
</section>