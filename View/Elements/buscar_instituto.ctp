<section class="is-search">
    <header>
        <h2>Búsqueda</h2>
    </header>
    <div id="content-inner" class="etiquetas form is-post">
        <?php echo $this->Form->create('Instituto', array( 'url' => array_merge(array('action' => 'find'), $this->params['pass']) )); ?>
            <fieldset>
                <div class="row-fluid">
                    <?php echo $this->Form->input('q', array('type' => 'text', 'label' => false, 'required' => false, 'placeholder' => 'En Nombre o Dirección', 'class' => 'span12', 'div' => array('class' => 'span11'))); ?>
                    <?php echo $this->Form->input(' ', array('type' => 'submit', 'label' => false, 'class' => 'btn span12', 'div' => array('class' => 'span1 submit'))); ?>
                </div>
            </fieldset>
        <?php echo $this->Form->end(); ?>
    </div>
</section>