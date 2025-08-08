<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Step\Given;
use Behat\Step\When;
use Behat\Step\Then;

use Training\Adapter\SimpleExample\LibraryPatron;
use Training\Adapter\SimpleExample\Book;
use Training\Adapter\SimpleExample\AudioBookAdapter;
use Training\Adapter\SimpleExample\AudioBook;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    #[Given('a library patron and a book')]
    public function aLibraryPatron(): void
    {
        $this->patron = new LibraryPatron();
        $this->book = new Book();
    }

    #[When('they read the book')]
    public function theyReadABooook(): void
    {
        $this->patron->readBook($this->book);
    }

    #[Then('the book is marked as read')]
    public function thenTheBookIsRead(): void
    {
      if (!$this->book->hasBeenRead) {
          throw new Exception('Book is not marked as read.');
      }
    }

    #[Given('a library patron and an audio book')]
    public function anotherLibraryPatron(): void
    {
        $audioBook = new AudioBook();
        $this->patron = new LibraryPatron();
        $this->audioBookAdapter = new AudioBookAdapter($audioBook);
    }

    #[When('they listen to an audio book')]
    public function theyListenToAnAudioBook(): void
    {
        $this->patron->readBook($this->audioBookAdapter);
    }

    #[Then('the audio book is marked as listened to')]
    public function theAudioBookIsMarkedAsListenedTo(): void
    {
      if (!$this->audioBookAdapter->hasBeenRead) {
          throw new Exception('Audiobook has not been listened to.');
      }
    }
}
