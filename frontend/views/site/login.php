<?php


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\loginCustomer;
use frontend\assets\loginAsset;

loginAsset::register($this);

?>


            <?php $form = ActiveForm::begin(['id' => 'login']); ?>

                <?= $form->field($model, 'email')->textInput(['id' => 'email']) ?>
                <?= $form->field($model, 'password')->passwordInput(['id' => 'password']) 
                ?>
               
  <input type="submit" value="Sign In" style="width:84% "><br/>
  <?=yii\authclient\widgets\AuthChoice::widget([
'baseAuthUrl'=>['site/auth']
  ])
  ?>
</div>

            <?php ActiveForm::end(); ?>
            </div>