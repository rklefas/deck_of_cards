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
    * Shuffle the deck, specify the number of shuffles
    */
    public function shuffle()
    {
        $this->deck = Shuffler::shuffle_algorithm($this->deck, 10);
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
