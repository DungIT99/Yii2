<?php 
use yii\widgets\ActiveForm;
use common\models\UpdateCustomer;
?>
<?php $form = ActiveForm::begin(); ?>
<div class="form-group">
        <?= $form->field($model, 'image')->fileInput() ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
      
        <?= $form->field($model, 'lastname')->textInput() ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'phone')->textInput() ?>
    </div>
 
    <div class="form-group">
        <?= $form->field($model, 'email')->textInput() ?>
    </div>
 

    <div class="form-group">
        <?= $form->field($model, 'address')->textInput() ?>
        
    </div>
   

    <input type="submit" value="update" style="width:20% "><br/>
  
    <?php ActiveForm::end(); ?>
   

