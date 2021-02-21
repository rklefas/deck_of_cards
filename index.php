<?php


require "vendor/autoload.php";
use InnoBrig\FlexInput\Input;
use Tracy\Debugger;

Debugger::enable(Debugger::DETECT);
Debugger::$showBar = false;
Debugger::$strictMode = true; // display all errors

// Display output appropriate for browser or cli

if (isset($_SERVER['HTTP_HOST']))
{
    $shuffleCount = (int) Input::fromGet('shuffles', 10);
    $tFile = ('index.html');
}
else
{
    $shuffleCount = (int) cli::input("How many shuffles? ");
    $tFile = ('index.txt');
}

// Instantiate the deck

$game = new CardDeck;

// Because the deck always instantiates the cards in the same order,
// we must shuffle to get a unique game


$game->shuffle( $shuffleCount );

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
$template = $twig->load($tFile);

echo $template->render(['display' => $display, 'shuffles' => $shuffleCount]);
