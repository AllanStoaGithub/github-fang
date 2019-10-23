<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2018/12/4
 * Time: 14:41
 */

namespace app\lib\exception;


class SignatureException extends BaseException
{
    public $code = 407;
    public $msg = 'Signature数字签名失败';
    public $errorCode = 10001;
}