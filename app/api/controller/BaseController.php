<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2018/11/21
 * Time: 11:21
 */

namespace app\api\controller;


use app\api\service\Token;
use think\Controller;
use app\lib\enum\ConstantEnum;

class BaseController extends Controller
{
    //用户专有权限
    protected function checkExclusiveScope()
    {
        Token::needExclusiveScope();
    }

    //验证token是否合法或者是否过期
    protected function checkPrimaryScope()
    {
        Token::needPrimaryScope();
    }

    //管理员专有权限
    protected function checkSuperScope()
    {
        Token::needSuperScope();
    }

    protected function returnJsonData($result, $code=0, $msg='成功!'){
        // return $result;
        $result = array_to_string($result);
        return $result;
        return json(['errorCode'=>$code, 'msg'=>$msg, 'result'=>$result]);
    }

    //获取常量数据-写入缓存
    protected function saveConstantToCache(){
        return ConstantEnum::Lists;
    }
}