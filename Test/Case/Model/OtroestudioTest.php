<?php
App::uses('Otroestudio', 'Model');

/**
 * Otroestudio Test Case
 *
 */
class OtroestudioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.otroestudio',
		'app.autore',
		'app.user',
		'app.unidadinvestigacione',
		'app.profesione',
		'app.publicacione',
		'app.autores_publicacione',
		'app.otroestudiotipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Otroestudio = ClassRegistry::init('Otroestudio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Otroestudio);

		parent::tearDown();
	}

}
