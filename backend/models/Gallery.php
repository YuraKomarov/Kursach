<?php
namespace backend\models;



use yii\web\UploadedFile;
use yii\db\ActiveRecord;



class Gallery extends ActiveRecord
{


    public $image;

    public function path(){
        $filename =  $this->image->baseName.".".$this->image->extension;
        $dir = "/frontend/web/upload/gallery/".$filename;
        $resdir = "/frontend/web/upload/galleryresized/".$filename;
        $path = ['dir' => $dir, 'filename' => $filename, 'resdir' => $resdir];
        return $path;
    }

    public function upload($dir){
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
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['name'], 'trim'],
            [['path'], 'safe']
        ];
    }
}