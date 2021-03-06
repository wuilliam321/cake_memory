<?php
/**
 * UnidadinvestigacioneFixture
 *
 */
class UnidadinvestigacioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'instituto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'unidadinvestigaciontipo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'nombre' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_unidadinvestigaciones_institutos1_idx' => array('column' => 'instituto_id', 'unique' => 0),
			'fk_unidadinvestigaciones_unidadinvestigaciontipos1_idx' => array('column' => 'unidadinvestigaciontipo_id', 'unique' => 0)
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
			'instituto_id' => 1,
			'unidadinvestigaciontipo_id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
