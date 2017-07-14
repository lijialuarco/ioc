<?php
namespace DependencyInjection;


interface SuperModuleInterface
{
    /**
     * 超能力激活方法
     * @param array $target 针对目标?
     *
     */
    public function activate(array $target);
}