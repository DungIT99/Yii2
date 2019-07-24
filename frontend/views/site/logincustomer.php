<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use frontend\assets\LoginAsset;
LoginAsset::register($this);
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\loginCustomer;
?>
<div class="contein">
<div class="login">


            <?php $form = ActiveForm::begin(['id' => 'login']); ?>

                <?= $form->field($model, 'email')->textInput(['id' => 'email']) ?>
                <?= $form->field($model, 'password')->passwordInput(['id' => 'password']) 
                ?>
               
  <input type="submit" value="Sign In" style="width:89% "><br/>
  <!-- <button type="button" class="btn btn-success" style="width:50% ">facebook</button> -->
  <?=yii\authclient\widgets\AuthChoice::widget([
'baseAuthUrl'=>['site/auth']
  ])
  ?>
</div>

            <?php ActiveForm::end(); ?>
            </div>