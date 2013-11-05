<?php
/**
 * Created by PhpStorm.
 * User: Marcus Dalgren
 * Date: 2013-11-05
 * Time: 23:47
 */
require("./vendor/autoload.php");
require("./classes/game.php");
function rollMany(Game $game, $n, $pins) {
	for ($i = 0; $i < $n; $i++) {
		$game->roll($pins);
	}
}
$game = new Game();
rollMany($game, 12, 10);
echo $game->score();