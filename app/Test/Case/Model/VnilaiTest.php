<?php
App::uses('Vnilai', 'Model');

/**
 * Vnilai Test Case
 *
 */
class VnilaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vnilai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vnilai = ClassRegistry::init('Vnilai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vnilai);

		parent::tearDown();
	}

}
