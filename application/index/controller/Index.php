<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
class Index extends Controller{
    public function index(){
        $time = time();
//        $rel = Db::execute("INSERT INTO `tp_data`(`id`,`name`,`create_time`) VALUES (null,'xiaode',{$time}),(null,'rufeike',{$time})");
//        $rel = Db::query("SELECT * FROM `tp_data`");
//        dump($rel);
        $table = Db::table('tp_data');
        dump($table);

    }
}
