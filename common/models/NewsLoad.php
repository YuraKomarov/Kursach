<?php
namespace common\models;


use yii\db\ActiveRecord;


class NewsLoad extends ActiveRecord
{
//
    public static function tableName(){
        return 'news';
    }
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['text'], 'required'],
            [['pubday'], 'required'],
        ];
    }
}
?>