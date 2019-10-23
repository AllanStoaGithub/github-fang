<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2018/11/21
 * Time: 14:42
 */

namespace app\lib\exception;


class ArticleCateException extends BaseException
{
    public $code = 404;
    public $msg = '指定文章分类信息不存在，请检查文章分类信息ID';
    public $errorCode = 20000;
}
