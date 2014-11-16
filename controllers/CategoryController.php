<?php

namespace amstr1k\category\controllers;

use Yii;
use amstr1k\category\models\backend\CategorySearch;
use amstr1k\category\models\Category;
use yii\helpers\Url;
use yii\web\Controller;
use yii\filters\VerbFilter;

class CategoryController extends Controller
{
  public function behaviors()
  {
    return [
      'verbs' => [
        'class'   => VerbFilter::className(),
        'actions' => [
          'delete' => ['post'],
        ],
      ],
    ];
  }

  public function actionIndex()
  {
    $searchModel  = new CategorySearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    Url::remember(Yii::$app->request->getUrl(), 'offer-category-filter');

    return $this->render('index', [
      'searchModel'  => $searchModel,
      'dataProvider' => $dataProvider,
    ]);
  }

  public function actionCreate()
  {
    $model = new Category();

    if($model->load(Yii::$app->request->post()) && $model->save())
    {
      return $this->redirect(['index']);
    }
    else
    {
      return $this->render('create', [
        'model' => $model,
      ]);
    }
  }
} 