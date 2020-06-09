<?php

namespace think\tp5upgrade;

use think\Exception;

/**
 * 插件异常处理类
 * @package think\tp5upgrade
 */
class AddonException extends Exception
{

    public function __construct($message, $code, $data = '')
    {
        $this->message  = $message;
        $this->code     = $code;
        $this->data     = $data;
    }

}
