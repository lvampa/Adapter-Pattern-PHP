<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Step\Given;
use Behat\Step\When;
use Behat\Step\Then;

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

    #[Given('a library reader')]
    public function aLibraryReader(): void
    {
        throw new PendingException();
    }

    #[When('they loan out a book')]
    public function theyLoanOutABook(): void
    {
        throw new PendingException();
    }

    #[Then('they can read the book')]
    public function theyCanReadTheBook(): void
    {
        throw new PendingException();
    }

    #[Given('an audiobook listener')]
    public function anAudiobookListener(): void
    {
        throw new PendingException();
    }

    #[When('they loan an audiobook')]
    public function theyLoanAnAudiobook(): void
    {
        throw new PendingException();
    }

    #[Then('they can listen to the book')]
    public function theyCanListenToTheBook(): void
    {
        throw new PendingException();
    }
}
