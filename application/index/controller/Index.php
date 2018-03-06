<?php
namespace app\index\controller;

use think\Controller;

use think\Cache;

use think\Request;
use think\Session;

use think\Cookie;


/**
 * @Author: Administrator
 * @Date: 2018/2/9 14:54
 * @Version: v-1.0.0
 * @Introduce: 开始控制器
 */

class Index extends Controller
{
    public function index()
    {
        /*return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';*/
        return view();
    }

    /**
     * 声明赋值方法
     */
    /*public function fuzhi() {
        $name = "chencongye";

        $city = "shanghai";

        $this->assign("name",$name);
        $this->assign("city",$city);

        return view();
    }*/

    /**
     * 声明系统方法
     */
    /*public function sys() {
       return $this->fetch();
    }*/

    public function  useMongo() {

        $m = new \MongoClient();

        $db = $m->test;

        $collection = $db->createCollection("znlccy");

        $db->selectCollection("znlccy");

        $obj = array("title"=>"nihao","author"=>"znlccy");

        $collection->insert($obj);

        $query = array('title'=>'nihao');

        $cursor = $collection->find($query);

        foreach ($cursor as $obj) {
            echo $obj["title"] . "\n";
            echo $obj["_id"]. "\n";
        }

        $m->close();
    }

    public function setCookie() {
        Cookie::set("name","云之梦",20);
        Cookie::set("info","chencongye",50);
    }

    public function getCookie() {
        dump(Cookie::get("name"));
        dump(Cookie::get("info"));
    }

    public function addFile() {
        return $this->fetch();
    }

    public function useRedis() {
        $redis = new \Redis();

        $redis->connect('127.0.0.1:6379');
        $redis->set('name','chencongye');

        /*$redis->del("name");*/
        return json(array('name'=>$redis->get('name')));
    }

    /**
     * 实现单文件上传
     */
    public function upload(Request $request) {

        $file = $request->file('file');

        if($info=$file->move("./upload/"))
        {
            dump($info);
        }
        else
        {
            dump($info->getError());
        }
    }

    /**
     * 实现多文件上传功能
     */
    public function addFiles() {
        return $this->fetch();
    }

}
