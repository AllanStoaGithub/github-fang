<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2019/4/30
 * Time: 14:46
 */

namespace app\lib\exception;


class PositionException extends BaseException
{
    public $code = 404;
    public $msg = '指定推荐位信息不存在，请检查推荐位信息ID！';
    public $errorCode = 20000;
}