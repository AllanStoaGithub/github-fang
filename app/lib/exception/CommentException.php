<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2018/12/3
 * Time: 16:28
 */

namespace app\lib\exception;


class CommentException extends BaseException
{
    public $code = 404;
    public $msg = '指定评论信息不存在，请检查ID';
    public $errorCode = 20000;
}