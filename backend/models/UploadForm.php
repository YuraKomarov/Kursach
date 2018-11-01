<?php
namespace backend\models;



use yii\web\UploadedFile;
use yii\db\ActiveRecord;
use yii\helpers\Url;
use Yii;


class UploadForm extends ActiveRecord
    {

    public static function  tableName()
    {
        return 'news';
    }
//    public $title;
//    public $text;
 //   public $file;
//    public $date;
    public $image;

    public function path(){
        $filename =  $this->image->baseName.".".$this->image->extension;
        $dir = "/frontend/web/upload/images/".$filename;
        $resdir = "/frontend/web/upload/imagesresized/".$filename;
        $fordetail = "/frontend/web/upload/imagesfordetail/".$filename;
        $path = ['dir' => $dir, 'filename' => $filename, 'resdir' => $resdir, 'fordetail' => $fordetail];
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
    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок',
            'text' => 'Текст статьи',
            'pubday' => 'Дата публикации',
            'image' => 'Изображение',
            'annotation' => 'Аннотация'
        ];
    }
    public function rules()
    {
        return [
        [['text', 'title', 'pubday', 'annotation'], 'required'],
        [['title'], 'string', 'min' => 1 ],
        [['text'], 'string', 'min' => 1 ],
        [['pubday'], 'string' ],
        [['image'], 'file', 'extensions' => 'png, jpg'],
        [['picref'], 'safe'],
        [['respicref'], 'safe']
        ];
    }
}
