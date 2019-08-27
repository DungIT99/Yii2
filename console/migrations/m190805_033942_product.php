<?php

use yii\db\Migration;

/**
 * Class m190805_033942_product
 */
class m190805_033942_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'category_id' => $this->integer(),
            'price'=>$this->string(),
            'status'=> $this->smallInteger(),
            'created_at' => $this->string(),
            'updated_at' => $this->string(),
            'attribute_id'=>$this->integer(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%product}}');
    }
}
