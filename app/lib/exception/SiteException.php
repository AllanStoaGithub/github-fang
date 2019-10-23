<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2019/4/22
 * Time: 20:47
 */

namespace app\lib\exception;


class SiteException extends BaseException
{
//    public $code = 404;
    public $msg = '不存在站点设置信息，请先增加站点信息！';
    public $errorCode = 20000;
}