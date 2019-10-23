<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2018/12/14
 * Time: 17:08
 */

namespace app\lib\exception;


class OrderImageException extends BaseException
{
    public $code = 402;
    public $msg = '该订单下无图片信息！';
    public $errorCode = 80000;
}