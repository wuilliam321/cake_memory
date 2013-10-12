<section class="is-search">
    <header>
        <h2>Búsqueda</h2>
    </header>
    <div id="content-inner" class="etiquetas form is-post">
        <?php echo $this->Form->create('Autore', array( 'url' => array_merge(array('action' => 'find'), $this->params['pass']) )); ?>
            <fieldset>
                <div class="row-fluid">
                    <?php echo $this->Form->input('q', array('type' => 'text', 'label' => false, 'required' => false, 'placeholder' => 'En Nombres, Apellidos o Línea de Investigación', 'class' => 'span12', 'div' => array('class' => 'span5'))); ?>
                    <?php echo $this->Form->input('unidadinvestigacione', array('type' => 'text', 'label' => false, 'required' => false, 'placeholder' => 'En Unidad de Investigación', 'class' => 'span12', 'div' => array('class' => 'span3'))); ?>
                    <?php echo $this->Form->input('profesione', array('type' => 'text', 'label' => false, 'required' => false, 'placeholder' => 'En Profesion', 'class' => 'span12', 'div' => array('class' => 'span3'))); ?>
                    <?php echo $this->Form->input(' ', array('type' => 'submit', 'label' => false, 'class' => 'btn span12', 'div' => array('class' => 'span1 submit'))); ?>
                </div>
            </fieldset>
        <?php echo $this->Form->end(); ?>
    </div>
</section>