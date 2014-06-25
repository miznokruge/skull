<?php
App::uses('Nilai', 'Model');

/**
 * Nilai Test Case
 *
 */
class NilaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nilai',
		'app.siswa',
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
		$this->Nilai = ClassRegistry::init('Nilai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Nilai);

		parent::tearDown();
	}

}
