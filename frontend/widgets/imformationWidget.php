<?php
namespace frontend\widgets;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\customers;
use frontend\models\UpdateCustomer;
use yii\web\UploadedFile;


class imformationWidget extends Widget
{
    public $model;

    public function init()
    {
        $cus = new UpdateCustomer();
        parent::init();
        if(Yii::$app->user->identity){
            $this->model = Yii::$app->user->identity;
        
        if ( $cus->load(Yii::$app->request->post())) {
            $cus->image = UploadedFile::getInstance($cus, 'image');
            if( $cus->image){
                $cus->image->saveAs('../../public/'.$cus->image->name);
              
        }
        $this->model = $cus->updateCus($this->model->id);
    }
      $this->model = $cus; 
   
    }
}
    public function run()
    {
        // var_dump($this->model); die;
       return $this->render('imformationWidget',['model'=>$this->model]);
    }
    
}

?>