<?php
namespace Base;

class Shot
{
    /**
     * 伤害值
     */
    protected $atk;

    /**
     * 射击距离
     */
    protected $range;

    /**
     * 最大射击次数
     */
    protected $limit;

    public function __construct($atk, $range, $limit)
    {
        $this->atk = $atk;
        $this->range = $range;
        $this->limit = $limit;
    }
}