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

<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <div class="form-group">
      
        <?= $form->field($model, 'file')->fileInput() ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'description')->textInput() ?>
    </div>

    <input type="submit" value="addContent" style="width:20% "><br/>
  


            <?php ActiveForm::end(); ?>

  
            <table class="table table-hover" style="color:cornflowerblue">
                <thead>
                    <tr >
                        <th>STT</th>
                        <th>file</th>
                        <th>description</th>
                    </tr>
                </thead>
                <tbody>
<?php if ($content) :foreach ($content as $e) : $n=1 ?>
                    <tr>
                        <td><?php echo $n ?></td>
                        <td><?php echo $e->file ?></td>
                        <td><?php  echo $e->description  ?></td>
                    </tr>
<?php $n+=1; endforeach;endif; ?>
                </tbody>
            </table>
          
