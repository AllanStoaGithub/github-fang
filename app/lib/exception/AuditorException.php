<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2018/12/3
 * Time: 15:00
 */

namespace app\lib\exception;


class AuditorException extends BaseException
{
    public $code = 404;
    public $msg = '指定审核信息不存在，请检查ID';
    public $errorCode = 20000;
}