<?php

/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 13/09/16
 * Time: 22:37
 */
abstract class AbstractCommand
{
    /** @var Rover $rover */
    protected $rover;
    /**
     * @param Rover $rover
     */
    public function __construct($rover)
    {
        $this->rover = $rover;
    }
}