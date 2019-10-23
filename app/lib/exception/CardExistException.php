<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2019/1/12
 * Time: 23:24
 */

namespace app\lib\exception;


class CardExistException extends BaseException
{
    public $code = 410;
    public $msg = '已存在该车牌号信息，请勿提交重复信息！';
    public $errorCode = 20000;
}