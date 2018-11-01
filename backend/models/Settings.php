<?php
namespace backend\models;



use yii\web\UploadedFile;
use yii\db\ActiveRecord;



class Settings extends ActiveRecord
{
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['email'], 'email'],
        ];
    }

}