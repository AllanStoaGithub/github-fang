<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2019/5/5
 * Time: 21:17
 */

namespace app\lib\exception;


class PosterSpaceException extends BaseException
{
    public $code = 404;
    public $msg = '指定广告位信息不存在，请检查广告位信息ID';
    public $errorCode = 20000;
}