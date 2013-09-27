<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.group',
		'app.autore',
		'app.unidadinvestigacione',
		'app.instituto',
		'app.profesione',
		'app.otroestudio',
		'app.otroestudiotipo',
		'app.publicacione',
		'app.comentario',
		'app.recursomultimedia',
		'app.recursomultimediatipo',
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
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
