<?php

use yii\helpers\Html;
use yii\grid\GridView;
use amstr1k\category\Module;

/* @var $this yii\web\View */
/* @var $searchModel amstr1k\category\models\backend\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title                   = Module::t('category', 'CATEGORIES');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offer-category-index">

  <p>
    <?= Html::a(Yii::t('category', 'CREATE_CATEGORY'), ['create'], ['class' => 'btn btn-success']) ?>
  </p>

  <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel'  => $searchModel,
    'columns'      => [
      'id',
      'title',
      [
        'options' => ['style' => 'width: 10%'],
        'class'   => 'yii\grid\ActionColumn'

      ],
    ],
  ]); ?>

</div>
