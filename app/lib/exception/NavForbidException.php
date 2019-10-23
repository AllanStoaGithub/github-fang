<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2019/5/2
 * Time: 10:03
 */

namespace app\lib\exception;


class NavForbidException extends BaseException
{
    public $code = 403;
    public $msg = '该导航设置信息禁止删除！';
    public $errorCode = 10002;
}