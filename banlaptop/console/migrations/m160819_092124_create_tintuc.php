<?php

use yii\db\Migration;

class m160819_092124_create_tintuc extends Migration
{
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
            $this->createTable('{{%tintuc}}', [
            'Mabt' => $this->primaryKey(),
            'Tenbt' => $this->string()->notNull()->unique(),
              'Tomtat'=>$this->text(),
              'Noidung'=>$this->text(),
              'Ngaycn'=>$this->datetime(),
              'Image'=>$this->string(255)->notNull(),
              'Luotxem'=>$this->integer(),
            'Trangthai' => $this->integer(1)->notNull(),
        ], $tableOptions);
        }

    }

    public function down()
    {
        echo "m160819_092124_create_tintuc cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
