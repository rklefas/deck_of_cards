<?php



class Shuffler
{
	
	/**
    * A reusable algorithm for shuffling an array.
    */
    static public function shuffle_algorithm($array, $shuffleRemaining = 10)
    {
		if ($shuffleRemaining > 0)
		{
			// Break the array into two piles
			$piles = [];
			
			foreach ($array as $item)
			{
				// Randomly decide which pile the card goes into
				
				$piles[ mt_rand(0, 1) ? 'one' : 'two' ][] = $item;
			}
			
			// Put the piles back together
			
			$combined = array_merge($piles['one'], $piles['two']);
			
			// Shuffle the array again
			
			$combined = self::shuffle_algorithm($combined, $shuffleRemaining - 1);
			
			return $combined;
		}
		
		return $array;
    }
	

}