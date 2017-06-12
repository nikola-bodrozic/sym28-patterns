<?php

namespace AppBundle;

class Mailer
{
    private $x;

    /**
     * Mailer constructor.
     * @param $x
     */
    public function __construct($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $this->x.$x;
    }
}