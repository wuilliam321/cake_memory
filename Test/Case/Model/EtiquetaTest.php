<?php
App::uses('Etiqueta', 'Model');

/**
 * Etiqueta Test Case
 *
 */
class EtiquetaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.etiqueta',
		'app.publicacione',
		'app.etiquetas_publicacione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Etiqueta = ClassRegistry::init('Etiqueta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Etiqueta);

		parent::tearDown();
	}

}
