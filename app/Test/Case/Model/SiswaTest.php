<?php
App::uses('Siswa', 'Model');

/**
 * Siswa Test Case
 *
 */
class SiswaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.siswa',
		'app.nilai',
		'app.mapel',
		'app.semester'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Siswa = ClassRegistry::init('Siswa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Siswa);

		parent::tearDown();
	}

}
