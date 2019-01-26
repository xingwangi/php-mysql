<?php
//抽象类(不能直接被实例化使用，只能被继承来使用)
abstract class Model{
    public $link = '链接';
    //抽象方法（限定子类的方法只能叫这些名字），没有代码体
    abstract protected function get();
    abstract public function find($id);
    //可以有普通方法
    public function display(){
        echo 'tpl';
    }
}

class M extends Model{
    public function get(){
        echo 'get';
    }

    public function find($i){
        echo 'find'.$i;
    }
}


$m = new M;
$m->get();
$m->find(5);
$m->display();


class S extends Model{
    public function get(){

    }

    public function find($i){

    }
}



