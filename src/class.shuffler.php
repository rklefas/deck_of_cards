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
            // Break the array into several piles
            $piles = [[], [], [], []];

            foreach ($array as $item)
            {
                // Randomly decide which pile the card goes into
                $piles[ mt_rand(0, 3) ][] = $item;
            }

            // Put the piles back together
            $combined = array_merge($piles[0], $piles[1], $piles[2], $piles[3]);

            // Shuffle the array again
            $combined = self::shuffle_algorithm($combined, $shuffleRemaining - 1);

            return $combined;
        }

        // Just return the array if we have shuffled it enough
        return $array;
    }


}
