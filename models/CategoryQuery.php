<?php

namespace amstr1k\category\models;

use amstr1k\category\models;
use yii\db\ActiveQuery;

class CategoryQuery extends ActiveQuery
{
  public function published()
  {
    $this->andWhere('category.published_at < NOW()');

    return $this;
  }
} 