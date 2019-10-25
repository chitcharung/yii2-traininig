<?php

//use yii\db\Migration;
use yii\db\Schema; // ใช้ Schema
use yii\db\Migration;


/**
 * Class m191025_025852_creat
 */
class m191025_025852_creat extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->createTable('{{%post}}', [
'id' => Schema::TYPE_PK,
'title' => Schema::TYPE_STRING . " NOT NULL COMMENT 'หัวข้อ'", //แก้ไขโดยใส่ comment
'content' => Schema::TYPE_TEXT . " NULL COMMENT 'รายละเอียด'", //แก้ไขโดยใส่ comment
]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191025_025852_creat cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191025_025852_creat cannot be reverted.\n";

        return false;
    }
    */
}
