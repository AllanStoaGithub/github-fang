<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2019/5/3
 * Time: 10:29
 */

namespace app\lib\exception;


class FloorPhotoException extends BaseException
{
    public $code = 404;
    public $msg = '指定楼盘相册信息不存在，请检查楼盘相册信息ID';
    public $errorCode = 20000;
}