<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
?>
<div id="login-box">

<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
  <div class="left">
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
   
    <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>

  </div>
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">singup with facebook</button>
    <button class="social-signin twitter">singup with Twitter</button>
    <button class="social-signin google">singup with Google+</button>
  </div>
  <div class="or">OR</div>
  <?php ActiveForm::end(); ?>
</div>
