<?php

namespace Base;


class Fight
{
    protected $speed;
    protected $holdtime;

    public function __construct($speed, $holdtime)
    {
        $this->speed = $speed;
        $this->holdtime = $holdtime;
    }
}