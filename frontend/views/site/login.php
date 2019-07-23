<?php


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\loginCustomer;


?>

<div class="login">

            <?php $form = ActiveForm::begin(['id' => 'login']); ?>

                <?= $form->field($model, 'email')->textInput(['id' => 'email']) ?>
                <?= $form->field($model, 'password')->passwordInput(['id' => 'password']) 
                ?>
               
  <input type="submit" value="Sign In" style="width:89% "><br/>
  <button type="button" class="btn btn-success" style="width:50% ">facebook</button>
</div>

            <?php ActiveForm::end(); ?>
