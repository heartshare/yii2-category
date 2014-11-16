<?php

namespace amstr1k\category;

use yii\base\BootstrapInterface;

/**
 * Category module bootstrap class.
 */
class Bootstrap implements BootstrapInterface
{
  /**
   * @inheritdoc
   */
  public function bootstrap($app)
  {
    // Add module I18N category.
    if(!isset($app->i18n->translations['amstr1k/category']) && !isset($app->i18n->translations['amstr1k/*'])) {
      $app->i18n->translations['amstr1k/category'] = [
        'class'            => 'yii\i18n\PhpMessageSource',
        'basePath'         => '@amstr1k/category/messages',
        'forceTranslation' => true,
        'fileMap'          => [
          'amstr1k/category' => 'category.php',
        ]
      ];
    }
  }
}