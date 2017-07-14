<?php

namespace DependencyInjection;

class SuperModuleFactory
{
    public function makeModule($moduleName, $options)
    {
        switch ($moduleName) {
            case 'Fight':
                return new \Base\Fight($options[0], $options[1]);
            case 'Force':
                return new \Base\Force($options[0]);
            case 'Shot':
                return new \Base\Shot($options[0], $options[1], $options[2]);
        }
    }
}