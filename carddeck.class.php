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
	
	
	
	public function shuffle()
	{
		$this->deck = $this->shuffle_algorithm($this->deck);
	}
	
	
	
	public function deal_one_card()
	{
		$popped = array_pop($this->deck);
		$this->dealt[] = $popped;
		return $popped;
	}
	
	
	public function get_number_dealt()
	{
		return count($this->dealt);
	}
	
}
