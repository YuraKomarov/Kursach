<?php
namespace common\models;


use yii\db\ActiveRecord;


class GalleryLoad extends ActiveRecord
{
    public static function tableName(){
        return 'gallery';
    }
    public function rules(){

    }

}