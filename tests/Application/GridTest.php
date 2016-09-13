<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 13/09/16
 * Time: 20:47
 */

namespace Application;


class GridTest extends \PHPUnit_Framework_TestCase
{

    public function test_xand_Y_canb_be_set()
    {
        // Arrange
        $a = new Grid(5,5);

        // Assert
        $this->assertEquals(5,$a->getXSize());
    }

}
