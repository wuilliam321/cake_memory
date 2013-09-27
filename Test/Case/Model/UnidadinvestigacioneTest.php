<?php
App::uses('Unidadinvestigacione', 'Model');

/**
 * Unidadinvestigacione Test Case
 *
 */
class UnidadinvestigacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.unidadinvestigacione',
		'app.instituto',
		'app.autore',
		'app.user',
		'app.profesione',
		'app.otroestudio',
		'app.otroestudiotipo',
		'app.publicacione',
		'app.comentario',
		'app.recursomultimedia',
		'app.recursomultimediatipo',
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
		$this->Unidadinvestigacione = ClassRegistry::init('Unidadinvestigacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Unidadinvestigacione);

		parent::tearDown();
	}

}
