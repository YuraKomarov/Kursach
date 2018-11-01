<?php
namespace backend\controllers;


use common\models\NewsLoad;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\UploadForm;
use yii\web\Session;
use yii\web\UploadedFile;
use yii\web\Response;
use backend\models\Gallery;
use yii\imagine\Image;
use Imagine\Image\Box;
use backend\models\Settings;
use yii\helpers\Url;
use yii\rbac;
use yii\data\Pagination;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
//  public function behaviors()
//    {
//        return [
//
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'actions' => ['login', 'error'],
//                        'allow' => true,
//                    ],
//                    [
//                        'actions' => ['logout', 'index'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {

        if (!Yii::$app->user->isGuest) {
           return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }

    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionUpload() {

        $model = new UploadForm();
        $respath = Yii::getAlias('@uploadPath/')."imagesresized/";
        $path = Yii::getAlias('@uploadPath/')."images/";
        $fordetail = Yii::getAlias('@uploadPath/')."imagesfordetail/";
        if($model->load(Yii::$app->request->post()))
        {
            $model->image = UploadedFile::getInstance($model, 'image');
            if($model->image) {
                 $model->picref = $model->path()[dir];
                 $model->respicref = $model->path()[resdir];
                 $model->fordetail = $model->path()[fordetail];
            }
            if($model->save()){
                $model->upload($path.$model->path()[filename]);
                $photo = Image::getImagine()->open($path.$model->path()[filename]);
                $photo->thumbnail(new Box(360, 360))->save($respath.$model->path()[filename], ['quality' => 100]);
                $photo = Image::getImagine()->open($path.$model->path()[filename]);
                $photo->thumbnail(new Box(1140, 1140))->save($fordetail.$model->path()[filename], ['quality' => 100]);
                Yii::$app->session->setFlash('success', 'normalno');
                return $this->refresh();
            }
            else{
                Yii::$app->session->setFlash('error', 'nenormalno');
            }
        }
        return $this->render('upload', compact('model'));

    }

    public function actionGallery(){

        $model = new Gallery();
        $respath = Yii::getAlias('@uploadPath/')."galleryresized/";
        $path = Yii::getAlias('@uploadPath/')."gallery/";

        if($model->load(Yii::$app->request->post()))
        {

            $model->image = UploadedFile::getInstance($model, 'image');
            if($model->image) {

                $model->name = $model->path()[filename];
                $model->path = $model->path()[dir];
                $model->respath = $model->path()[resdir];
            }
            if($model->save()){
                $model->upload( $path.$model->path()[filename]);
                $photo = Image::getImagine()->open($path.$model->path()[filename]);
                $photo->thumbnail(new Box(800, 800))->save($respath.$model->name, ['quality' => 100]);
                Yii::$app->session->setFlash('success', 'normalno');
                return $this->refresh();
            }
            else{
                Yii::$app->session->setFlash('error', 'nenormalno');
            }


        }
        $pictures = Gallery::find()->all();
        return $this->render('gallery', compact('model', 'pictures'));
    }


    public function actionSettings(){

       // $model = new Settings();
        $model = Settings::findOne(1);
        if($model->load(Yii::$app->request->post()))
        {
            if($model->save())
            {
                Yii::$app->session->setFlash('success', 'normalno');
                return $this->refresh();
            }
            else{
                Yii::$app->session->setFlash('error', 'nenormalno');
            }

        }



        return $this->render('settings', compact('model'));
    }
    public function actionChangenews(){
        $model = NewsLoad::findOne(1);
        if($model->load(Yii::$app->request->post()))
        {
            if($model->save())
            {
                Yii::$app->session->setFlash('success', 'normalno');
                return $this->refresh();
            }
            else{
                Yii::$app->session->setFlash('error', 'nenormalno');
            }

        }
        return $this->render('changenews', compact('model'));
    }
    public function actionNewsch(){

        $query = NewsLoad::find()->where(['<=', 'id', 20]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pagesize' => 6]);
        $posts = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('newsch', compact('posts', 'pages'));
    }
    public function actionNew($id){

        $id = Yii::$app->request->get('id');
        //$result = NewsLoad::findOne($id);
        $model = NewsLoad::findOne($id);
        if($model->load(Yii::$app->request->post()))
        {
            if($model->save())
            {
                Yii::$app->session->setFlash('success', 'normalno');
                return $this->refresh();
            }
            else{
                Yii::$app->session->setFlash('error', 'nenormalno');
            }

        }
        return $this->render('changenews', compact('model'));

    }
}
