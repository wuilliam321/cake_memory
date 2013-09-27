<?php
App::uses('Otroestudiotipo', 'Model');

/**
 * Otroestudiotipo Test Case
 *
 */
class OtroestudiotipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.otroestudiotipo',
		'app.otroestudio',
		'app.autore',
		'app.user',
		'app.unidadinvestigacione',
		'app.profesione',
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
		$this->Otroestudiotipo = ClassRegistry::init('Otroestudiotipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Otroestudiotipo);

		parent::tearDown();
	}

}
