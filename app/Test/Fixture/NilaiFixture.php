<?php
/**
 * NilaiFixture
 *
 */
class NilaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'nilai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'siswa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'mapel_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'semester_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nilai' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'siswa_id' => 1,
			'mapel_id' => 1,
			'semester_id' => 1,
			'nilai' => 1
		),
	);

}
