<?php
namespace app\index\controller;
use \think\Controller;
class Index extends Controller{
    public function index(){
//        $db = db('data');
//        $rel = $db->execute("select * from tp_data");
//        $rel = Db::execute("INSERT INTO `tp_data`(`id`,`name`,`create_time`) VALUES (null,'xiaode',{$time}),(null,'rufeike',{$time})");
//        $rel = Db::query("SELECT * FROM `tp_data`");
//        dump($rel);
//        $data = array(
//            array('id'=>15,'name'=>'xiao1','create_time'=>time()),
//            array('id'=>16,'name'=>'xiao2','create_time'=>time()),
//            array('id'=>17,'name'=>'xiao3','create_time'=>time()),
//        );
//        $data = array('id'=>18,'name'=>'xiao1','create_time'=>time());
//        $rel = db('data')->where(array('id'=>array('eq',10)))->delete();//方式1
//        $rel = db('data')->where('id',10)->update($data);//方式2
//        $rel = db('data')->delete(11);//方式3
//        $rel = db('data')->delete(12,13);//方式3

        $map = array(
            'id'=>array('gt',5)
        );
        $map2 = array(
            'id'=>array('lt',15),
            'type'=>array('eq',0),
        );
        $rel1 = db('data')->where($map)->where($map2)->select();//方式1
        dump($rel1);

    }
}
