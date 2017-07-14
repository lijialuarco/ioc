<?php

namespace DependencyInjection;
class Superman
{
    protected $power;

    public function __construct(SuperModuleInterface $modules)
    {
        $factory = new SuperModuleFactory;

        // 这些是演化阶段-01的代码
//        $this->power = $factory->makeModule('Fight', [9, 200]);
//        $this->power = [
//            $factory->makeModule('Force', [45]),
//            $factory->makeModule('Shot', [45, 56, 2]),
//        ];
        foreach ($modules as $moduleName => $moduleOptions) {
            $this->power[] = $factory->makeModule($moduleName, $moduleOptions);
        }

    }

    public function __toString()
    {
        return serialize($this);
    }
}