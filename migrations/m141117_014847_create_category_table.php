<?php

use yii\db\Schema;
use yii\db\Migration;

class m141117_014847_create_category_table extends Migration
{
  public function safeUp()
  {
    $tableOptions = null;

    if($this->db->driverName === 'mysql')
      $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

    $this->createTable('{{%category}}', [
      'id'           => 'pk',
      'title'        => Schema::TYPE_STRING . '(255)',
      'description'  => Schema::TYPE_TEXT,
      'lft'          => Schema::TYPE_INTEGER . '(11)',
      'rgt'          => Schema::TYPE_INTEGER . '(11)',
      'level'        => Schema::TYPE_SMALLINT . '(5)',
      'is_published' => 'tinyint(1) NOT NULL DEFAULT 0',
      'created_at'   => Schema::TYPE_INTEGER . '(11) NOT NULL',
      'updated_at'   => Schema::TYPE_INTEGER . '(11) NOT NULL',
    ], $tableOptions);
  }

  public function safeDown()
  {
    $this->dropTable('{{%category}}');
  }
}
