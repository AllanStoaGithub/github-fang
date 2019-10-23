<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2019/4/30
 * Time: 14:46
 */

namespace app\lib\exception;


class NavException extends BaseException
{
    public $code = 404;
    public $msg = '指定导航信息不存在，请检查导航信息ID！';
    public $errorCode = 20000;
}