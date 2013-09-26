<?php
/**
 * AutoresPublicacioneFixture
 *
 */
class AutoresPublicacioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'publicacione_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'autore_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_autores_publicaciones_publicaciones1_idx' => array('column' => 'publicacione_id', 'unique' => 0),
			'fk_autores_publicaciones_autores1_idx' => array('column' => 'autore_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'publicacione_id' => 1,
			'autore_id' => 1
		),
	);

}
