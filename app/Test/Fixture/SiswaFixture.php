<?php
/**
 * SiswaFixture
 *
 */
class SiswaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'siswa';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nis' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nama' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'alamat' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tanggal_lahir' => array('type' => 'date', 'null' => false, 'default' => null),
		'jenis_kelamin' => array('type' => 'string', 'null' => false, 'default' => 'L', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nis' => 'Lorem ipsum dolor ',
			'nama' => 'Lorem ipsum dolor sit amet',
			'alamat' => 'Lorem ipsum dolor sit amet',
			'tanggal_lahir' => '2014-06-25',
			'jenis_kelamin' => 'Lorem ipsum dolor sit ame'
		),
	);

}
