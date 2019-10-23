<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2018/12/13
 * Time: 13:38
 */

namespace app\lib\exception;


class SqlException extends BaseException
{
    public $code = 409;
    public $errorCode = 10001;
    public $msg = "记录到数据库失败！";
}