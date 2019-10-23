<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2018/12/24
 * Time: 11:46
 */

namespace app\lib\exception;


class OrderExistException extends BaseException
{
    public $code = 406;
    public $msg = '该车辆存在未完成的订单信息，暂不能重新下订单！';
    public $errorCode = 80000;
}