<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2018/11/21
 * Time: 14:42
 */

namespace app\lib\exception;


class CardException extends BaseException
{
    public $code = 404;
    public $msg = '指定行驶证不存在，请检查行驶证ID';
    public $errorCode = 20000;
}