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


<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <div class="form-group">
      
        <?= $form->field($model, 'file')->fileInput() ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'description')->textInput() ?>
    </div>

    <input type="submit" value="addContent" class="btn btn-success" style="width:20% "><br/>
  
  

            <?php ActiveForm::end(); ?>
            </div>
  
            <table class="table table-hover"  class="btn btn-success"style="color:cornflowerblue">
                <thead>
                    <tr >
                        <th>STT</th>
                        <th>file</th>
                        <th>description</th>
                    </tr>
                </thead>
                <tbody>
<?php if ($content) : foreach($content as $c):$n=1 ?>
                    <tr>
                        <td><?php echo $n ?></td>
                        <td><?php echo $c->file ?></td>
                        <td><?php  echo $c->description  ?></td>
                    </tr>
<?php $n+=1;endforeach ;endif; ?>
                </tbody>
            </table>
            </div>     
           
           </div>
           </div>
