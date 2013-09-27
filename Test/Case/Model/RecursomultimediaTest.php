<?php
App::uses('Recursomultimedia', 'Model');

/**
 * Recursomultimedia Test Case
 *
 */
class RecursomultimediaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recursomultimedia',
		'app.recursomultimediatipo',
		'app.publicacione',
		'app.comentario',
		'app.user',
		'app.group',
		'app.autore',
		'app.unidadinvestigacione',
		'app.instituto',
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
		$this->Recursomultimedia = ClassRegistry::init('Recursomultimedia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Recursomultimedia);

		parent::tearDown();
	}

}
