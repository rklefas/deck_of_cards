<?php

interface CodeChallenge
{
    /**
    * Shuffle the deck, specify the number of shuffles
    */
    public function shuffle($times = 15);

    /**
    * Pop the last card out of the deck and return it.
    */
    public function deal_one_card();
}
