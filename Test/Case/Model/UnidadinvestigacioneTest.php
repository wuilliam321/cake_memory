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
		'app.unidadinvestigaciontipo',
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
