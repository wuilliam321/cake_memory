<?php
App::uses('Autore', 'Model');

/**
 * Autore Test Case
 *
 */
class AutoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.autore',
		'app.user',
		'app.group',
		'app.comentario',
		'app.publicacione',
		'app.recursomultimedia',
		'app.recursomultimediatipo',
		'app.autores_publicacione',
		'app.etiqueta',
		'app.etiquetas_publicacione',
		'app.unidadinvestigacione',
		'app.instituto',
		'app.profesione',
		'app.otroestudio',
		'app.otroestudiotipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Autore = ClassRegistry::init('Autore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Autore);

		parent::tearDown();
	}

}
