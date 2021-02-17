# deck_of_cards


## Coding Challenge

### Implement a Deck of Cards

We would like you to create a C# or PHP implementation for a standard deck of poker-style playing
cards. This deck is 52 cards with 4 suits (Hearts, Diamonds, Clubs and Spades) and 13 ranks (Ace, 2-10,
Jack, Queen, and King).

One of your classes should expose at least the following methods:

shuffle () - Shuffle returns no value but results in the cards in the deck being randomly permuted. Please
*do not* use a library-provided “shuffle” operation to implement this function. You may use libraryprovided random number generators in your solution.

deal_one_card () - This function should return one card from the deck to the caller. If all cards have been
dealt, no card is returned.

Specifically, a call to shuffle () followed by 52 calls to deal_one_card () should result in the caller being
provided all 52 cards of the deck in a random order. If the caller then makes a 53rd call to
deal_one_card (), no card is dealt.
