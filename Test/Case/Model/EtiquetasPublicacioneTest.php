<?php
App::uses('EtiquetasPublicacione', 'Model');

/**
 * EtiquetasPublicacione Test Case
 *
 */
class EtiquetasPublicacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.etiquetas_publicacione',
		'app.etiqueta',
		'app.publicacione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EtiquetasPublicacione = ClassRegistry::init('EtiquetasPublicacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EtiquetasPublicacione);

		parent::tearDown();
	}

}
