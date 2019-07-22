<?php
namespace frontend\widgets;
use Yii;

use yii\base\Widget;
use yii\helpers\Html;

use frontend\models\CustomerSingup;
use yii\web\Controller;

class registerWidget extends Widget
{

    
    public $message;
    public function init()
    {
        parent::init();
        $model = new CustomerSingup();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            $model->created_at = time();
            $model->updated_at = time();
        }
        
        $this->message = $model;
    }
    

    public function run()
    {
    //     return Html::encode(['registerWidget'],$this->message);
       return $this->render('registerWidget',['model'=>$this->message]);
    }
}

?>