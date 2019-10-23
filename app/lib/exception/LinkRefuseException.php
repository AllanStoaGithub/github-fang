<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2019/4/30
 * Time: 14:46
 */

namespace app\lib\exception;


class LinkRefuseException extends BaseException
{
    public $code = 404;
    public $msg = '指定链接下还存在信息，不能被删除！';
    public $errorCode = 40000;
}