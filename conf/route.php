<?php

use think\Route;

//前台-首页
Route::group('index/:version/index', function (){
    Route::get('', 'index/Index/index');
});

//swagger-接口文档
Route::group('index/:version/swagger', function (){
    Route::get('', 'index/Swagger/index');
});

//Token-登录
Route::group('api/:version/token', function (){
    Route::post('app', 'api/:version.Token/getAppToken');
    /*Route::post('verify', 'api/:version.Token/verifyToken');
    Route::post('station', 'api/:version.TokenStation/getToken');*/
});

//Menu-管理后台菜单，菜单设置
Route::group('api/:version/menu', function (){
    Route::get('all', 'api/:version.Menu/getMenuAll');
    Route::get(':id', 'api/:version.Menu/getLeftMenu',[], ['id'=>'\d+']);
    Route::get('list', 'api/:version.Menu/getMenuList');
    Route::get('child/:id', 'api/:version.Menu/getChildInfo',[], ['id'=>'\d+']);
    Route::post('child', 'api/:version.Menu/createChildMenu');
    Route::post('', 'api/:version.Menu/createOrUpdateMenu');
    Route::delete(':id', 'api/:version.Menu/deleteOne',[], ['id'=>'\d+']);
});

//General-控制面板
Route::group('api/:version/general', function (){
    Route::get('all', 'api/:version.General/getGeneral');
});

//Setting-站点设置
Route::group('api/:version/setting', function (){
    Route::get('site', 'api/:version.Setting/getSite');
    Route::post('site', 'api/:version.Setting/createOrUpdateSite');
    Route::get('sms', 'api/:version.Setting/getSms');
    Route::post('sms', 'api/:version.Setting/createOrUpdateSms');
    Route::get('water', 'api/:version.Setting/getWater');
    Route::post('water', 'api/:version.Setting/createOrUpdateWater');
    Route::get('weixin', 'api/:version.Setting/getWeixin');
    Route::post('weixin', 'api/:version.Setting/createOrUpdateWeixin');
    Route::get('storage', 'api/:version.Setting/getStorage');
    Route::post('storage', 'api/:version.Setting/createOrUpdateStorage');
});

//Nav-导航设置
Route::group('api/:version/nav', function (){
    Route::get('all', 'api/:version.Nav/getNav');
    Route::post('update', 'api/:version.Nav/updateNav');
    Route::get(':id', 'api/:version.Nav/getNavInfo',[], ['id'=>'\d+']);
    Route::post('', 'api/:version.Nav/createOrUpdateNav');
    Route::delete(':id', 'api/:version.Nav/deleteOne',[], ['id'=>'\d+']);
});

//Region-区域列表
Route::group('api/:version/region', function (){
    Route::get('list', 'api/:version.Region/getRegionList');
    Route::post('update', 'api/:version.Region/updateRegion');
    Route::post('add', 'api/:version.Region/createRegion');
    Route::get('look/:id', 'api/:version.Region/getRegionLook',[], ['id'=>'\d+']);
    Route::get(':id', 'api/:version.Region/getRegionInfo',[], ['id'=>'\d+']);
    Route::post('', 'api/:version.Region/createOrUpdateRegion');
    Route::delete(':id', 'api/:version.Region/deleteOne',[], ['id'=>'\d+']);
});

//PosterSpace-广告位列表
Route::group('api/:version/poster_space', function (){
    Route::get('list', 'api/:version.Poster/getPosterSpaceList');
    Route::post('add', 'api/:version.Poster/createPosterSpace');
    Route::post('update', 'api/:version.Poster/updatePosterSpace');
    Route::delete(':id', 'api/:version.Poster/deletePosterSpace',[], ['id'=>'\d+']);
});

//Poster-广告列表
Route::group('api/:version/poster', function (){
    Route::get('look/:id', 'api/:version.Poster/getPosterLook',[], ['id'=>'\d+']);
    Route::get(':id', 'api/:version.Poster/getPosterInfo',[], ['id'=>'\d+']);
    Route::post('', 'api/:version.Poster/createOrUpdatePoster');
    Route::delete(':id', 'api/:version.Poster/deletePoster',[], ['id'=>'\d+']);
});

//Upload-图片上传
Route::group('api/:version/upload', function (){
    Route::post('/image', 'api/:version.Upload/uploadImage');
});

//Floor-楼盘管理
Route::group('api/:version/floor', function (){
    Route::get('list', 'api/:version.Floor/getFloorList');
    Route::get(':id', 'api/:version.Floor/getFloorInfo',[], ['id'=>'\d+']);
    Route::post('add', 'api/:version.Floor/createFloor');
    Route::post('update', 'api/:version.Floor/updateFloor');
    Route::delete(':id', 'api/:version.Floor/deleteFloorOne',[], ['id'=>'\d+']);

    Route::get('type/list/:hid', 'api/:version.Floor/getFloorTypeList',[], ['hid'=>'\d+']);
    // Route::get('type/:id', 'api/:version.Floor/getFloorTypeInfo',[], ['id'=>'\d+']);
    Route::post('type/add', 'api/:version.Floor/createFloorType');
    Route::post('type/update', 'api/:version.Floor/updateFloorType');
    Route::delete('type/:id', 'api/:version.Floor/deleteFloorTypeOne',[], ['id'=>'\d+']);

    Route::get('photo/list', 'api/:version.Floor/getFloorPhotoList');
    Route::get('photo/:id', 'api/:version.Floor/getFloorPhotoInfo',[], ['id'=>'\d+']);
    Route::post('photo/add', 'api/:version.Floor/createFloorPhoto');
    Route::post('photo/update', 'api/:version.Floor/updateFloorPhoto');
    Route::delete('photo/:id', 'api/:version.Floor/deleteFloorPhotoOne',[], ['id'=>'\d+']);

    Route::get('article/list/:hid', 'api/:version.Floor/getFloorArticleList',[], ['hid'=>'\d+']);
    Route::get('article/:id', 'api/:version.Floor/getFloorArticleInfo',[], ['id'=>'\d+']);
    Route::post('article/add', 'api/:version.Floor/createFloorArticle');
    Route::post('article/update', 'api/:version.Floor/updateFloorArticle');
    Route::delete('article/:id', 'api/:version.Floor/deleteFloorArticleOne',[], ['id'=>'\d+']);

    Route::get('sand/list/:hid', 'api/:version.Floor/getFloorSandList',[], ['hid'=>'\d+']);
    Route::get('sand/:id', 'api/:version.Floor/getFloorSandInfo',[], ['id'=>'\d+']);
    Route::post('sand/add', 'api/:version.Floor/createFloorSand');
    Route::post('sand/update', 'api/:version.Floor/updateFloorSand');
    Route::delete('sand/:id', 'api/:version.Floor/deleteFloorSandOne',[], ['id'=>'\d+']);
});


//Developer-开发商管理
Route::group('api/:version/developer', function (){
    Route::get('list', 'api/:version.Developer/getDeveloperList');
    Route::get(':id', 'api/:version.Developer/getDeveloperInfo',[], ['id'=>'\d+']);
    Route::post('', 'api/:version.Developer/createOrUpdatePoster');
    Route::delete(':id', 'api/:version.Developer/deletePoster',[], ['id'=>'\d+']);
});


//Article-文章管理
Route::group('api/:version/article', function (){
    //文章分类
    Route::get('cate/list', 'api/:version.Article/getArticleCateList');
    // Route::get('cate/:id', 'api/:version.Article/getArticleCateInfo',[], ['id'=>'\d+']);
    Route::post('cate/add', 'api/:version.Article/createArticleCate');
    Route::post('cate/update', 'api/:version.Article/updateArticleCate');
    Route::delete('cate/:id', 'api/:version.Article/deleteArticleCateOne',[], ['id'=>'\d+']);
    //文章列表
    Route::get('list', 'api/:version.Article/getArticleList');
    Route::post('add', 'api/:version.Article/createArticle');
    Route::post('update', 'api/:version.Article/updateArticle');
    Route::delete(':id', 'api/:version.Article/deleteArticleOne',[], ['id'=>'\d+']);
    //回收站
    Route::get('recycle/list', 'api/:version.Article/getRecycleList');
    Route::put('recycle/:id', 'api/:version.Article/updateRecycle',[], ['id'=>'\d+']);
    Route::delete('recycle/:id', 'api/:version.Article/deleteRecycleOne',[], ['id'=>'\d+']);
});


//Attribute-属性管理
Route::group('api/:version/attribute', function (){
    Route::get('list', 'api/:version.Attribute/getAttributeList');
    Route::post('', 'api/:version.Attribute/createOrUpdateAttribute');
    Route::delete(':id', 'api/:version.Attribute/deleteOne',[], ['id'=>'\d+']);
});


//Filter-筛选条件
Route::group('api/:version/filter', function (){
    Route::get('list', 'api/:version.Filter/getFilterList');
    Route::post('', 'api/:version.Filter/createOrUpdateFilter');
    Route::delete(':id', 'api/:version.Filter/deleteOne',[], ['id'=>'\d+']);
});


//Position-推荐位管理
Route::group('api/:version/position', function (){
    Route::get('list', 'api/:version.Position/getPositionList');
    Route::post('', 'api/:version.Position/createOrUpdatePosition');
    Route::delete(':id', 'api/:version.Position/deleteOne',[], ['id'=>'\d+']);
});


//Link-友情链接管理
Route::group('api/:version/link', function (){
    Route::get('list', 'api/:version.Link/getLinkList');
    Route::post('', 'api/:version.Link/createOrUpdateLink');
    Route::delete(':id', 'api/:version.Link/deleteOne',[], ['id'=>'\d+']);
});


//User-用户管理
Route::group('api/:version/user', function (){
    Route::get('member/list', 'api/:version.User/getUserMemberList');
    Route::get('agent/list', 'api/:version.User/getUserAgentList');
    Route::post('', 'api/:version.User/createOrUpdateUser');
    Route::delete(':id', 'api/:version.User/deleteOne',[], ['id'=>'\d+']);
});


//Comment-评论管理
Route::group('api/:version/comment', function (){
    Route::get('list', 'api/:version.Comment/getCommentList');
    Route::post('update', 'api/:version.Comment/updateComment');
    Route::delete(':id', 'api/:version.Comment/deleteOne',[], ['id'=>'\d+']);
});


//Constant-常量信息
Route::group('api/:version/constant', function (){
    Route::get('info', 'api/:version.Constant/getConstantInfo');
});

//City-省市区数据API
Route::group('api/:version/city', function (){
    Route::get('info', 'api/:version.City/getCityInfo');
});