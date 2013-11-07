<?php
/**
 * Created by PhpStorm.
 * User: Marcus Dalgren
 * Date: 2013-11-05
 * Time: 23:55
 */
class Game {
	private $rolls = array();

	public function roll($pins) {
		$this->rolls[] = $pins;
	}

	public function score() {
	}
}