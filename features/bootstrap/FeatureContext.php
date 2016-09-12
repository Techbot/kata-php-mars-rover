<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
Use PHPUnit_Framework_Assert as Assert;
/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    private $startingPoint;
    private $rover;
    private $instructions;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {

        $this->instructions =['L','F','R','F','F'];

    }

    /**
     * @Given Rover
     */
    public function rover()
    {
        $this->rover = new \Application\Rover();
    }

    /**
     * @Given a starting point
     */
    public function aStartingPoint()
    {
        $this->startingPoint= new \Application\StartingPoint();
    }

    /**
     * @When I compare an input array of instructions
     */
    public function iCompareAnInputArrayOfInstructions()
    {

        $this->rover->compare($this->instructions);
    }

    /**
     * @Then I should move the rover
     */
    public function iShouldMoveTheRover()
    {
        Assert::assertTrue($this->rover->getMoved());

    }



}
