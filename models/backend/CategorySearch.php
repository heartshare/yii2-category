<?php

namespace amstr1k\category\models\backend;

use amstr1k\category\models\OfferCategory;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class CategorySearch extends OfferCategory
{
  public function rules()
  {
    return [
      [['id'], 'integer'],
      [['title'], 'safe'],
    ];
  }

  /**
   * @inheritdoc
   */
  public function scenarios()
  {
    // bypass scenarios() implementation in the parent class
    return Model::scenarios();
  }

  /**
   * Creates data provider instance with search query applied
   *
   * @param array $params
   *
   * @return ActiveDataProvider
   */
  public function search($params)
  {
    $query = OfferCategory::find();

    $dataProvider = new ActiveDataProvider([
      'query' => $query,
    ]);

    if (!($this->load($params) && $this->validate())) {
      return $dataProvider;
    }

    $query->andFilterWhere([
      'id' => $this->id,
    ]);

    $query->andFilterWhere(['like', 'title', $this->title]);

    return $dataProvider;
  }
} 