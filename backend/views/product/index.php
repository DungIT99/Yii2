<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    //  echo $this->render('_search', ['model' => $searchModel]);
      ?>

    <?php 
     
   $gridColumns = [
       ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            'category_id',
            'price',
            'status',
            'created_at',
            'updated_at',
            'attribute_id',
       ['class' => 'yii\grid\ActionColumn'],
   ];

   echo ExportMenu::widget([
       'dataProvider' => $dataProvider,
       'columns' => $gridColumns
   ]);
   
   echo \kartik\grid\GridView::widget([
       'dataProvider' => $dataProvider,
       'filterModel' => $searchModel,
       'columns' => $gridColumns
   ]);
   ?>


    

</div>
