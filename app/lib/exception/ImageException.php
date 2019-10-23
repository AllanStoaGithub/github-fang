<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2018/12/13
 * Time: 11:03
 */

namespace app\lib\exception;


class ImageException extends BaseException
{
    public $code = 405;
    public $errorCode = 10001;
    public $msg = "图片提交信息为空！";
}