<?php
namespace common\models;



use yii\db\ActiveRecord;



class Settings extends ActiveRecord
{
    public $image;

    public function attributeLabels()
    {
        return [
            'email' => 'Почта для обратной связи',
            'newsFieldCount' => 'Количество столбцов на вкладке "Новости"',
            'image' => 'Фон сайта(загрузите новую картинку для фона сайта)',
        ];
    }

    public function uploading($dir){
        if($this->validate())
        {
            $this->image->saveAs($dir);
        }
        else{
            return false;
        }
    }
    public function rules()
    {
        return [
            [['email', 'newsFieldCount'], 'required'],
            [['email'], 'email'],
        ];
    }

}