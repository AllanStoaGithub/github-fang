<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2019/4/30
 * Time: 14:46
 */

namespace app\lib\exception;


class FilterException extends BaseException
{
    public $code = 404;
    public $msg = '指定筛选信息不存在，请检查筛选信息ID！';
    public $errorCode = 20000;
}