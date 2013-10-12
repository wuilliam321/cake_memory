<?php
App::uses('Unidadinvestigaciontipo', 'Model');

/**
 * Unidadinvestigaciontipo Test Case
 *
 */
class UnidadinvestigaciontipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.unidadinvestigaciontipo',
		'app.unidadinvestigacione',
		'app.instituto',
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
		$this->Unidadinvestigaciontipo = ClassRegistry::init('Unidadinvestigaciontipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Unidadinvestigaciontipo);

		parent::tearDown();
	}

}
