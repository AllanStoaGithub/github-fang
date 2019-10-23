<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2018/12/5
 * Time: 17:32
 */

namespace app\lib\exception;


class AddressException extends BaseException
{
    public $code = 404;
    public $msg = '指定地址信息不存在，请检查ID';
    public $errorCode = 20000;
}