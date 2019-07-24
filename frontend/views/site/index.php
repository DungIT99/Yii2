<?php 
use yii\widgets\ActiveForm;
use frontend\assets\ExAsset;

ExAsset::register($this);

?>
<div class="content">
<div class="contain">
    <?php 
    $session = Yii::$app->session;
       
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
        <?= $form->field($model, 'birthday')->textInput(['class'=>'datepicker']) ?>
        
    </div>
   

    <input type="submit" value="update"  class ="btn btn-success"style="width:20% "><br/>
  
    <?php ActiveForm::end(); ?>
   
</div>

<table class="table table-hover"  class="btn btn-success"style="color:cornflowerblue">
                <thead>
                    <tr >
                        <th>Image</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>birthday</th>
                    </tr>
                </thead>
                <tbody>
<?php if($ex) : foreach ($ex as $e ):$n=1  ?>
                    <tr>
                       <td><img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/public/<?php echo $e->image ?>" ></td>
                       <td><?php echo $e->firstname ?></td>
                       <td><?php echo $e->lastname ?></td>
                       <td><?php echo $e->phone ?></td>
                       <td><?php echo $e->email ?></td>
                       <td><?php print( $e->birthday)?></td>
                    </tr>
<?php $n+=1;endforeach;endif ?>

                </tbody>
            </table>
            </div>     
           
           </div>
           </div>