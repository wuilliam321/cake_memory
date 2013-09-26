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
		'app.unidadinvestigacione',
		'app.profesione',
		'app.otroestudio',
		'app.publicacione',
		'app.autores_publicacione'
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
