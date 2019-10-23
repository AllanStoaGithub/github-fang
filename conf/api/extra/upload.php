<?php
/**
 * Created by PhpStorm.
 * User: 赵群
 * Date: 2018/12/11
 * Time: 16:57
 */
return [

    //上传目录
    'upload_path'=>'/upload',

    //上传图片文件路径
    'upload_images_path'=>'/upload/images',
    //存储上传图片文件的数据表名称
//    'upload_images_table'=>'mk_common_images',
    'upload_images_validate'=>[
        'size'=>1024*1024*5,
        'ext'=>'jpg,png,gif'
    ],

    //上传文件路径
    "upload_files_path"=>'/upload/files',
    //存储上传图片文件的数据表名称
//    'upload_files_table'=>'mk_common_files',
    'upload_files_validate'=>[
        'size'=>1024*1024*5,
        'ext'=>'doc,rar,7z'
    ],


];