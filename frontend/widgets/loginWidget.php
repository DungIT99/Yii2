<?php
namespace frontend\widgets;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\Customers;
use common\models\loginCustomer;
use yii\web\Controller;




class loginWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        if (!Yii::$app->user->isGuest) {
            // return $this->goHome();
           
          
        }
        $model = new LoginCustomer();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            // return $this->goBack();
            $this->message = $model;
          
        } else {
            // var_dump(9); die;
            $model->password = '';
            $this->message = $model;
        }
    }

    public function run()
    {
       return $this->render('loginWidget',['model'=>$this->message]);
    }
}

?>