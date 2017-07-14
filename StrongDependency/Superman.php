<?php

namespace StrongDependency;

use Base\Power;
use Base\Shot;

class Superman
{
    /**
     * 基础能力
     */
    protected $power;


    public function __construct()
    {
        $this->power = new Power('瞬间移动', 1000);
//        $this->power = new  Shot(100, 200, 10);
    }

    public function __toString()
    {
        return serialize($this);
    }
}


// 各种例子中使用超人和超能力的例子解释依赖注入,大概是因为超人的能力是与生俱来的,这便是强依赖的体现.
// 超人依赖的超能力,少了超能力超人便没有办法构造.假设目前需要超人拥有元气弹的能力,
// 相比普通的能力,元气弹还需要最大射击次数的属性,则必须新添依赖.