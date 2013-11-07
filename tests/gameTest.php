<?php
/**
 * Created by PhpStorm.
 * User: Marcus Dalgren
 * Date: 2013-11-05
 * Time: 23:56
 */
$path = dirname(dirname(__FILE__));
require_once($path . "/classes/game.php");

class GameTest extends PHPUnit_Framework_TestCase {
	private $g;

	public function setUp() {
		$this->g = new Game();
	}

	/**
	 * @test
	 */
	public function testGutterGame() {
		for ($i = 0; $i < 20; $i++) {
			$this->g->roll(0);
		}
		$this->assertSame(0, $this->g->score());
	}

	public function testGutterGameFail() {
		for ($i = 0; $i < 20; $i++) {
			$this->g->roll(0);
		}
		$this->assertEquals(0, $this->g->score());
	}
}