<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 12/09/16
 * Time: 14:41
 */

namespace Application;

interface Direction
{
    /**
     * @param Rover $rover
     */
    public function turnLeft(Rover $rover);
    /**
     * @param Rover $rover
     */
    public function turnRight(Rover $rover);
    /**
     * @param Rover $rover
     */
    public function moveForward(Rover $rover);
    /**
     * @param Rover $rover
     */
    public function moveBackward(Rover $rover);
}