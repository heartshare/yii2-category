<?php

use amstr1k\category\Module;

/* @var $this yii\web\View */
/* @var $model amstr1k\category\models\Category */

$this->title                   = Module::t('category', 'CREATE_CATEGORY');
$this->params['breadcrumbs'][] = ['label' => Module::t('category', 'CATEGORIES'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offer-category-create">

  <?= $this->render('_form', [
    'model' => $model,
  ]) ?>

</div>
