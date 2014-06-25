<?php
App::uses('Mapel', 'Model');

/**
 * Mapel Test Case
 *
 */
class MapelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mapel',
		'app.nilai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mapel = ClassRegistry::init('Mapel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mapel);

		parent::tearDown();
	}

}
