<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2018/12/6
 * Time: 11:44
 */

namespace app\lib\exception;


class TimeException extends BaseException
{
    public $code = 408;
    public $msg = '选择日期应大于当前日期！';
    public $errorCode = 10000;
}