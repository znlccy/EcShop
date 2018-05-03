<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/3
 * Time: 14:16
 */
namespace data\taglib;

use think\template\TagLib;

class Znl extends TagLib {

    /**
     * 定义标签列表
     */
    protected $tags = [
        //标签定义：attr 属性列表 close 是否关闭(0或者1 默认1) alias 标签别名 level 嵌套层次
        //专题
        'topicinfo'             =>  ['attr' => 'id,cache,name', 'close' => 1],                      //专题详情

        //文章中心
        'articleclasslist'      =>  ['attr' => 'page,num,where,order,field,cache', 'close'  => 1 ], //分类列表
        'articlelist'           =>  ['attr' => 'page,num,wehere,order,field,cache', 'close' => 1],  //列表
        'articleinfo'           =>  ['attr' => 'id,field,cache,name', 'close'  => 1],               //详情

        //帮助中心
        'helpclasslist'         =>  ['attr' => 'page,num,where,order,field,cache',  'close' => 1],  //帮助中心分类列表
        'helpdocumentlist'      =>  ['attr' => 'page,num,where,order,field,cache',  'close' => 1],  //帮助中心内容列表
        'helpdocumentinfo'      =>  ['attr' => 'id,field,cache,name',   'close' => 1],              //帮助中心内容详情

        //公告
        'noticelist'            =>  ['attr' => 'page,num,where,order,field,cache',  'close' => 1],  //公告列表
        'noticeinfo'            =>  ['attr' => 'id,field,cache,name',   'close' => 1],              //公告详情

        //网站基础信息
        'defaultsearch'         =>  ['attr' => '',  'close' => 0],                                  //默认搜索

    ];
}