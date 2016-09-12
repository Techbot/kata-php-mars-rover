<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
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

    /**
     * @Given a staring point
     */
    public function aStaringPoint()
    {
        throw new PendingException();
    }

    /**
     * @When I compare input an array of instructions
     */
    public function iCompareInputAnArrayOfInstructions()
    {
        throw new PendingException();
    }

    /**
     * @Then I should move the rover
     */
    public function iShouldMoveTheRover()
    {
        throw new PendingException();
    }



}
