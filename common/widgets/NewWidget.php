<?php
namespace common\widgets;

use yii\base\Widget;


class NewWidget extends Widget{

    public $posts;

    public function init(){
        parent::init();
//        if($this->posts === null){
//            $this->posts = "Новостей нет :(";
//        }
    }

    public function run(){
        return $this->render('new', ['posts' => $this->posts]);
    }

}