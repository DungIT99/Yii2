<?php
namespace frontend\widgets;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\experience;
use yii\web\Controller;




class experiencesWidget extends Widget
{
    public $model;
    public $ex;

    public function init()
    {
       
        parent::init();

        $experience = new experience();
       if(Yii::$app->user->identity){
           $id = Yii::$app->user->identity->id;
        if ($experience->load(Yii::$app->request->post()) ){    
            // echo "post";die;
            $this->model = $experience->experience($id);

        }
        $this->ex= $experience->getExperiences($id);
       
        
     
    }else{
        $this->model = $experience;
    }
    $this->model= $experience;
       }
        
   
    public function run()
    {
       return $this->render('experiencesWidget',['model'=>$this->model,'ex'=>$this->ex]);
    }
}

?>