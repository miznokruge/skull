<?php
/**
 * VnilaiFixture
 *
 */
class VnilaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'vnilai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'nis' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nama_siswa' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'kode_semester' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6, 'unsigned' => false),
		'kode' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nama_mata_pelajaran' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nilai' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'nis' => 'Lorem ipsum dolor ',
			'nama_siswa' => 'Lorem ipsum dolor sit amet',
			'kode_semester' => 1,
			'kode' => 'Lorem ipsum dolor sit amet',
			'nama_mata_pelajaran' => 'Lorem ipsum dolor sit amet',
			'nilai' => 1
		),
	);

}
