<?php

namespace Application;

class Grid
{

    /** @var Obstacle[] $obstacles */
    private $obstacles = array();

    /** @var integer $xSize */
    private $xSize;

    /**
     * @return Obstacle[]
     */
    public function getObstacles()
    {
        return $this->obstacles;
    }

    /**
     * @param Obstacle[] $obstacles
     */
    public function setObstacles($obstacles)
    {
        $this->obstacles = $obstacles;
    }

    /**
     * @return int
     */
    public function getXSize()
    {
        return $this->xSize;
    }

    /**
     * @param int $xSize
     */
    public function setXSize($xSize)
    {
        $this->xSize = $xSize;
    }

    /**
     * @return int
     */
    public function getYSize()
    {
        return $this->ySize;
    }

    /**
     * @param int $ySize
     */
    public function setYSize($ySize)
    {
        $this->ySize = $ySize;
    }
    /** @var integer $ySize */
    private $ySize;
    /**
     * @param $xSize
     * @param $ySize
     */
    public function __construct($xSize, $ySize)
    {
        $this->xSize = $xSize;
        $this->ySize = $ySize;
    }


}
