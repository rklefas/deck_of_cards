<?php


require "vendor/autoload.php";





$game = new CardDeck;
$game->shuffle();

while ($card = $game->deal_one_card())
{
	$display[] = "Card #{$game->get_number_dealt()} is {$card}\n";
}


$loader = new \Twig\Loader\FilesystemLoader('./templates/');
$twig = new \Twig\Environment($loader);

$template = $twig->load('index.html');
echo $template->render(['display' => $display]);

