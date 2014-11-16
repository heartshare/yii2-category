<?php
/**
 * Created by PhpStorm.
 * User: amstr1k
 * Date: 20.10.14
 * Time: 21:53
 */

namespace amstr1k\category\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use common\components\behaviors\NestedSet;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
  /**
   * @inheritdoc
   */
  public static function tableName()
  {
    return '{{%category}}';
  }

  public function behaviors()
  {
    return [
      TimestampBehavior::className(),
      [
        'class' => NestedSet::className(),
      ],
    ];
  }

  public static function createQuery()
  {
    return new CategoryQuery(['modelClass' => get_called_class()]);
  }

  /**
   * @inheritdoc
   */
  public function rules()
  {
    return [
      [['title'], 'required'],
      [['title'], 'string', 'max' => 255],
      [['description'], 'string', 'max' => 1024],

    ];
  }

  public function attributeLabels()
  {
    return [
      'id' => Yii::t('backend', 'ID'),
    ];
  }
} 