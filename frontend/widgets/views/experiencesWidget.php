<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

AppAsset::register($this);

?>

<div class="">

<?php $form = ActiveForm::begin(); ?>

<div class="form-group">
        <?= $form->field($model, 'start_at')->textInput(['class'=>'da']) ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'end_at')->textInput(['class'=>'da']) ?>
    </div>
    <div class="form-group">
      
        <?= $form->field($model, 'namecompany')->textInput() ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'aboutjob')->textInput() ?>
    </div>
 
   

    <input type="submit" value="add" style="width:20% "><br/>
  


            <?php ActiveForm::end(); ?>

            
            <table class="table table-hover" style="color:cornflowerblue">
                <thead>
                    <tr style="">
                        <th>STT</th>
                        <!-- <th>userId</th> -->
                        <th>start_at</th>
                        <th>end_at</th>
                        <th>namecompany</th>
                        <th>aboutjob</th>
                    </tr>
                </thead>
                <tbody>
<?php if ($ex) :foreach ($ex as $e) : $n =1 ?>
                    <tr>
                        <td><?php echo $n ?></td>
                        <!-- <td><?php  echo $e->userId  ?></td> -->
                        <td><?php echo $e->start_at ?></td>
                        <td><?php  echo $e->end_at  ?></td>
                        <td><?php  echo $e->namecompany  ?></td>
                        <td><?php  echo $e->aboutjob  ?></td>
                       
                      
                    </tr>
<?php $n++; endforeach;endif; ?>
                </tbody>
            </table>
            
