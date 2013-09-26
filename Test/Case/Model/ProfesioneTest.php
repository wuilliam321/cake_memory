<?php
App::uses('Profesione', 'Model');

/**
 * Profesione Test Case
 *
 */
class ProfesioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.profesione',
		'app.autore',
		'app.user',
		'app.unidadinvestigacione',
		'app.otroestudio',
		'app.otroestudiotipo',
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
		$this->Profesione = ClassRegistry::init('Profesione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Profesione);

		parent::tearDown();
	}

}
