<?php

namespace Ledc\Container;

use think\Container;

/**
 * 应用
 */
class App extends Container
{
    /**
     * 构造函数
     */
    public function __construct()
    {
        static::setInstance($this);
        $this->instance('app', $this);
        $this->instance('think\Container', $this);
        $this->instance(App::class, $this);
    }
}
