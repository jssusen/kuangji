<?php

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
Route::post('apis/:version/business','apis/:version.business/index');
Route::post('apis/:version/upload','apis/:version.upload/uploadImg');//上传
Route::get('apis/:version/register','apis/:version.member/register');//注册
Route::get('apis/:version/authentication','apis/:version.member/authentication');//实名认证
Route::get('apis/:version/login','apis/:version.member/login');//登陆
Route::get('apis/:version/work_save','apis/:version.WorkOrder/workSave');//工单提交
Route::get('apis/:version/word_record','apis/:version.WorkOrder/wordRecord');//工单列表
Route::get('apis/:version/new','apis/:version.NewSave/index');//新闻
Route::get('apis/:version/details','apis/:version.NewSave/details');//新闻详情
Route::get('apis/:version/user_info','apis/:version.member/getUserInfo');//用户信息
Route::get('apis/:version/recommend','apis/:version.member/recommend');//用户推广二维码
Route::get('apis/:version/share_line','apis/:version.member/shareLine');//团队信息
Route::get('apis/:version/transfer','apis/:version.member/transfer');//转账
Route::get('apis/:version/money_log','apis/:version.member/moneyLog');//羽化币
Route::get('apis/:version/my_apply','apis/:version.member/myApply');//我的预约
Route::get('apis/:version/extension','apis/:version.member/extension');//推广收益
Route::get('apis/:version/dog','apis/:version.dog/getDogList');//产品
Route::get('apis/:version/apply','apis/:version.dog/apply');//开始预约
Route::get('apis/:version/joinRob','apis/:version.dog/joinRob');//抢购
Route::get('apis/:version/adopt_dog','apis/:version.dog/adopt_dog');//抢购结果





return [
    //别名配置,别名只能是映射到控制器且访问时必须加上请求的方法
    '__alias__'   => [
    ],
    //变量规则
    '__pattern__' => [
    ],
//        域名绑定到模块
//        '__domain__'  => [
//            'admin' => 'admin',
//            'api'   => 'api',
//        ],
];
