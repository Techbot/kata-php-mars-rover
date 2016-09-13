<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 13/09/16
 * Time: 20:48
 */

namespace Application;


class RoverTest extends \PHPUnit_Framework_TestCase
{
    public function test_rover_be_set_()
    {
        // Arrange
        $a = new Rover();

        // Assert
        $this->assertTrue(
            method_exists($a, 'compare'),
            'Class does not have method compare'
        );

        $instructions = ['L', 'F'];
        $a->compare($instructions);


    }

    /**
     * Assert that a class has a method
     *
     * @param string $class name of the class
     * @param string $method name of the searched method
     * @throws ReflectionException if $class don't exist
     * @throws PHPUnit_Framework_ExpectationFailedException if a method isn't found
     */
    function assertMethodExist($class, $method) {
        $oReflectionClass = new ReflectionClass($class);
        assertThat("method exist", true, $oReflectionClass->hasMethod($method));
    }
}
