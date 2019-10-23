<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2018/11/21
 * Time: 14:40
 */

namespace app\lib\exception;


class MenuException extends BaseException
{
    public $code = 404;
    public $msg = '指定菜单不存在，请检查菜单ID';
    public $errorCode = 20000;
}