<?php
App::uses('Publicacione', 'Model');

/**
 * Publicacione Test Case
 *
 */
class PublicacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.publicacione',
		'app.comentario',
		'app.user',
		'app.recursomultimedia',
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
		$this->Publicacione = ClassRegistry::init('Publicacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Publicacione);

		parent::tearDown();
	}

}
