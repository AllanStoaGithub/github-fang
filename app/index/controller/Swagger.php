<?php

namespace app\index\controller;

use think\Controller;

class Swagger extends Controller
{

    /**
     * @SWG\Swagger(
     *     swagger="2.0",
     *     schemes={"http"},
     *     host="47.112.131.32",
     *     basePath="/v1",
     *     @SWG\Info(
     *         version="1.0",
     *         title="hnfang接口文档",
     *         description="心随网络科技管理系统接口文档"
     *     )
     * )
     * 
     * @SWG\Tag(
     *      name="Position",
     *      description="推荐位管理",
     * )
     * 
     * @SWG\Tag(
     *      name="Link",
     *      description="友情链接管理",
     * )
     * 
      * @SWG\Tag(
     *      name="City",
     *      description="省市区JSON数据",
     * )
     * 
     * @SWG\Tag(
     *      name="User",
     *      description="用户管理",
     * )
     */
    public function index()
    {
        $path = '../app'; //你想要哪个文件夹下面的注释生成对应的API文档
        $swagger = \Swagger\scan($path);
        // header('Content-Type: application/json');
        // return $swagger;
        // $swagger_json_path = $path.'/swagger-docs/swagger.json';
        $swagger_json_path = './swagger-docs/swagger.json';
        $res = file_put_contents($swagger_json_path, $swagger);
        if ($res == true) {
        $this->redirect('http://hnfang.com/swagger-ui/dist/index.html');
        }
    }
}