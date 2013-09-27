<?php
App::uses('Recursomultimediatipo', 'Model');

/**
 * Recursomultimediatipo Test Case
 *
 */
class RecursomultimediatipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recursomultimediatipo',
		'app.recursomultimedia',
		'app.publicacione',
		'app.comentario',
		'app.user',
		'app.autore',
		'app.unidadinvestigacione',
		'app.profesione',
		'app.otroestudio',
		'app.otroestudiotipo',
		'app.autores_publicacione',
		'app.etiqueta',
		'app.etiquetas_publicacione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Recursomultimediatipo = ClassRegistry::init('Recursomultimediatipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Recursomultimediatipo);

		parent::tearDown();
	}

}
