<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use frontend\assets\ExAsset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

ExAsset::register($this);

?>
<div class="content">
<div class="contain">



<?php $form = ActiveForm::begin();  ?>

<div class="form-group">
        <?= $form->field($model, 'start_at')->textInput(['class'=>'datepicker'])  ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'end_at')->textInput(['class'=>'datepicker']) ?>
    </div>
    <div class="form-group">
      
        <?= $form->field($model, 'namecompany')->textInput() ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'aboutjob')->textInput() ?>
    </div>
 
   

    <input type="submit" value="add"  class="btn btn-success"style="width:20% "><br/>
  


            <?php ActiveForm::end(); ?>

            </div>

            <table class="table table-hover" boder="1" style="color:cornflowerblue">
                <thead>
                    <tr style="">
                        <th>STT</th>
                        <th>start_at</th>
                        <th>end_at</th>
                        <th>namecompany</th>
                        <th>aboutjob</th>
                    </tr>
                </thead>
                <tbody>
<?php if ($ex) :foreach($ex as $m):$n=1 ?>
                    <tr>
                        <td><?php echo $n ?></td>
                        <td><?php echo $m->start_at ?></td>
                        <td><?php  echo $m->end_at  ?></td>
                        <td><?php  echo $m->namecompany  ?></td>
                        <td><?php  echo $m->aboutjob  ?></td>
                       
                    </tr>
<?php $n++;endforeach ;endif; ?>
                </tbody>
            </table>
            </div>     
           
            </div>
            </div>