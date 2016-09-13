<?php

/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 13/09/16
 * Time: 22:36
 */
class MoveBackwardCommand extends AbstractCommand
{
    /**
     * @throws CollisionDetectedException
     */
    public function execute()
    {
        $this->rover->moveBackward();
    }

}