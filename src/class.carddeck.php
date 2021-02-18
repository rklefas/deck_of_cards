<?php


class CardDeck
{
    private $deck = [];
    private $dealt = [];

    public function __construct()
    {
        $ranks = [2, 3, 4, 5, 6, 7, 8, 9, 10, "Jack", "Queen", "King", "Ace"];
        $suits = ["Spades", "Hearts", "Diamonds", "Clubs"];

        foreach ($suits as $suit)
        {
            foreach ($ranks as $rank)
            {
                $this->deck[] = $rank." of ".$suit;
            }
        }
    }

    /**
    * A reusable algorithm for shuffling an array.
    */
    private function shuffle_algorithm($array)
    {
        $newArray = [];

        foreach ($array as $card)
        {
            $newArray[$card] = mt_rand(1, 1000000);
        }

        asort($newArray);

        return array_keys($newArray);
    }

    /**
    * Shuffle the deck
    */
    public function shuffle()
    {
        $this->deck = $this->shuffle_algorithm($this->deck);
    }


    /**
    * Pop the last card out of the deck and return it.
    */
    public function deal_one_card()
    {
        $popped = array_pop($this->deck);
        $this->dealt[] = $popped;
        return $popped;
    }

    /**
    * Return a count of the number of cards already dealt.
    */
    public function get_number_dealt()
    {
        return count($this->dealt);
    }

}
