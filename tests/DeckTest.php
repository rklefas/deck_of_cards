<?php
use PHPUnit\Framework\TestCase;

final class DeckTest extends TestCase
{
    public function testFirstCardOfUnshuffledDeck()
    {
        $deck = new CardDeck;

        $this->assertEquals($deck->deal_one_card(), "Ace of Clubs");
    }


    public function testNumberDealtIncreasesOnEachDeal()
    {
        $deck = new CardDeck;

        for ($loops = 1; $loops < 53; $loops++)
        {
            $deck->deal_one_card();

            $this->assertEquals($deck->get_number_dealt(), $loops);
        }

    }

    public function testShufflingChangesDeck()
    {
        $deck = new CardDeck;

        while ($card = $deck->deal_one_card())
        {
            $unshuffled[] = $card;
        }

        $deck = new CardDeck;
        $deck->shuffle();

        while ($card = $deck->deal_one_card())
        {
            $shuffled[] = $card;
        }

        $this->assertEquals(count($unshuffled), 52);
        $this->assertEquals(count($shuffled), 52);

        $this->assertNotEquals($unshuffled, $shuffled);
    }



}
