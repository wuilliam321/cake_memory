<?php
App::uses('AutoresPublicacione', 'Model');

/**
 * AutoresPublicacione Test Case
 *
 */
class AutoresPublicacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.autores_publicacione',
		'app.publicacione',
		'app.autore',
		'app.user',
		'app.unidadinvestigacione',
		'app.profesione',
		'app.otroestudio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AutoresPublicacione = ClassRegistry::init('AutoresPublicacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AutoresPublicacione);

		parent::tearDown();
	}

}
