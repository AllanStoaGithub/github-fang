<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2018/11/21
 * Time: 14:44
 */

namespace app\lib\exception;

/**
 * 数据集为空时抛出此异常
 */
class EmptyException extends BaseException
{
    public $code = 402;
    public $errorCode = 10001;
    public $msg = "返回数据为空！";
}