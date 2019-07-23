<?php
namespace frontend\widgets;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use backend\models\Content;
use yii\web\Controller;
use yii\web\UploadedFile;




class contentWidget extends Widget
{
    public $model;
    public $content;
   

    public function init()
    {
        parent::init();
       $con = new Content();
       $this->model =  $con;
     
        if(Yii::$app->user->identity){
            
            $id = Yii::$app->user->identity->id;
            if($con->load(Yii::$app->request->post())){
            $con->file = UploadedFile::getInstance($con, 'file');
            if($con->file){
             
                $con->file->saveAs('../../public/'.$con->file->name);
                $this->model = $con->upload($id);
              
             }
            }
            $this->content = $con->getContent($id);
        } 
        $this->model = $con;
     
       
    }
   
    public function run()
    {
       return $this->render('contentWidget',['model'=>$this->model,'content'=>$this->content]);
    }
}

?>