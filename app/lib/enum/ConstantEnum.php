<?php

namespace app\lib\enum;

/**
 * 常量
 */
class ConstantEnum
{
    const Lists = [
            'status' => [
                ['key' => '0', 'title' => '关闭'],
                ['key' => '1', 'title' => '开启'],
            ],
            'city_domain' => [
                ['key' => '0', 'title' => '关闭'],
                ['key' => '1', 'title' => '开启'],
            ],
            //购房红包
            'red_packet' => [
                ['key' => '0', 'title' => '关闭'],
                ['key' => '1', 'title' => '开启'],
            ],
            'platform' => [
                ['key' => '1', 'title' => '阿里云'],
            ],
            'open_water' => [
                ['key' => '0', 'title' => '关闭'],
                ['key' => '1', 'title' => '开启'],
            ],
            'water_type' => [
                ['key' => '1', 'title' => '图片'],
                ['key' => '2', 'title' => '文字'],
            ],
            'water_pos' => [
                ['key' => '1', 'title' => '顶部居左'],
                ['key' => '2', 'title' => '顶部居中'],
                ['key' => '3', 'title' => '顶部居右'],
                ['key' => '4', 'title' => '左侧居中'],
                ['key' => '5', 'title' => '居中'],
                ['key' => '6', 'title' => '右侧居中'],
                ['key' => '7', 'title' => '底部居左'],
                ['key' => '8', 'title' => '底部居中'],
                ['key' => '9', 'title' => '底部居右'],
            ],
            'cloud_storage' => [
                ['key' => '0', 'title' => '关闭'],
                ['key' => '1', 'title' => '开启'],
            ],
            'upload_type' => [
                ['key' => '1', 'title' => '图片'],
                ['key' => '2', 'title' => '音视频'],
            ],
            'type' => [
                ['key' => '1', 'title' => '阿里云OSS'],
            ],
            'pos' => [
                ['key' => '1', 'title' => '页头菜单'],
                ['key' => '2', 'title' => '页脚菜单'],
            ],
            'open_type' => [
                ['key' => '1', 'title' => '新窗口'],
                ['key' => '2', 'title' => '当前窗口'],
            ],
            'request_method' => [
                ['key' => '1', 'title' => 'GET'],
                ['key' => '2', 'title' => 'POST'],
                ['key' => '3', 'title' => 'PUT'],
                ['key' => '4', 'title' => 'DELETE'],
            ],
            'is_hot' => [
                ['key' => '0', 'title' => '否'],
                ['key' => '1', 'title' => '是'],
            ],
            'poster_space_type' => [
                ['key' => 'banner', 'title' => 'PC端首页广告'],
                ['key' => 'slide_pc', 'title' => 'PC端轮播图'],
            ],
            'poster_type' => [
                ['key' => 'images', 'title' => '图片'],
                ['key' => 'flash', 'title' => '动画'],
            ],
            'often' => [
                ['key' => '0', 'title' => '否'],
                ['key' => '1', 'title' => '是'],
            ],
            'display' => [
                ['key' => '0', 'title' => '否'],
                ['key' => '1', 'title' => '是'],
            ],
            'sale_status' => [
                ['key' => '0', 'title' => '售完'],
                ['key' => '1', 'title' => '未售'],
                ['key' => '2', 'title' => '在售'],
            ],
        ];
}