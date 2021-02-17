<?php


require "vendor/autoload.php";


$game = new CardDeck;
$game->shuffle();

while ($card = $game->deal_one_card())
{
	echo "Card #{$game->get_number_dealt()} is {$card}\n";
}


// call #53 is null
var_dump($game->deal_one_card());
