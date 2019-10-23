<?php

namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $aaa = json_encode(['1','2','3']);
        $this->assign('aaa', $aaa);
        // return json(['1','2','3','4']);
        return $this->fetch();
    }
}