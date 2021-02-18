<?php


require "vendor/autoload.php";



// Instantiate the deck

$game = new CardDeck;

// Because the deck always instantiates the cards in the same order,
// we must shuffle to get a unique game

$game->shuffle();

// Deal the cards into an array that we can display in the HTML
// template.

$display = [];

while ($card = $game->deal_one_card())
{
    $display[] = "Card #{$game->get_number_dealt()} is {$card}";
}

// Load the Twig template engine and pass the $display array.

$loader = new \Twig\Loader\FilesystemLoader('./templates/');
$twig = new \Twig\Environment($loader);
$template = $twig->load('index.html');
echo $template->render(['display' => $display]);
