<?php
/**
 * EtiquetasPublicacioneFixture
 *
 */
class EtiquetasPublicacioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'etiqueta_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'publicacione_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_etiquetas_publicaciones_etiquetas1_idx' => array('column' => 'etiqueta_id', 'unique' => 0),
			'fk_etiquetas_publicaciones_publicaciones1_idx' => array('column' => 'publicacione_id', 'unique' => 0)
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
			'etiqueta_id' => 1,
			'publicacione_id' => 1
		),
	);

}
